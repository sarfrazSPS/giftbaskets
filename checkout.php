<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checkout | PA Dutch Baskets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include($root_path . "includes/header-links.php"); ?>
</head>

<body>
    <div id="content" class="site-content">

    <header>
        <?php include($root_path . "includes/header-top-bar.php"); ?>
        <?php include($root_path . "includes/header-branding.php"); ?>
        <?php include($root_path . "includes/navbar.php"); ?>        
    </header>

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
    extract($_POST);
    // print_r($jsonData);
    // exit();
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
<section id="checkout-section" class="py-5 d-none">
    <div class="container-fluid">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>CHECKOUT (<span id="totalCheckoutItems">-</span>)</h4>
                </div>
               
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 checkout-left">
                    <h6 class="checkout-head">ORDER SUMMARY</h6>
                    <div class="px-3">
                        <form id="checkoutForm" class="" method="post" action="">
                        <input type="hidden" name="jsonData" id="jsonData">
                            <div class="cart-border">
                                <div class="d-flex justify-content-between checkout-summary">
                                    <p class="mb-0">PRODUCT SUB TOTAL:</p>
                                    <span id="checkoutSubTotal"  class="fw-bold" data-checkout-subtotal="0">-</span>
                                    <input type="hidden" name="subtotal" id="hdn_checkoutSubTotal" />
                                </div>
                                <div class="d-flex justify-content-between checkout-summary">
                                    <p class="mb-0">PRODUCT SHIPPING:</p>
                                    <span id="checkoutShippingTotal"  class="fw-bold" data-checkout-shipping-total="0">0</span>
                                    <input type="hidden" name="shipping" id="hdn_checkoutShippingTotal" />
                                </div>
                                <div class="d-flex justify-content-between checkout-summary">
                                    <p class="mb-0">PRODUCT GRAND TOTAL:</p>
                                    <span id="checkoutGrandTotal1"  class="fw-bold" data-checkout-grand-total="0">0</span>
                                    <input type="hidden" name="total" id="hdn_checkoutGrandTotal1" />
                                </div>
                            </div>

                            <input type="hidden" name='product_name' id="product_name" />
                            <div class="shipping-div">
                                <?php if(!empty($status)) { ?>
                                <div class="alert alert-<?php echo $response_type;?>">
                                    <ul>
                                        <?php echo $status; ?>
                                    </ul>
                                </div>
                                <style>
                                .cart-payment {
                                    display: block;
                                }
                                </style>
                                <?php } ?>
                                <p class="mb-1 mt-3 text-uppercase"><b>SHIPPING ADDRESS</b></p>
                                <input type="text" class="checkout-input-field mb-2 w-50 float-start" id="checkout_ship_fname" name="checkout_ship_fname" placeholder="First Name*" required/>
                                <input type="text" class="checkout-input-field mb-2 w-50 float-end" id="checkout_ship_lname" name="checkout_ship_lname" placeholder="Last Name*" required/>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_ship_company" name="checkout_ship_company" placeholder="Company Name" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout_ship_street" name="checkout_ship_street" placeholder="Street Address*" required />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-address-field" name="checkout_ship_address" placeholder="Apartment, Suite Or Other" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout_ship_city" name="checkout_ship_city" placeholder="City*" required/>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_ship_postal" name="checkout_ship_postal" placeholder="Zip Code*" required/>
                                
                                
                                <select class="checkout-input-field mb-2" id="checkout_ship_state" name="checkout_ship_state" required>
                                <option value="">Choose a state</option>
                                    <?php
                                    // Array containing US states
                                    $us_states = array(
                                        'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware',
                                        'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',
                                        'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri',
                                        'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
                                        'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
                                        'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington',
                                        'West Virginia', 'Wisconsin', 'Wyoming'
                                    );

                                    // Loop through the array to create options
                                    foreach ($us_states as $state) {
                                        echo "<option value=\"$state\">$state</option>";
                                    }
                                    ?>
                                </select>
                                <select name="checkout_ship_country" id="checkout_ship_country" class="checkout-input-field mb-2" required><option value="US" selected="selected">United States (US)</option></select>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_ship_phone" name="checkout_ship_phone" placeholder="Phone Number*" required/>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_ship_email" name="checkout_ship_email" placeholder="Email*" required/>
                                
                                
                            </div>
                            <div class="billing-div">
                                <p class="mb-1 mt-3 text-uppercase"><b>BILLING ADDRESS</b></p>
                                <input type="text" class="checkout-input-field mb-2 w-50 float-start" id="checkout_bill_fname" name="checkout_bill_fname" placeholder="First Name*" required/>
                                <input type="text" class="checkout-input-field mb-2 w-50 float-end" id="checkout_bill_lname" name="checkout_bill_lname" placeholder="Last Name*" required/>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_bill_street" name="checkout_bill_street" placeholder="Street Address*" required />
                                <input type="text" class="checkout-input-field mb-2" id="checkout_bill_address" name="checkout_bill_address" placeholder="Apartment, Suite Or Other" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout_bill_city" name="checkout_bill_city" placeholder="City*" required/>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_bill_postal" name="checkout_bill_postal" placeholder="Zip Code*" required/>
                                
                                
                                
                                <select class="checkout-input-field mb-2" id="checkout_bill_state" name="checkout_bill_state" required>
                                <option value="">Choose a state</option>
                                    <?php
                                    // Array containing US states
                                    $us_states = array(
                                        'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware',
                                        'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',
                                        'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri',
                                        'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
                                        'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
                                        'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington',
                                        'West Virginia', 'Wisconsin', 'Wyoming'
                                    );

                                    // Loop through the array to create options
                                    foreach ($us_states as $state) {
                                        echo "<option value=\"$state\">$state</option>";
                                    }
                                    ?>
                                </select>
                                <select name="checkout_bill_country" id="checkout_bill_country" class="checkout-input-field mb-2" required><option value="US" selected="selected">United States (US)</option></select>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_bill_phone" name="checkout_bill_phone" placeholder="Phone Number*" required/>
                                <input type="text" class="checkout-input-field mb-2" id="checkout_bill_email" name="checkout_bill_email" placeholder="Email*" required/>
                                
                                <!-- <input type="button" name="checkout_shipping_btn" id="checkout_shipping_btn"  class="cart-coupon-btn" value="Update Shipping" /> -->
                            </div>
                            <div class="payment-div">
                                <p class="mb-1 mt-3 text-uppercase"><b>Payment Details</b></p>
                                <div class="card-block">
                                    <input type='hidden' name='amount' id="checkout_amonut" value='10.00'>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input type="text" class="checkout-input-field mb-2" name="cc_number" placeholder="Card Number*" required/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-7 col-md-7">
                                                <div class="form-group">
                                                    <!-- <input type="tel" class="form-control cart-input-field" placeholder="MM / YY" /> -->
                                                    <select name="cc_exp_month" class="checkout-input-field mb-2" required>
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
                                                    <select name="cc_exp_year" class="checkout-input-field mb-2" required>
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
                                                    <div class="input-group">
                                                        <!-- <input type="text" class="form-control cart-input-field" placeholder="Enter Shipping Address" /> -->
                                                        <input name="cvc_code" type="text" class="checkout-input-field mb-2" maxlength="3" placeholder="Card CVC*" required/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer p-0 m-3">
                                    <div class="row p-0">
                                        <div class="col-12 p-0">
                                        <button id="payNowBtn" type='submit' class="cart-btn-payment border-0 other-color" >Pay Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="checkout-right">
                        <h6 class="checkout-head">Products</h6>
                        <div id="checkoutProducts" class="row w-100 m-auto p-2 border border-dark loading-text">
                            loading products
                        </div>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <P class="mb-0"><b>PRODUCT GRAND TOTAL:</b></P>
                            <span id="checkoutGrandTotal2" class="fw-bold" data-checkout-grand-total="0">0</span>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="d-flex justify-content-end">
                                    <a href="<?=$app_path;?>" class="cart-btn-checkout">
                                        <span class="translatex text-uppercase">Continue Shopping</span>
                                        <span class="btn-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg rotate90">
                                                <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <a id="payNowBtnTop" href="#" class="cart-btn-checkout other-color">
                                    <span class="translatex text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Pay Now</span>
                                    <span class="btn-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                        </svg>
                                    </span>
                                </a>
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
        var checkoutProducts = JSON.parse(localStorage.getItem('cartstorage')) || [];
        document.getElementById('jsonData').value = JSON.stringify(checkoutProducts);
        console.log(checkoutProducts);
        if (checkoutProducts.length === 0) {
            window.location.href = $appPathJS+"cart.php?res=thankyou";
            $('#checkoutProducts').html("No product");
        }else{
            $('#checkout-section').removeClass("d-none");
            var totalCartItems = 0;
            $('#checkoutProducts').html("");
            checkoutProducts.forEach(function(item) {
                totalCartItems++;
                $('#product_name').val(item.name);
                $('#checkoutProducts').append(
                    '<div id="'+item.id+'" class="col-sm-12 col-md-4">'+
                    '<div class="cartitemimage">'+
                    '<img id="" class="img-fluid" src="'+$appPathJS+'images/'+item.image+'" alt="'+item.name+'" style="border-width:0px;">'+
                    '<span class="tbl-span">PRODUCT ID: '+item.id+'</span>'+
                    '<p class="mb-1">'+item.name+'</p>'+
                    '<p class="mb-1 tbl-span lh-1">QTY: '+item.quantity+'</p>'+
                    '<span class="tbl-span item-remove-btn" id="'+item.id+'">REMOVE ITEM</span>'+
                    '</div>'+
                    '</div>'
                );
            });
            $('#checkoutProducts').removeClass("loading-text");
        }
    }); 
