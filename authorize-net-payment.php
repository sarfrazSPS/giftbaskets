<?php
require_once 'vendor-authorize-net-payment/autoload.php';
require_once "config.php";
include('phpmailer-fn-api.php');
// require_once('dbclass.php');
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

// Create a unique reference ID of transaction
$ref_id = 'ref_id_' . time();


// Create a MerchantAuthenticationType object with the authentication details
// which are availale in the config.php file
$merchant_authentication = new AnetAPI\MerchantAuthenticationType();
$merchant_authentication->setName(AUTHORIZE_API_LOGIN_ID);
$merchant_authentication->setTransactionKey(AUTHORIZE_TRANSACTION_KEY); 

// Create the payment data object using a credit card details
$credit_card = new AnetAPI\CreditCardType();
$credit_card->setCardNumber($cc_number);
$credit_card->setExpirationDate($cc_exp_year_month);
$credit_card->setCardCode($cvc_code); // Optional

 // Now add the payment data to a PaymentType object
$payment_type = new AnetAPI\PaymentType();
$payment_type->setCreditCard($credit_card);

// Create an order information object (Optional)
$order_info = new AnetAPI\OrderType();
// $order_info->setInvoiceNumber("20230001"); // Optional
$order_info->setDescription($description);

// Create a customer's identifying information object (Optional)
$customer_data = new AnetAPI\CustomerDataType(); 
$customer_data->setType("individual"); 
// $customer_data->setId("9998659"); // Optional
$customer_data->setEmail($checkout_ship_email); 

 // Create customer's Bill To address object and set data (Optional)
$customer_billing = new AnetAPI\CustomerAddressType();
$customer_billing->setFirstName($checkout_bill_fname);
$customer_billing->setLastName($checkout_bill_lname);
$customer_billing->setCompany($checkout_ship_company);
$customer_billing->setAddress($checkout_bill_street."".$checkout_bill_address);
$customer_billing->setCity($checkout_bill_city);
$customer_billing->setState($checkout_bill_state);
$customer_billing->setZip($checkout_bill_postal);
$customer_billing->setCountry("US");
$customer_billing->setPhoneNumber($checkout_bill_phone);

 // Create customer's Ship To address object and set data (Optional)
$customer_shipping = new AnetAPI\CustomerAddressType();
$customer_shipping->setFirstName($checkout_ship_fname);
$customer_shipping->setLastName($checkout_ship_lname);
$customer_shipping->setAddress($checkout_ship_street."".$checkout_ship_address);
$customer_shipping->setCity($checkout_ship_city);
$customer_shipping->setState($checkout_ship_state);
$customer_shipping->setZip($checkout_ship_postal);
$customer_shipping->setCountry("US");


// Create a TransactionRequestType object and set all created objects in it
$transaction_request_type = new AnetAPI\TransactionRequestType();
$transaction_request_type->setTransactionType("authCaptureTransaction");
$transaction_request_type->setAmount($amount);
$transaction_request_type->setPayment($payment_type);
$transaction_request_type->setOrder($order_info);
$transaction_request_type->setCustomer($customer_data);
$transaction_request_type->setBillTo($customer_billing);
$transaction_request_type->setShipTo($customer_shipping);

//////////////////////////////////product-details///////////////////////////////////////
$arr = json_decode($jsonData);
// print_r($arr);
$lineItems = [];
foreach ($arr as $item) {
    $productdetail = substr(strstr($item->productDetails, '<br/>'), 5);
    // echo $productdetail;

    $lineItem1 = new AnetAPI\LineItemType();
    $lineItem1->setItemId($item->id);
    $lineItem1->setName($item->name);
    $lineItem1->setDescription($productdetail);
    $lineItem1->setQuantity($item->quantity);
    $lineItem1->setUnitPrice($item->price);
    array_push($lineItems, $lineItem1);

    
}
$transaction_request_type->setLineItems($lineItems);
///////////////////////////////////////////////////////////////////////////////////////



// Create a complete transaction request
$transaction_request = new AnetAPI\CreateTransactionRequest();
$transaction_request->setMerchantAuthentication($merchant_authentication);
$transaction_request->setRefId($ref_id);
$transaction_request->setTransactionRequest($transaction_request_type);

