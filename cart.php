
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= $app_path ?>assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?= $app_path ?>assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta property="og:type" content="product" />

    <meta property="og:title" content="Chocolate Gift Baskets" />

    <meta property="og:description" content="Our chocolate gift baskets offer Lancaster PA Dutch baked goods, cheeses, chocolates, whoopie pies, blueberry breads, apple pies and more" />

    <meta property="og:url" content="https://padutchbaskets.com/chocolate-gift-baskets.php"/>

    <meta property="og:site_name" content="PA Dutch Baskets" />

        <meta property="og:image" content="https://www.padutchbaskets.com/assets/images/products/chocolate-lovers/chocolate-lovers-gift-basket.jpg" />

    <meta property="product:price:amount" content="74.50" />

    <meta property="product:price:currency" content="USD" />

    <meta property="og:availability" content="instock" />

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart | Lancaster PA </title>

    <meta name="description" content="Unleash the joy with amazing chocolate gift baskets in Lancaster, PA, available online at PA Dutch Baskets. Perfect for any occasion, these baskets are a true delight!" />

    <meta name="keywords" content="chocolate gift baskets, chocolate gift baskets from lancaster pa, unique gift basket ideas, food gift ideas, custom gift baskets, lancaster pa"/>

    <link rel="canonical" href="https://padutchbaskets.com/chocolate-gift-baskets.php">
</head>


<?php include("includes/header.php"); ?>
<?php
$status = "";
$clear_cart = 0;
$response_type ='danger';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// User card information data received via form submit
	$cc_number = $_POST['cc_number'];
	$cc_exp_month = $_POST['cc_exp_month']; 
	$cc_exp_year = $_POST['cc_exp_year']; 
	$cc_exp_year_month = $cc_exp_year.'-'.$cc_exp_month; 
	$cvc_code = $_POST['cvc_code']; 
	$amount = $_POST['amount']; 
	if(empty($cc_number) || empty($cc_exp_month) || empty($cc_exp_year) || empty($cvc_code) ){
		$status = "<li>Error: Please enter all required fields!</li>";
	}else{
		require_once 'authorize-net-payment.php';
	}	
}

if($response_type=="success"){
    $clear_cart=1;
}
?>
<script>
    //Coupn as an example
    var padcoupons = [
    { name: 'PADCOUPON1', type: 'percentage', value: 10 },
    { name: 'PADCOUPON2', type: 'value', value: 5 },
    ];
</script>
<section id="empty-cart-section" class="py-5 text-center d-none">
    <h2 class="mt-5 mb-5">Cart is Empty</h2>