</script>
<script type="text/javascript">
function calculate_checkout_items(){
    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var totalCheckoutItems = 0;
    var singleMulti = "ITEM";
    cartItems.forEach(function(item) {
        totalCheckoutItems++;
    });
    if(totalCheckoutItems>1){
        var singleMulti = "ITEMS";
    }
    $("#totalCheckoutItems").html(totalCheckoutItems+" "+singleMulti);
}

function calculate_checkout_sub_total(){
    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var subTotal = 0;
    cartItems.forEach(function(item) {
        var allQtyPrice = parseFloat(item.price) * parseInt(item.quantity);
        subTotal += parseFloat(allQtyPrice);       
    });
    subTotal = subTotal.toFixed(2);
        //////////////////////////////////////
    var discountAmount = parseFloat(localStorage.getItem('discountAmount'));
    if (discountAmount !== null && discountAmount !== "" && discountAmount!='NaN')
    {subTotal  = subTotal  - discountAmount;}
    
    ///////////////////////////////////////
    $("#checkoutSubTotal").html("$"+subTotal);
    $("#hdn_checkoutSubTotal").val(subTotal);
    $("#checkoutSubTotal").attr("data-checkout-subtotal", subTotal);
}

function calculate_shipping_total(){
    var cartItemsShipping = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var shippingTotal = 0;
    cartItemsShipping.forEach(function(item) {
        shippingTotal += parseFloat(item.shipping);
    });
    shippingTotal = shippingTotal.toFixed(2);
    $("#checkoutShippingTotal").html("$"+shippingTotal);
    $("#hdn_checkoutShippingTotal").val(shippingTotal);
    $("#checkoutShippingTotal").attr("data-checkout-shipping-total", shippingTotal);
}

