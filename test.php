<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('phpmailer-fn-api.php');
?>
<?php
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

        <div>
            <div style="width: 33.33%; padding-top: 0; padding-bottom: 0; text-align: center;display: inline-block;vertical-align: top;">
                <img src="https://mcusercontent.com/ddea4dcc46022e6d91a9c8134/images/1ade9f75-1da7-d200-014a-2afe8445761d.png" alt="" style="width: 220px; height: auto; max-width: 220px; border: 0; border-radius: 0; display: block; margin: 0;">
            </div>

            <div style="width: 63.66%; padding-top: 0; padding-bottom: 0;display: inline-block;">
                <div style="padding: 12px 24px;">
                    <p style="color: #583300; margin: 0;line-height: 2;"><strong>Order Details:</strong></p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Product Name: Thank you gift basket</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Description: Best basket for saying thanks.</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Options: Thank You Gift</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Message: Thanks for helping me with moving.</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Product ID: 011</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Subtotal: $59.96</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Shipping: $20.00</p>
                    <p style="color: #583300; margin: 0;line-height: 2;">Total Price: $79.56</p>
                </div>
            </div>

            <div style="min-width: 100%; border-top-width: 2px; border-top-style: solid; border-top-color: #000000;margin-bottom: 15px;margin-top: 15px;"></div>

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

echo $email_template;

$email_to ="sarfrazsattar111@gmail.com";
$email_body = $email_template;
$email_subject = "Check SEO Blog PDF Version in Attachment";
$from_addr ="sarfrazsattar111@gmail.com";
$from_password ="gqzr bmpo fqpj qotm";
$email_cc ="";
$email_bcc ="";
$from_name="SEO";
echo send_mail($email_to,$email_cc,$email_bcc,$email_subject,$email_body,$from_addr,$from_name,$from_password);
?>