</section>
<section id="cart-section" class="py-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>SHOPPING CART (<span id="totalCartItems">-</span> ITEM)</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="d-flex justify-content-end">
                        <div class="shopgo">
                            <span class="btn-shopping text-uppercase">Continue Shopping</span>
                            <span class="margin-negative">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg">
                                    <path
                                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </span>
                            <div class="shopgo-nav">
                                <ul>
                                    <li><a href="#">Home Page</a></li>
                                    <li><a href="#">Most Recent Categories</a></li>
                                    <li><a href="#">Most Recent Items</a></li=>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="shopgo w-100">
                        <a href="javascript:void(0);" class="cart-btn-checkout other-color">
                            <span class="translatex text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                            <span class="btn-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                    <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                </svg>
                            </span>
                        </a>
                        <!-- <div class="shopgo-nav">
                            <ul>
                                <li><a href="#">Send to one address</a></li>
                                <li><a href="#">Send to multiple addresses</a></li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-9" id="left">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" width="70%">PRODUCT</th>
                                    <th scope="col" width="10%">PRICE</th>
                                    <th scope="col" width="10%">QUANTITY</th>
                                    <th scope="col" width="10%">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody id="dynamicContentContainer">                             
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3" id="right">
                    <div class="card-right p-3">
                        <h6 class="cart-border pb-3">ORDER SUMMARY</h6>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <p class="mb-0">PRODUCT SUB TOTAL:</p>
                            <span id="grandSubTotal"><b>-</b></span>
                        </div>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <p class="mb-0">SHIPPING:</p>
                            <span id="shippingCost"><b>-</b></span>
                        </div>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <p class="mb-0"><b>Grand Total:</b></p>
                            <span id="grandTotal_1"><b>-</b></span>
                        </div>
                        <div class="d-flex justify-content-between py-3">
                            <p class="mb-0">Enter Coupons & Offer Codes</p>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <path
                                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                        </div>
                        <div class="cart-border pb-3">
                            <form class="cart-coupon-form">
                                <input type="text" class="cart-coupon-field" id="cart-coupon-field" name="coupon" placeholder="Enter Code">
                                <input type="button" class="cart-coupon-btn" id="cart-coupon-btn" value="Apply" >
                            </form>
                        </div>
                        <div class="cart-border py-3">
                            <p class="mb-2"><b>SHIPPING ADDRESS:</b></p>
                            <div class="shipping-div">
                                <form class="shipping_form">
                                    <select name="calc_shipping_country" id="calc_shipping_country" class="form-select cart-input-field mb-2"><option value="default">Select a country / region…</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="PW">Belau</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, Saint Eustatius and Saba</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="SZ">Eswatini</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="CI">Ivory Coast</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="SX">Saint Martin (Dutch part)</option><option value="MF">Saint Martin (French part)</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia/Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom (UK)</option><option value="US" selected="selected">United States (US)</option><option value="UM">United States (US) Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                                    <input type="text" class="cart-input-field mb-2 form-control" id="cart-state-field" name="cart_state" placeholder="Enter State" />
                                    <input type="text" class="cart-input-field mb-2 form-control" id="cart-city-field" name="cart_city" placeholder="Enter City" />
                                    <input type="text" class="cart-input-field mb-2 form-control" id="cart-postal-field" name="cart_postal" placeholder="Enter Postal" />
                                    <input type="button" name="checkout_shiping_btn" id="checkout_shiping_btn"  class="cart-coupon-btn w-100" value="Update Shipping" />
                                </form>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <p class="mb-0"><b>Grand Total:</b></p>
                            <span id="grandTotal_2"><b>-</b></span>
                        </div>
                        <div class="py-3">
                            <div class="shopgo w-100">
                                <a href="javascript:void(0);" class="cart-btn-checkout other-color">
                                    <span class="translatex text-uppercase "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                                    <span class="btn-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <?php if(!empty($status)) { ?>
                                <div class="alert alert-<?php echo $response_type;?>">
                                    <ul>
                                        <?php echo $status; ?>
                                    </ul>
                                </div>
                                <style>.cart-payment{display: block;}</style>
                        <?php } ?>
                        
                        <div id="cart-payment" class="shopgo w-100 cart-payment">
                        
                            <div class="card ">
                                <div class="card-header p-0">
                                    <div class="row w-100">
                                        <h6 class="pt-2 pb-1">Payment Details</h6>
                                    </div>
                                </div>

                                <div class="card-block">
                                    <form role="form" method='post' action=''>
                                    <input type='hidden' name='couponapplied' id="couponapplied" value='0'> 
                                    <input type='hidden' name='cartShippingTotal' id="cartShippingTotal" value="">
                                    <input type='hidden' name='cartSubTotal' id="cartSubTotal" value="">
                                    <input type='hidden' name='amount' id="checkout_amonut" value='10.00'>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input type="text" class="form-control cart-input-field" name="cc_number" placeholder="Card Number*" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-7 col-md-7">
                                                <div class="form-group">
                                                    <label>EXP Month</span></label>
                                                    <!-- <input type="tel" class="form-control cart-input-field" placeholder="MM / YY" /> -->
                                                    <select name="cc_exp_month" class="form-control cart-input-field">
                                                        <option value="">Exp Month*</option>
                                                            <?php
                                                            for ($m=1; $m<=12; $m++) {
                                                            if($m<10){
                                                                $new_m='0'.$m;
                                                            }else{
                                                                $new_m=$m;
                                                            }
                                                            $month = date('F', mktime(0,0,0,$m, 1, date('Y')));
                                                            echo "<option value='$new_m'>$new_m - $month</option>";
                                                            }
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-md-5 float-xs-right ps-0">
                                                <div class="form-group">
                                                    <label>EXP Year</label>
                                                    <select name="cc_exp_year" class="form-select cart-input-field">
                                                        <option value="">Exp Year*</option>
                                                            <?php for($fy=2022; $fy<=2030; $fy++) { ?>
                                                                <option value="<?php echo $fy; ?>"><?php echo $fy; ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Card CVC</label>
                                                    <div class="input-group">
                                                        <!-- <input type="text" class="form-control cart-input-field" placeholder="Enter Shipping Address" /> -->
                                                        <input name="cvc_code" type="text" class="form-control cart-input-field" maxlength="3" placeholder="Card CVC*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    
                                </div>
                                <div class="card-footer p-0 m-3">
                                    <div class="row p-0">
                                        <div class="col-12 p-0">
                                        <button type='submit' class="cart-btn-payment border-0" >Pay Now</button>
                                        </form>
                                            <!-- <a href="#" class="cart-btn-payment border-0">
                                                <span class="translatex text-uppercase ">Pay </span>
                                                <span class="btn-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg rotate90">
                                                        <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                                    </svg>
                                                </span>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-2 bg-browencolor">
                <h6 class="mb-0">Discount and Offers</h6>
                <button style="font-size:10px;" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Dummy Text</p>
                <p class="mb-2"><b>Discount Code</b></p>
                <ul class="mb-2">
                    <li>dummy Text</li>
                    <li>dummy Text</li>
                    <li>dummy Text</li>
                </ul>
                <p class="mb-2"><b>Payment Code</b></p>
                <ul class="mb-2">
                    <li>dummy Text</li>
                    <li>dummy Text</li>
                    <li>dummy Text</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div id="popupContentGift" class="cie-item-popup">
    <div class="cie-item-popup-outer">
        <div class="ciep-top">
            <img src="assets/images/icons/i-greeting-card-white.png" />
            Make your gift extra special
        </div>
        <p class="ciep-head">
            Personalize a greeting card with your message and add o photo or logo!
        </p>
        <img src="<?=$app_path;?>assets/images/card-example.webp" class="img-fluid mt-1" />
        <p class="d-block text-sm mt-2 mb-0 f-80">(adding an image is optional)</p>
        <p class="d-block text-uppercase mt-2 mb-0">Available at checkout #3.99</p>
        <p class="d-block text-xs mt-2 mb-0 f-70">a complimentary message is also included with this gift</p>
    </div>
</div>

<div id="popupContentEmail" class="cie-item-popup">
    <div class="cie-item-popup-outer">    
        <div class="ciep-top">
            <img src="assets/images/icons/i-notification-white.png" />
            Instant Email Notification
        </div>
        <p class="ciep-head">
            Let them know their gift is on the way!
        </p>
        <img src="<?=$app_path;?>assets/images/notification_example.webp" class="img-fluid mt-1" />
        <p class="d-block text-xs mt-2 mb-0 f-70">email notification included in this gift</p>
    </div>
</div>
<?php
include("includes/footer.php");
?>
<?php
if($clear_cart==1){
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            localStorage.clear();
        });
    </script>
    <?php
}
?>