// Create the controller and get the final response
$controller = new AnetController\CreateTransactionController($transaction_request);
$response = $controller->executeWithApiResponse(constant("\\net\authorize\api\constants\ANetEnvironment::".AUTHORIZE_ENV));

if ($response != null) {
    // Check if the Authorize.net has received the API request successfully
    // and return transaction response back to us
    if ($response->getMessages()->getResultCode() == "Ok") { 
        // Ok means API request was successful
        // Get transaction response and store in DB
        $tresponse = $response->getTransactionResponse(); 
        $responseDesc = array("1"=>"Approved", "2"=>"Declined", "3"=>"Error", "4"=>"Held for Review");

        if ($tresponse != null && $tresponse->getMessages() != null) {
            // Create variables to store transaction information in DB
            $cc_brand = $tresponse->getaccountType();
            $cc_number = $tresponse->getaccountNumber();
            $transaction_id = $tresponse->getTransId(); 
            $auth_code = $tresponse->getAuthCode();
            $response_code = $tresponse->getResponseCode();
            $response_desc = $responseDesc[$response_code];
            $payment_response = $tresponse->getMessages()[0]->getDescription();
            $cc_last_4_digits = substr($cc_number, -4);
            /////////////////////////////////////////////custom Email//////////////////////////////////////////////////////////////////////
                // Retrieve transaction details and prepare data
                // Assuming $transactionData contains the necessary details from Authorize.Net
                // Email template
                date_default_timezone_set('America/New_York');
                $currentDate = date('m/d/Y');
                $currentTime = date('h:i:s A');
                $emailTemplate = "
                    <style> 
                    td, th {
                        border: 1px solid black; /* Define border style */
                        padding: 8px; /* Add some padding for better readability */
                      }
                    </style>
                    <div style='max-width: 1200px; margin: 0 auto; padding: 20px;'>
                        <h1 style='text-align: center;'>Your Transaction Details</h1>
                        <div style='margin-top: 20px;'>
                            <p> Order Information </p>
                            <p> Description: Goods or Services</p>
                            <hr/>
                            
                            <p> <strong> BILLING INFORMATION </strong> <br/>
                             $checkout_bill_fname $checkout_bill_lname <br/>
                             $checkout_bill_street, $checkout_bill_address <br/>
                             $checkout_bill_city, $checkout_bill_postal, $checkout_bill_state <br/>
                            Country: US  <br/>
                            Phone: $checkout_bill_phone  <br/>
                            Email: $checkout_bill_email </p>

                            <p> <strong> SHIPPING INFORMATION </strong> <br/>
                            $checkout_ship_fname $checkout_ship_lname <br/>
                            $checkout_ship_street, $checkout_ship_address <br/>
                            $checkout_ship_city, $checkout_ship_postal, $checkout_ship_state <br/>
                            Country: US  <br/>
                            Phone: $checkout_ship_phone  <br/>
                            Email: $checkout_ship_email </p>


                            <hr/>
                            <p><strong>Products:</strong></p>
                            <table width= '1200'> <th>Product ID </th> <th>Product Name </th> <th> Description</th> <th> Qty </th> <th>Unit Price </th> <th> Item Total </th><th>Options </th> <th>Message </th>";

                            // Loop through products and add them to the email template
                            foreach ($arr as $product) {
                                // print_r($product);
                                $id = $product->id;
                                $productName = $product->name;
                                $productPrice = $product ->price;
                                $product_details = $product->productDetails;
                                $options = $product->cutom; 
                                $message = $product->message;
                                $qty = $product->quantity;
                                $unit_total = $qty*$productPrice;
                                $emailTemplate .= "<tr> <td> ".$id ." </td> <td>".$productName."</td> <td>".$product_details."</td> <td>".$qty."</td> <td>".$productPrice."</td> <td> ".$unit_total." </td>  <td>".$options."</td> <td>".$message."</td> </tr> ";
                            }

                            $emailTemplate .= "
                            </table>
                            <hr/>
                            <p><strong>Subtotal:</strong> $subtotal</p>
                            <p><strong>Shipping:</strong> $shipping</p>
                            <p><strong>Total:</strong> $total</p>

                            <h5> Payment Information  </h5>
                            <p>Date/Time: $currentDate $currentTime<br/> 
                            Transaction ID: $transaction_id<br/> 
                            Payment Method: Visa xxxx".$cc_last_4_digits."<br/> 
                            Auth Code:	000000<br/> 

                            <h5>Merchant Contact Information </h5>
                            <p>Pennsylvania Dutch Baskets <br/> 
                            Akron, PA 17501<br/> 
                            US <br/> 
                            info@padutchbaskets.com <br/> 
                            </p>

                        </div>
                        <div style='margin-top: 20px; text-align: center; color: #666;'>
                            <p>This is an automated email. Please do not reply.</p>
                        </div>
                    </div>";
                // echo $emailTemplate;
                // exit();
                // $to = 'info@padutchbaskets.com'; // Replace with recipient's email
                // $subject = 'Your Transaction Details';
                // $headers = "From: aman.bangashqau@gmail.com\r\n";
                // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

                // mail($to, $subject, $emailTemplate, $headers);


                
                $nameField='Order Email';
                
            
                $emailField='info@padutchbaskets.com';
                //$from=$firstNameField;
                $sub="Your Transaction Details";

                $headers['From'] = 'info@padutchbaskets.com';
                $headers['MIME-Version'] = 'MIME-Version: 1.0';
                $headers['Content-type'] = 'text/html; charset=iso-8859-1';

        
               $name=$firstNameField."< ".$emailField." >";
               $to="info@padutchbaskets.com";// Your email address will goes here  
               
                if (mail($to,$sub,$emailTemplate,$headers))
                {
                  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
                }
                else{
                  //print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
                }

                
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//New Email Template
$email_template = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
    <div style="width: 660px; margin: 0 auto;">
        <div style="display: flex; flex-wrap: wrap;    background-color: #f1e7e1;">
            <div style="width: 50%; padding-top: 0; padding-bottom: 0;">
                <div style="padding: 12px 24px; text-align: center;">
                    <img src="https://padutchbaskets.com/assets/images/logo/PADutchBaskets_Logo.png" alt="PA Dutch Baskets Logo" style="max-width: 250px; height: auto; display: block; border: 0;">
                </div>
            </div>
            
            <div style="width: 50%; padding-top: 0; padding-bottom: 0;">
                <div style="padding: 60px 24px 0 30px; text-align: center;">
                    <a href="https://padutchbaskets.com" target="_blank" style="background-color: #f0e7e1; border-radius: 50px; border: 3px solid #583300; color: #000; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold; padding: 16px 28px; text-decoration: none; display: inline-block; min-width: 30px; text-align: center; letter-spacing: 0;">BROWSE THE SHOP</a>
                </div>
            </div>
        </div>
        <h2 style="padding-top: 10px;"><span style="color:#583300;font-size: 30px;">Thank Your For Your Purchase</span></h2>
        
        <div style="min-width: 100%; border-top-width: 2px; border-top-style: solid; border-top-color: #000000;margin-bottom: 15px;margin-top: 15px;"></div>
                ';

        foreach ($arr as $product) {
                        //print_r($product);
                        // $id = $product->id;
                        // $productName = $product->name;
                        // $productPrice = $product ->price;
                        // $product_details = $product->productDetails;
                        // $options = $product->cutom; 
                        // $message = $product->message;
                        // $qty = $product->quantity;
                        // $unit_total = $qty*$productPrice;
                        // $emailTemplate .= "<tr> <td> ".$id ." </td> <td>".$productName."</td> <td>".$product_details."</td> <td>".$qty."</td> <td>".$productPrice."</td> <td> ".$unit_total." </td>  <td>".$options."</td> <td>".$message."</td> </tr> ";
                    
        $email_template .= '<h5>Delivery Date: '.$padutchddate.'</h5>';
        $email_template .= '<div>
            <div style="width: 33.33%; padding-top: 0; padding-bottom: 0; text-align: center;display: inline-block;vertical-align: top;">
                <img src="https://padutchbaskets.com/images/'.$product->image.'" alt="" style="width: 220px; height: auto; max-width: 220px; border: 0; border-radius: 0; display: block; margin: 0;">
            </div>

            <div style="width: 63.66%; padding-top: 0; padding-bottom: 0;display: inline-block;">
                <div style="padding: 12px 24px;">
                    <p style="color: #583300; margin: 0;line-height: 2;"><strong>Order Details:</strong></p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Product Name: '.$product->name.'</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Description: '.$product->productDetails.'</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Message: '.$product->message.'</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Product ID: '.$product->id.'</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Subtotal: $'.$product->price.'</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Shipping: $'.$product->shipping.'</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Total Price: $'.$product->price + $product->shipping.'</p>
                </div>
            </div>';

        }

        $email_template .= '<br />';

        $email_template .= '<div style="min-width: 100%; border-top-width: 2px; border-top-style: solid; border-top-color: #000000;margin-bottom: 15px;margin-top: 15px;"></div>

        </div>

        <div>

            <div style="background-color: #5b3408; padding-left: 24px; padding-right: 24px; padding-top: 30px; padding-bottom: 20px;">
                <h3 style="line-height: 1.2;margin: 0;color: #ffffff;font-size: 28px;">We\'re so grateful to each of you for helping our small business thrive!</h3>
            </div>

            <div style="width: 100%; padding-top: 0; padding-bottom: 0; text-align: center;">
                <img src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/918c440c-f327-79ca-eb43-3becedc47209.jpg" alt="" style="width: 660px; height: auto; max-width: 660px; border-radius: 0; display: block;">
            </div>

            <div style="width: 100%; background-color: #ffffff; padding-top: 10px;">
                <h2 style="color: #ff4015; margin: 0;font-size: 28px;">Help Us Get To Know You Better</h2>
            </div>

            <div style="min-width: 100%; border-top-width: 2px; border-top-style: solid; border-top-color: #000000;margin-bottom: 15px;margin-top: 15px;"></div>

        </div>


        <div style="display: flex; flex-wrap: nowrap;">

            <div style="width: 50%; padding-top: 0; padding-bottom: 0; padding-left: 24px; padding-right: 24px;">
                <h2 style="color: #000000; margin: 0;font-size: 28px;">Join our “Birthday Club”</h2>
                <p style="line-height: 1.5; color: #000000; font-size: 22px; margin: 12px 0 0 0;">Get offers, themed birthday basket news, and a special discount for you on your birthday.</p>
            </div>

            <div style="width: 50%; padding-top: 0; padding-bottom: 0;">
                <div style="text-align: center;">
                    <img src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/d884ebce-977a-8adc-dd5f-85f9d2980301.jpg" alt="" style="width: 330px; height: auto; max-width: 330px; border-radius: 0; display: block;">
                </div>
            </div>

        </div>

        <div style="background-color: #ff4015; border-radius: 8px; text-align: center; padding: 16px;    margin: 0 auto;margin-top: 20px; margin-bottom:30px;width: 185px;">
            <a href="https://mailchi.mp/padutchbaskets/birthday" target="_blank" style="background-color: #ff4015; border-radius: 8px; border: 3px solid #ff4015; color: #ffffff; display: block; font-family: \'Recursive\', sans-serif; font-size: 16px; font-weight: bold; text-decoration: none; padding: 0px 15px; min-width: 30px; text-align: center; letter-spacing: 0px;" rel="noreferrer">Birthday Sign Up</a>
        </div>

        <div style="min-width: 100%; border-top-width: 2px; border-top-style: solid; border-top-color: #000000;margin-bottom: 15px;margin-top: 15px;"></div>


        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1; padding: 0;">
                <img src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/415b26e1-f48c-e9d3-75a6-a33a7f9176a3.jpg" alt="" style="width: 220px; height: auto; max-width: 220px; border-radius: 0; display: block;">
            </div>

            <div style="flex: 2; padding: 0;">
                <div style="background-color: #ffffff; border-radius: 0; border-collapse: separate; padding: 12px 24px;">
                    <h2 style="line-height: 1.2; font-size: 37px; color: #000000;margin: 0;font-weight: bolder;">Let Us Know Your Other Interests</h2>
                    <ul style="margin: 0;">
                        <li style="color: #000000; line-height: 1.2; text-align: left;">
                            <p style="line-height: 1.2; text-align: left; font-size: 18px;">Seasonal Gift Ideas: Handpicked collections for every occasion.</p>
                        </li>
                        <li style="color: #000000; line-height: 1.2; text-align: left;">
                            <p style="line-height: 1.2; text-align: left; font-size: 18px;">New Arrivals & Limited Editions: Be the first to know about our latest creations.</p>
                        </li>
                        <li style="color: #000000; line-height: 1.2; text-align: left;">
                            <p style="line-height: 1.2; text-align: left; font-size: 18px;">Behind the Scenes: Get a glimpse of how our baskets are made, meet the artisans, and learn more about our process.</p>
                        </li>
                        <li style="color: #000000; line-height: 1.2; text-align: left;">
                            <p style="line-height: 1.2; text-align: left; font-size: 18px;">Offers and promotions on baskets</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <div style="background-color:#4e7a27; border-radius:8px; text-align:center; padding:16px 16px;margin: 0 auto;margin-top: 20px;margin-bottom: 30px;width: 125px;">
            <a href="https://us11.list-manage.com/survey?u=ddea4dcc46022e6d91a9c8134&id=65fbfe9a67" target="_blank" style="background-color:#4e7a27; color:#ffffff; display:block; font-family:\'Recursive\', sans-serif; font-size:16px; font-weight:bold; text-decoration:none; min-width:30px; letter-spacing:0px;padding: 3px 10px;" rel="noreferrer">Start Survey</a>
        </div>

        <div style="min-width: 100%; border-top-width: 2px; border-top-style: solid; border-top-color: #000000;margin-bottom: 15px;margin-top: 15px;"></div>


        <div>

            <div style="padding:0; text-align:center;">
                <span style="border:0; border-radius:0; vertical-align:top; margin:0;">
                    <img src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/1ce20898-9ec2-e1b0-3545-de17065e7656.jpg" alt="" style="width:660px; height:auto; max-width:660px !important; border-radius:0; display:block;">
                </span>
            </div>

            <div style="display:block;width: 100%;">
                <h2 style="color:#000000; font-size: 38px; margin: 12px 0;">Join Our Corporate Gifting Club</h2>
            </div>

            <div style="display:block;width: 100%;">
                <p style="color:#000000; margin: 0;    margin-bottom: 30px;">Get Unique Benefits: Branded Boxes, Branded Website, and Bulk Ordering</p>
            </div>

            <div style="background-color:#4e7a27;border-radius:8px;text-align:center;margin: 0 auto;margin-top: 20px;margin-bottom: 30px;width: 200px;">
                <a href="https://mailchi.mp/padutchbaskets/corporate-gifting" target="_blank" style="background-color:#4e7a27;border-radius:8px;border:3px solid #4e7a27;color:#ffffff;display:block;font-family:\'Recursive\', sans-serif;font-size:16px;font-weight:bold;font-style:normal;padding:16px 28px;text-decoration:none;min-width:30px;text-align:center;direction:ltr;letter-spacing:0px;" rel="noreferrer">Corporate Gifting</a>
            </div>

            <div style="min-width: 100%; border-top-width: 2px; border-top-style: solid; border-top-color: #000000;margin-bottom: 15px;margin-top: 15px;"></div>

        </div>

        <div style="display: flex; justify-content: space-between;">
            <div style="width: 33.33%; padding: 0;">
                <div style="height: 225px;">
                    <a href="https://padutchbaskets.com/thank-you-gift-baskets.php" style="display: block;" target="_blank">
                        <img style="width: 100%; height:100%; border-radius: 0; display: block;" alt="Amish-made baked goods and snacks" src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/f3dc4ebe-ffb2-6509-c3fa-e914c08b3b53.jpeg">
                    </a>
                </div>
                <div style="padding: 12px 0;">
                    <h4 style="margin: 0;font-size: 22px;text-align:center;">Thank-You Baskets</h4>
                </div>
            </div>
            
            <div style="width: 33.33%; padding: 0;">
                <div style="height: 225px;">
                    <a href="https://padutchbaskets.com/birthday-gift-baskets.php" style="display: block;" target="_blank">
                        <img style="width: 100%; height:100%; border-radius: 0; display: block;" alt="sweet and savory amish-made snacks and baked goods" src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/12ecaf20-9a95-d2cc-046b-b7ecf88e84dc.jpeg">
                    </a>
                </div>
                <div style="padding: 12px 0;">
                    <h4 style="margin: 0;font-size: 22px;text-align:center;">Birthday Baskets</h4>
                </div>
            </div>
            
            <div style="width: 33.33%; padding: 0;">
                <div style="height: 225px;">
                    <a href="https://padutchbaskets.com/sympathy-gift-baskets.php" style="display: block;" target="_blank">
                        <img style="width: 100%; height:100%; border-radius: 0; display: block;" alt="gourmet snacks, cheese, baked goods, and mustard in a gift basket" src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/a39abf79-ac6a-8f05-42cf-7116e8ab1ed4.jpg">
                    </a>
                </div>
                <div style="padding: 12px 0;">
                    <h4 style="margin: 0;font-size: 22px;text-align:center;">Sympathy Baskets</h4>
                </div>
            </div>
        </div>

        <div style="text-align:center; padding: 0;width: 100%;margin-top: 50px;">
            <div style="padding: 3px 16px;display:inline-block;">
                <a href="https://facebook.com/pennsylvaniadutchbaskets/reviews" target="_blank" rel="noreferrer">
                    <img class="mceSocialFollowImage" width="40" height="40" alt="Facebook icon" src="https://cdn-images.mailchimp.com/icons/social-block-v3/block-icons-v3/facebook-outline-dark-40.png">
                </a>
            </div>

            <div style="padding: 3px 16px; display:inline-block;">
                <a href="https://g.page/r/CdaMHuXdp6KREAE/review" target="_blank" rel="noreferrer">
                    <img class="mceSocialFollowImage" width="40" height="40" alt="Website icon" src="https://cdn-images.mailchimp.com/icons/social-block-v3/block-icons-v3/website-outline-dark-40.png">
                </a>
            </div>
        </div>

        <div style="background-color: #583300; color: #ffffff; text-align: center; padding: 12px;margin-top: 50px;">
            <p style="margin: 0; line-height: 1.5;">'. date('Y').' PA Dutch Baskets | <a href="https://padutchbaskets.com/privacy-policy" style="color: #ffffff; text-decoration: underline;">Privacy Policy</a></p>
        </div>

    </div>
</body>
</html>';

$email_to =$checkout_bill_email;
$email_body = $email_template;
$email_subject = "Thank You For Your Support - PA Dutch Basket";
//test
// $from_addr ="sarfrazsattar111@gmail.com";
// $from_password ="gqzr bmpo fqpj qotm";
//client
$from_addr ="info@padutchbaskets.com";
$from_password ="Brightness12%";
$email_cc ="";
$email_bcc ="";
$from_name="PA Dutch";
echo send_mail($email_to,$email_cc,$email_bcc,$email_subject,$email_body,$from_addr,$from_name,$from_password);

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
            $status = '<li>Your payment has been received successfully!</li>'; 
            $status .=  "<li>Transaction ID : ".$transaction_id."</li>"; 
            $status .=  "<li>Auth Code : ".$auth_code."</li>"; 
            $response_type = "success";
        } else { 
            $status =  "<li>Transaction has failed!</li>"; 
            if ($tresponse->getErrors() != null) { 
                $status .=  "<li>Error Code : ".$tresponse->getErrors()[0]->getErrorCode()."</li>"; 
                $status .=  "<li>Error Message : ".$tresponse->getErrors()[0]->getErrorText()."</li>"; 
            } 
        } 
    } else {
        // If the Authorize.net API request wasn't successful 
        // then display errors on the screen
        $tresponse = $response->getTransactionResponse(); 
        $status =  "<li>Transaction has failed!</li>"; 
        if ($tresponse != null && $tresponse->getErrors() != null) { 
            $status .=  "<li>Error Code : ".$tresponse->getErrors()[0]->getErrorCode()."</li>"; 
            $status .=  "<li>Error Message : ".$tresponse->getErrors()[0]->getErrorText()."</li>"; 
        } else { 
            $status .=  "<li>Error Code : ".$response->getMessages()->getMessage()[0]->getCode()."</li>"; 
            $status .=  "<li>Error Message : ".$response->getMessages()->getMessage()[0]->getText()."</li>"; 
        }
    } 
} else { 
    $status =  "<li>Transaction has failed! No response returned.</li>"; 
}