function calculate_checkout_grand_total(){
    var checkoutGrandTotals = 0;
    var subTotals = $("#checkoutSubTotal").data('checkout-subtotal');
    var shippingTotals = $("#checkoutShippingTotal").data('checkout-shipping-total');
    checkoutGrandTotals = parseFloat(subTotals) + parseFloat(shippingTotals);
    checkoutGrandTotals = parseFloat(checkoutGrandTotals).toFixed(2);
    $('#checkout_amonut').val(checkoutGrandTotals);
    modify_checkout_grand_totals(checkoutGrandTotals);
}

function modify_checkout_grand_totals(checkoutGrandTotals){
    $("#checkoutGrandTotal1").html("$"+checkoutGrandTotals);
    $("#hdn_checkoutGrandTotal1").val("$"+checkoutGrandTotals);
    $("#checkoutGrandTotal2").html("$"+checkoutGrandTotals);
    $("#checkoutGrandTotal1").attr("data-checkout-grand-total", checkoutGrandTotals);
    $("#checkoutGrandTotal2").attr("data-checkout-grand-total", checkoutGrandTotals);
}
</script>
<script type="text/javascript">
$(document).ready(function() {
    calculate_checkout_items();
    calculate_checkout_sub_total();
    calculate_shipping_total();
    calculate_checkout_grand_total();

    $("#payNowBtnTop").click(function(e) {
        e.preventDefault();
      $("#payNowBtn").click();
    });
});
</script>
<script type="text/javascript">
    $("#checkout-coupon-btn").click(function(){
        var couponAlreadyApplied = $("#couponapplied").val();
        if(couponAlreadyApplied==1){
            alert('Coupon already applied!');
            return;
        }
        var checkoutTotal = $("#checkoutGrandTotal1").data("checkout-grand-total");
        var couponCode = $('#checkout-coupon-field').val().toUpperCase();
        
        // Check if the entered coupon code exists in the array
        var matchedCoupon = padcoupons.find(function(coupon) {
            return coupon.name === couponCode;
        });

        if (matchedCoupon) {
            if (matchedCoupon.type === 'percentage') {
                var discountAmount = (matchedCoupon.value / 100) * checkoutTotal;
                checkoutTotal -= discountAmount;
            } else if (matchedCoupon.type === 'value') {
                checkoutTotal -= matchedCoupon.value;
            }

            modify_checkout_grand_totals(checkoutTotal);
            
            alert('Coupon applied successfully!');
            $("#couponapplied").val(1);
            $("#checkout-coupon-field").val("");
            $(this).attr("disabled","disabled");
            $("#checkout-coupon-field").attr("placeholder", "");
            $(this).css({
                width: "100%"
            }).val("Coupon Applied");

        }else {
            alert('Invalid coupon code. Please try again.');
        }

    });
