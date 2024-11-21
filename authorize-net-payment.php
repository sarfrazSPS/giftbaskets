<?php

require_once 'vendor-authorize-net-payment/autoload.php';
require_once "config.php";
//include('phpmailer-fn-api.php');
// require_once('dbclass.php');
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

// Create a unique reference ID of transaction
$ref_id = 'ref_id_' . time();

$padtransaction_id = $ref_id; 
$padtotal_amount = 0;
$paddataLayerProducts = []; 


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
$customer_data->setEmail($checkout_bill_email); 

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
// Assume $jsonData is a valid JSON string
$arr = json_decode($jsonData);
if ($arr === null) {
    // Handle the error, e.g. exit or log it
    echo "Invalid JSON data";
    exit;
}

$lineItems = [];

foreach ($arr as $item) {
    // Extract the product details and replace <br/> occurrences
    // $productdetail = strstr($item->productDetails, '<br/>');
    // if ($productdetail) {
    //     $productdetail = substr($productdetail, 5); // Remove the '<br/>'
    // }

    $productdetail = str_replace(["<br>", "<br/>", "br", "br  ", "br&nbsp;", "<br >", "< />"], "\n", $item->productDetails);
    $productdetail = str_replace(["Choose Your"], "", $item->productDetails);

    

    // Add delivery date if available
    if ($delivery_date!= "") {
        $productdetail .= "<br />Delivery : " . $delivery_date . "<br />";
    }

    // Handle singleProduct1 and singleProduct2
    $singleItems = "";
    if (!empty($item->singleProduct1)) {
        $singleItems .= 'Item 1:<br /> Name: ' . $item->singleProduct1->name_pc . ', Price: ' . $item->singleProduct1->price_pc . ', Product ID: ' . $item->singleProduct1->id_pc . ' <br />';
    }

    if (!empty($item->singleProduct2)) {
        $singleItems .= 'Item 2:<br /> Name: ' . $item->singleProduct2->name_pc . ', Price: ' . $item->singleProduct2->price_pc . ', Product ID: ' . $item->singleProduct2->id_pc . ' <br />';
    }

    $productdetail .= $singleItems;

    $productdetail = str_replace(["<br>", "<br/>", "br", "br  ", "br&nbsp;", "<br >", "< />"], "\n", $productdetail);

    // Create the LineItem object
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
            $padtransaction_id  =   $transaction_id;
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

                                //$productDetails = substr(strstr($product->productDetails, '<br/>'), 5);
                                $productDetails = $product->productDetails;
                               
                                if($delivery_date!=""){
                                    $productDetails .= "<br />Delivery : ".$delivery_date."<br />";
                                }

                                 // Handle singleProduct1 and singleProduct2
                                $singleItems1 = "";
                                if (!empty($product->singleProduct1)) {
                                    $singleItems1 .= 'Single Product 1:<br /> Name: ' . $product->singleProduct1->name_pc . ', Price: ' . $product->singleProduct1->price_pc . ', Product ID: ' . $product->singleProduct1->id_pc . ' <br />';
                                    
                                    $paddataLayerProducts[] = [
                                        'id' => $product->singleProduct1->id_pc,
                                        'name' => $product->singleProduct1->name_pc,
                                        'quantity' => 1,
                                        'price' => str_replace("$","", $product->singleProduct1->price_pc),
                                    ];
                                }

                                if (!empty($product->singleProduct2)) {
                                    $singleItems1 .= 'Single Product 2:<br /> Name: ' . $product->singleProduct2->name_pc . ', Price: ' . $product->singleProduct2->price_pc . ', Product ID: ' . $product->singleProduct2->id_pc . ' <br />';
                                    
                                    $paddataLayerProducts[] = [
                                        'id' => $product->singleProduct2->id_pc,
                                        'name' => $product->singleProduct2->name_pc,
                                        'quantity' => 1,
                                        'price' => str_replace("$","", $product->singleProduct2->price_pc),
                                    ];
                                }

                                $productDetails .= $singleItems1;

                                $product_details = $product->productDetails;
                                $options = $product->cutom; 
                                $message = $product->message;
                                $qty = $product->quantity;
                                $unit_total = $qty*$productPrice;
                                $emailTemplate .= "<tr> <td> ".$id ." </td> <td>".$productName."</td> <td>".$productDetails."</td> <td>".$qty."</td> <td>".$productPrice."</td> <td> ".$unit_total." </td>  <td>".$options."</td> <td>".$message."</td> </tr> ";

                                $padtotal_amount += $unit_total;
                                $padtotal_amount = $padtotal_amount + $singleItemsPriceTotals;
                                // Add product to the Data Layer array
                                $paddataLayerProducts[] = [
                                    'id' => $id,
                                    'name' => $productName,
                                    'quantity' => $qty,
                                    'price' => $productPrice,
                                ];
                                
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