<script type="text/javascript">
    $(document).ready(function() {
        var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
        // console.log(localStorage);
        if (cartItems.length === 0) {
            $("#empty-cart-section").removeClass("d-none");
            $("#cart-section").addClass("d-none");
        }else{
            var totalCartItems = 0;
            cartItems.forEach(function(item) {
                totalCartItems++;
                $('#dynamicContentContainer').append(
                '<tr id="'+item.id+'" class="cart_tr">' +
                '<td>' +
                '<div class="d-flex">' +
                '<div class="cartitemimage">' +
                '<a href="#" id="">' +
                '<img id="" class="img-fluid" src="'+$appPathJS+'images/'+item.image+'" alt="'+item.name+'" style="border-width:0px;">' +
                '</a>'+
                '<span class="tbl-span">PRODUCT ID: '+item.id+'</span>'+
                '</div>'+
                '<div class="ms-3 w-100 position-relative">'+
                '<div class="cart-item-name">'+
                '<p class="mb-1" style="text-transform:uppercase;">'+item.name+'</p>'+
                '<span class="tbl-span item-remove-btn" id="'+item.id+'">REMOVE ITEM</span>'+
                '</div>'+
                '<div class="cart-item-extras">'+
                '<p class="mb-1 text-uppercase">Available with this gift</p>'+
                '<div class="d-flex">'+
                '<div id="popupActivateGift'+totalCartItems+'" class="cie-item">'+
                '<div>'+
                '<img src="assets/images/icons/i-greeting-card.png" />'+
                '</div>'+
                '<div class="cie-item-copy">personalized greeting card</div>'+
                '</div>'+
                '<div id="popupActivateEmail'+totalCartItems+'" class="cie-item">'+
                '<div>'+
                '<img src="assets/images/icons/i-notification.png" />'+
                '</div>'+
                '<div class="cie-item-copy">instant email notification</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</td>'+
                '<td class="cal_item_price">'+item.price+'</td>'+
                '<td width="10%">'+
                '<div class="d-flex">'+
                '<span class="min buttonplusminus">'+
                '-'+
                '</span>'+
                '<input class="cal_item_qty" type="number" name="qty" id="qty" min="1" value="'+item.quantity+'" />'+
                '<span class="plus buttonplusminus">'+
                '+'+
                '</span>'+
                '</div>'+
                '</td>'+
                '<td class="">$<span class="cal_item_sub_total">0</span></td>'+
                '</tr>'
                );
            });
            $("#totalCartItems").text(totalCartItems);
        }
    }); 
