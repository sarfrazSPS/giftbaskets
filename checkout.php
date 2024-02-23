<?php include("includes/header.php"); ?>

<section id="cart-section" class="py-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>CHECKOUT (<span id="totalCartItems">-</span> ITEM'S)</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="d-flex justify-content-end">
                        <span class="btn-shopping text-uppercase w-100">Continue Shopping</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg">
                                <path
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">

                    <a href="#" class="cart-btn-checkout other-color">
                            <span class="translatex text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Pay Now</span>
                            <span class="btn-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                    <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                </svg>
                            </span>
                        </a>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 checkout-left">
                    <h6 class="checkout-head">ORDER SUMMARY</h6>
                    <div class="px-3">
                        <form class="">
                            <div class="d-flex justify-content-between cart-border py-3">
                                <P class="mb-0"><b>PRODUCT TOTAL:</b></P>
                                <span><b>$179.97</b></span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-1 mt-3 text-uppercase"><b>Coupons & Offer Codes</b></p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <path
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                                </svg>
                            </div>
                            <div class="">
                                <form class="cart-coupon-form">
                                    <input type="text" class="checkout-input-field" name="coupon" placeholder="Enter Code">
                                    <input type="button" class="cart-coupon-btn chk-cpn-btn" value="Apply" >
                                </form>
                            </div>
                            <div class="shipping-div">
                                <p class="mb-1 mt-3 text-uppercase"><b>SHIPPING ADDRESS</b></p>
                                <select name="calc_shipping_country" id="calc_shipping_country" class="checkout-input-field mb-2"><option value="US" selected="selected">United States (US)</option></select>
                                <input type="text" class="checkout-input-field mb-2" id="checkout-state-field" name="cart_state" placeholder="State" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-city-field" name="cart_city" placeholder="City" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-postal-field" name="cart_postal" placeholder="Postal Code" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-address-field" name="cart_address" placeholder="Apartment, Suite Or Other" />
                            </div>
                            <div class="billing-div">
                                <p class="mb-1 mt-3 text-uppercase"><b>BILLING ADDRESS</b></p>
                                <input type="text" class="checkout-input-field mb-2 w-50 float-start" id="checkout-fname-field" name="cart_fname" placeholder="First Name" />
                                <input type="text" class="checkout-input-field mb-2 w-50 float-end" id="checkout-lname-field" name="cart_lname" placeholder="Last Name" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-phone-field" name="cart_phone" placeholder="Phone Number" />
                                <select name="calc_shipping_country" id="calc_shipping_country" class="checkout-input-field mb-2"><option value="US" selected="selected">United States (US)</option></select>
                                <input type="text" class="checkout-input-field mb-2" id="checkout-state-field" name="cart_state" placeholder="State" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-city-field" name="cart_city" placeholder="City" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-postal-field" name="cart_postal" placeholder="Postal Code" />
                                <input type="text" class="checkout-input-field mb-2" id="checkout-address-field" name="cart_address" placeholder="Apartment, Suite Or Other" />
                            </div>
                            <div class="payment-div">
                                <p class="mb-1 mt-3 text-uppercase"><b>Payment Details</b></p>
                                <div class="card-block">
                                    <input type='hidden' name='couponapplied' id="couponapplied" value='0'> 
                                    <input type='hidden' name='cartShippingTotal' id="cartShippingTotal" value="">
                                    <input type='hidden' name='cartSubTotal' id="cartSubTotal" value="">
                                    <input type='hidden' name='amount' id="checkout_amonut" value='10.00'>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Card Number</label>
                                                    <input type="text" class="checkout-input-field mb-2" name="cc_number" placeholder="Card Number*" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-7 col-md-7">
                                                <div class="form-group">
                                                    <!-- <input type="tel" class="form-control cart-input-field" placeholder="MM / YY" /> -->
                                                    <select name="cc_exp_month" class="checkout-input-field mb-2">
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
                                                    <select name="cc_exp_year" class="checkout-input-field mb-2">
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
                                                        <input name="cvc_code" type="text" class="checkout-input-field mb-2" maxlength="3" placeholder="Card CVC*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer p-0 m-3">
                                    <div class="row p-0">
                                        <div class="col-12 p-0">
                                        <button type='submit' class="cart-btn-payment border-0 other-color" >Pay Now</button>
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
                        <div class="row w-100 m-auto p-2 border border-dark">
                            <div class="col-sm-12 col-md-4">
                                <div class="cartitemimage">
                                    <a href="#" id="">
                                        <img id="" class="img-fluid"
                                            src="<?=$app_path;?>assets/images/products/cart.webp"
                                            alt="Gourmet Meat" style="border-width:0px;">
                                    </a>
                                    <span class="tbl-span">PRODUCT ID: 4361</span>
                                    <p class="mb-1">GOURMET MEAT & CHEESE SAMPLER - DELUXE</p>
                                    <span class="tbl-span item-remove-btn">REMOVE ITEM</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="cartitemimage">
                                    <a href="#" id="">
                                        <img id="" class="img-fluid"
                                            src="<?=$app_path;?>assets/images/products/cart.webp"
                                            alt="Gourmet Meat" style="border-width:0px;">
                                    </a>
                                    <span class="tbl-span">PRODUCT ID: 4361</span>
                                    <p class="mb-1">GOURMET MEAT & CHEESE SAMPLER - DELUXE</p>
                                    <span class="tbl-span item-remove-btn">REMOVE ITEM</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="cartitemimage">
                                    <a href="#" id="">
                                        <img id="" class="img-fluid"
                                            src="<?=$app_path;?>assets/images/products/cart.webp"
                                            alt="Gourmet Meat" style="border-width:0px;">
                                    </a>
                                    <span class="tbl-span">PRODUCT ID: 4361</span>
                                    <p class="mb-1">GOURMET MEAT & CHEESE SAMPLER - DELUXE</p>
                                    <span class="tbl-span item-remove-btn">REMOVE ITEM</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <P class="mb-0"><b>PRODUCT TOTAL:</b></P>
                            <span><b>$179.97</b></span>
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
<script>
  $(document).ready(function() {
    var leftElement = $(".checkout-left");
    var rightElement = $(".checkout-right");

    // Function to check and update the left element's position
    function updateLeftElementPosition() {
      var leftHeight = leftElement.outerHeight();
      var rightHeight = rightElement.outerHeight();

      // Check if the right element is taller
      if (leftHeight > rightHeight) {
        // Make the left element fixed
        rightElement.css({
          position: "sticky",
          top: 0
        });
      } else {
        // Reset styles if the right element is not taller
        rightElement.css({
          position: "static",
          top: "auto"
        });
      }
    }

    // Bind the function to the scroll event
    $(window).scroll(updateLeftElementPosition);

    // Initial check on page load
    updateLeftElementPosition();
  });
</script>