</script>
<script type="text/javascript">
$('#checkoutProducts').on('click', '.item-remove-btn', function() {
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
<script>
  $(document).ready(function() {


    var leftElement = $(".checkout-left");
    var rightElement = $(".checkout-right");

    function updateLeftElementPosition() {
      var leftHeight = leftElement.outerHeight();
      var rightHeight = rightElement.outerHeight();

      if (leftHeight > rightHeight) {
        rightElement.css({
          position: "sticky",
          top: 0
        });
      } else {
        rightElement.css({
          position: "static",
          top: "auto"
        });
      }
    }

    $(window).scroll(updateLeftElementPosition);

    updateLeftElementPosition();
  });

// function fn_promo_code()
// {
//     var promocode = $('#checkout-coupon-field').val();
//     // Replace 'YOUR_API_URL' with the actual URL of your PHP API
//     const apiURL = '../admin/promo_code_api.php?promocode='+promocode;
//     // Make a GET request to the API
//     fetch(apiURL)
//     .then(response => response.json())
//     .then(data => {
//     if (data.valid) {
        
//         $("#error_msg").css("display","none");
//         var per_amount = $('#checkoutSubTotal').html();

//         var shipping_charges = $('#checkoutShippingTotal').html(); 

//         var total_amount =  parseFloat(per_amount);

//         var discountPercent = parseFloat(data.discount);
//         // alert(discountPercent);
//         // Check if the discount percentage is valid (greater than or equal to 0 and less than or equal to 100)
//         if (isNaN(discountPercent) || discountPercent < 0 || discountPercent > 100) {
//             alert("Invalid discount percentage");
//         } else {
//             var discountAmount = (discountPercent / 100) * total_amount;
//             var totalAmount = total_amount - discountAmount;
            
//             totalAmount = parseFloat(totalAmount) + parseFloat(shipping_charges)

//             $("#checkoutGrandTotal1").html(totalAmount.toFixed(2));
//             $("#checkoutGrandTotal2").html(totalAmount.toFixed(2));
//         }
//     } else {
//         console.log('Promo code is not valid or expired.');
//         $("#error_msg").css("display","block");
//         // console.log('Message:', data.message);
//     }
//     })
//     .catch(error => {
//     console.error('Error:', error);
//     });

// }
</script>