</script>

<script type="text/javascript">
function calculat_each_item_total(){
    $('#dynamicContentContainer tr').each(function(index, row) {
        var item_price = $(row).find('.cal_item_price').text();

        var item_qty = $(row).find('.cal_item_qty').val();
        item_qty = parseInt(item_qty);

        var itemTotal = item_qty*item_price;
        itemTotal = parseFloat(itemTotal);
        itemTotal = itemTotal.toFixed(2);
        $(row).find(".cal_item_sub_total").text(itemTotal);
    });
}

function calculat_items_sub_total(){
    var subTotal = 0;
    $('#dynamicContentContainer tr').each(function(index, row) {
        var item_sub_price = $(row).find('.cal_item_sub_total').text();
        item_sub_price = parseFloat(item_sub_price);
        subTotal += item_sub_price;
    });
    subTotal = subTotal.toFixed(2);
    $("#grandSubTotal").html("<b>$"+subTotal+"</b>");
    $("#cartSubTotal").val(subTotal);
}

function calculat_shipping_costs(){
    var cartItemsShipping = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var totalCartItems = 0;
    var shippingTotal = 0;
    cartItemsShipping.forEach(function(item) {
        totalCartItems++;
        shippingTotal += parseFloat(item.shipping);
    });
    shippingTotal = shippingTotal.toFixed(2);
    $("#shippingCost").html("<b>$"+shippingTotal+"</b>");
    $("#cartShippingTotal").val(shippingTotal);
}

function calculat_grand_totals(){
    var cartSubTotal = $("#cartSubTotal").val();
    var cartShippingTotal = $("#cartShippingTotal").val();
    var grandTotal = parseFloat(cartSubTotal) + parseFloat(cartShippingTotal);
    grandTotal = grandTotal.toFixed(2);

    $("#grandTotal_1").html("<b>$"+grandTotal+"</b>");
    $("#grandTotal_2").html("<b>$"+grandTotal+"</b>");
    $("#checkout_amonut").val(grandTotal);
}

function updateQuantityInLocalStorage(newQuantity,specificIdToRemove) {
    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];

    var specificId = specificIdToRemove;
    var foundItem = cartItems.find(item => item.id === specificId);

    if (foundItem) {
    foundItem.quantity = newQuantity;
    }

    localStorage.setItem('cartstorage', JSON.stringify(cartItems));
}

$(document).ready(function() {

    calculat_each_item_total();
    calculat_items_sub_total();
    calculat_shipping_costs();
    calculat_grand_totals();
});
</script>

<script type="text/javascript">
    $("#checkout_shiping_btn").click(function(){
        $("#shippingCost").html("loading...");
        $("#grandTotal_1").html("loading...");
        $("#grandTotal_2").html("loading...");
        setTimeout(function() {
            calculat_shipping_costs();
            calculat_grand_totals();
        }, 1500);
    });

    $("#cart-coupon-btn").click(function(){
        var couponAlreadyApplied = $("#couponapplied").val();
        if(couponAlreadyApplied==1){
            alert('Coupon already applied!');
            return;
        }
        var cartTotal = $("#grandSubTotal").text();
        cartTotal = parseFloat(cartTotal.replace(/\$/g, ''));
        cartTotal = cartTotal.toFixed(2);
        var couponCode = $('#cart-coupon-field').val().toUpperCase();
        
        // Check if the entered coupon code exists in the array
        var matchedCoupon = padcoupons.find(function(coupon) {
            return coupon.name === couponCode;
        });

        if (matchedCoupon) {
            if (matchedCoupon.type === 'percentage') {
                var discountAmount = (matchedCoupon.value / 100) * cartTotal;
                cartTotal -= discountAmount;
            } else if (matchedCoupon.type === 'value') {
                cartTotal -= matchedCoupon.value;
            }

            $("#grandSubTotal").html("<b>$"+cartTotal+"</b>");
            $("#cartSubTotal").val(cartTotal);
            // $("#checkout_amonut").val(cartTotal);
            calculat_grand_totals();
            
            alert('Coupon applied successfully!');
            $("#couponapplied").val(1);

        }else {
            alert('Invalid coupon code. Please try again.');
        }

    });

</script>
<script type="text/javascript">
jQuery(function() {
    var j = jQuery; 

    j('.plus, .min').on('click', function() {
        var addInput = j(this).siblings('.cal_item_qty'); 

        if (j(this).hasClass('plus')) {
            addInput.val(function(i, value) {
                return parseInt(value, 10) + 1;
            });

        } else if (j(this).hasClass('min')) {
            addInput.val(function(i, value) {
                return parseInt(value, 10) >= 2 ? parseInt(value, 10) - 1 : value;
            });
        }

        calculat_each_item_total();
        calculat_items_sub_total();
        calculat_shipping_costs();
        calculat_grand_totals();

        var updatedQuantity = parseInt(addInput.val(), 10);
        var specificIdToRemove = j(this).closest(".cart_tr").attr("id");

        updateQuantityInLocalStorage(updatedQuantity,specificIdToRemove);        
        
        console.log(updatedQuantity);

    });
});

</script>

<script>
    $('#dynamicContentContainer').on('click', '.cal_item_qty', function() {
        var addInput = $(this);
        var updatedQuantity = parseInt(addInput.val(), 10);
        var specificIdToRemove = $(this).closest(".cart_tr").attr("id");
        updateQuantityInLocalStorage(updatedQuantity,specificIdToRemove);        

        calculat_each_item_total();
        calculat_items_sub_total();
        calculat_shipping_costs();
        calculat_grand_totals();
    });

    $('#dynamicContentContainer').on('change', '.cal_item_qty', function() {
        calculat_each_item_total();
        calculat_items_sub_total();
        calculat_shipping_costs();
        calculat_grand_totals();
    });
</script>

<script type="text/javascript">
$('#dynamicContentContainer').on('click', '.item-remove-btn', function() {
    var specificIdToRemove = $(this).attr('id');

    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    // Remove the item with the specific ID from the cartItems array
    cartItems = cartItems.filter(function(item) {
        return item.id !== specificIdToRemove;
    });

    // Update the localStorage with the modified cartItems array
    localStorage.setItem('cartstorage', JSON.stringify(cartItems));
    window.location.href = location.href;

});


</script>

<script type="text/javascript">
  $('.cart-btn-checkout').on('click', function(e) {
    e.preventDefault();

    $("#cart-payment").toggle('slow', function() {});

    const element = document.getElementById("cart-payment");

    element.scrollIntoView();

  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    let hoveredContentGift = $('#popupContentGift');
    var hoverAreaGift = {};

    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var totalCItems = 0;
    cartItems.forEach(function(item) {
        totalCItems++;

        hoverAreaGift[totalCItems] = $('#popupActivateGift'+totalCItems);

        hoverAreaGift[totalCItems].mouseenter(function(e) {
            hoveredContentGift.css({
                top: e.pageY + 'px',
                left: e.pageX + 10 + 'px'  
            });

            hoveredContentGift.show();
        });

        hoverAreaGift[totalCItems].mouseleave(function() {
            hoveredContentGift.hide();
        });

        hoveredContentGift.mouseenter(function() {
            hoveredContentGift.show();
        });

        // $(document).mousemove(function(e) {
        //     if (!hoverAreaGift[totalCItems].is(e.target) && !hoverAreaGift[totalCItems].is(e.target) && hoverArea1.has(e.target).length === 0 && hoveredContentGift.has(e.target).length === 0) {
        //         hoveredContentGift.hide();
        //     }
        // });
    });

    

  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    let hoveredContentEmail = $('#popupContentEmail');
    var hoverAreaEmail = {};

    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var totalCItems1 = 0;
    cartItems.forEach(function(item) {
        totalCItems1++;

        hoverAreaEmail[totalCItems1] = $('#popupActivateEmail'+totalCItems1);

        hoverAreaEmail[totalCItems1].mouseenter(function(e) {
            hoveredContentEmail.css({
            top: e.pageY + 'px',
            left: e.pageX + 10 + 'px'  
        });

        hoveredContentEmail.show();
        });

        hoverAreaEmail[totalCItems1].mouseleave(function() {
            hoveredContentEmail.hide();
        });

        hoveredContentEmail.mouseenter(function() {
            hoveredContentEmail.show();
        });

        // $(document).mousemove(function(e) {
        //   if (!hoverAreaEmail[totalCItems1].is(e.target) && !hoveredContentEmail.is(e.target) && hoverAreaEmail[totalCItems1].has(e.target).length === 0 && hoveredContentEmail.has(e.target).length === 0) {
        //     hoveredContentEmail.hide();
        //   }
        // });
    });

  });
</script>