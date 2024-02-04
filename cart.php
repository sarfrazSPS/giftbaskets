<?php include("includes/header.php"); ?>
<style>
.btn-shopping {
    /* background-color: #957b6d; */
    background-color: var(--mainBrownColor);
    color: #fff;
    padding: 9px 15px 11px 15px;
    line-height: 1;
    text-align: center;
    width: 220px;
    cursor: pointer;
    display: inline-block;
}

.btn-svg {
    fill: #fff !important;
    align-self: center;
    /* background: #957b6d; */
    background-color: var(--mainBrownColor);
    margin-left: 1px;
    width: 37px !important;
    height: 34px;
    border: 0;
    padding: 5px;
}

.buttonplusminus {
    padding: 5px;
    cursor: pointer;
    /* background: #ab978ba1; */
    background-color: var(--mainBrownColor);
    color: white;
    text-align: center;
    display: inline-block;
    width: 25px;
    height: 30px;
    opacity: 0.65;
}

.buttonplusminus:hover {
    /* background: #ab978b; */
    opacity: 1;
}

.d-flex input {
    width: 35px;
    text-align: center;
    border: 0;
}

.tbl-span {
    font-size: 10px;
    font-weight: 500;
    color: #ab978b;
}

#cart-section th {
    padding: 1em 0.5em;
    background-color: #ab978ba1;
    text-transform: uppercase;
}

.cartitemimage {
    width: 180px;
}

.card-right {
    background-color: #ab978ba1;
}

.cart-border {
    border-bottom: 1px solid black;
}

#cart-section svg {
    width: 20px;
    fill: #7b5c4a;
}

#cart-section svg:hover,
.item-remove-btn {
    cursor: pointer;
}
.cart-coupon-form{
    width: 100%;
}
.cart-coupon-field{
    padding: 5px 10px;
    width: 77%;
    border: 2px solid #fff;
    -webkit-appearance: none;    
    -moz-appearance: none;  
    appearance: none;  
}
.cart-coupon-field:focus{
    -webkit-box-shadow: 0 0 5px #999999;
    -moz-box-shadow: 0 0 5px #999999;
    box-shadow: 0 0 5px #999999;
    background: #fafafa;
    border-color: #999999;
    outline: none;
}
.cart-coupon-btn{
    padding: 7px 10px;
    /* background-color: #977b6e; */
    background-color: var(--mainBrownColor);
    border: 0;
    color: #fff;
}
.cart-coupon-btn:hover{
    opacity: 0.9;
}
.cart-btn-checkout{
    width: 100%;
    display: block;
    /* background-color: #957b6d; */
    background-color: var(--mainBrownColor);
    color: #fff;
    padding: 10px 15px;
    text-align: center;
    position: relative;
}
.cart-btn-checkout:hover{
    opacity: 0.9;
}
.btn-arrow{
    position: absolute;
    top: 0;
    right: 0px;
    border-left: 1px solid #fff;
    height: 100%;
}
.btn-arrow .btn-svg{
    width: 34px !important;
    height: 34px;
    border: 0;
    line-height: 1;
    padding: 5px;
}
.rotate90{
    transform: rotate(-90deg);
}
.translatex{
    margin-left: -15px;
}
.cart-btn-checkout .translatex svg{
    width: 13px !important;
    fill: #fff !important;
    margin-top: -4px;
    margin-right: 4px;
}
.other-color{
    background-color: var(--mainOtherColor) !important;
}
.shopgo{
    display: inline-block;
    position: relative;
}
.shopgo-nav{
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    display: none;
}
.shopgo-nav ul{
    list-style: none;
    padding: 0;
    background-color: #ffffff;
}
.shopgo-nav ul li{
    background-color: var(--mainBlackColor);
    border-bottom: 1px solid #ffffff;
    z-index: 2;
    position: relative;
}
.shopgo-nav ul li a{
    padding: 13px 15px;
    display: block;
    color: #ffffff;
}
.shopgo-nav ul li:hover{
    background-color: var(--mainFooterColor);
    opacity: 0.97;
}
.shopgo:hover .shopgo-nav{
    display: block;
}
.margin-negative{
    margin-left: -4px;
}
.cart-item-extras{
    position: absolute;
    bottom: 20px;
    width: 100%;
}
.cie-item{
    width: 33%;
    display: flex;
    align-items: center;
    opacity: 0.75;
    cursor: pointer;
}
.cie-item img{
    width: 24px;
    margin-right: 10px;
}
.cie-item-copy{
    line-height: 1.1;
    font-size: 14px;
} 
#popupContent,
#popupContent1{
    display: none;
    position: absolute;
}
.cie-item-popup{
    background-color: var(--mainBrownColor);
    padding: 25px 10px;
    display: inline-block;
    border-radius: 3px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
    z-index: 10001;
}
.cie-item-popup-outer{
    color: #fff;
    max-width: 350px;
    text-align: center;
}
.ciep-top{
    font-size: 14px;
    text-transform: uppercase;
}
.ciep-top img{
    width: 20px;
    margin-top: -3px;
}
.ciep-head{
    font-size: 1.375em;
    margin-top: 20px;
    line-height: 1.3;
}
.f-80{
    font-size: 80%;
}
.f-70{
    font-size: 70%;
}
</style>
<section id="cart-section" class="py-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>SHOPPING CART (1 ITEM)</h4>
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
                        <a href="#" class="cart-btn-checkout other-color">
                            <span class="translatex text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                            <span class="btn-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                    <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="shopgo-nav">
                            <ul>
                                <li><a href="#">Send to one address</a></li>
                                <li><a href="#">Send to multiple addresses</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-9">
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
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="cartitemimage">
                                                <a href="#" id="">
                                                    <img id="" class="img-fluid"
                                                        src="<?=$app_path;?>assets/images/products/cart.webp"
                                                        alt="Gourmet Meat" style="border-width:0px;">
                                                </a>
                                                <span class="tbl-span">PRODUCT ID: 4361</span>
                                            </div>
                                            <div class="ms-3 w-100 position-relative">
                                                <div class="cart-item-name">
                                                    <p class="mb-1">GOURMET MEAT & CHEESE SAMPLER - DELUXE</p>
                                                    <span class="tbl-span item-remove-btn">REMOVE ITEM</span>
                                                </div>
                                                <div class="cart-item-extras">
                                                    <p class="mb-1 text-uppercase">Available with this gift</p>
                                                    <div class="d-flex">
                                                        <div id="popupActivate" class="cie-item">
                                                            <div>
                                                                <img src="assets/images/icons/i-greeting-card.png" />
                                                            </div>
                                                            <div class="cie-item-copy">personalized greeting card</div>
                                                        </div>
                                                        <div id="popupActivate1" class="cie-item">
                                                            <div>
                                                                <img src="assets/images/icons/i-notification.png" />
                                                            </div>
                                                            <div class="cie-item-copy">instant email notification</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$59.99</td>
                                    <td width="10%">
                                        <div class="d-flex">
                                            <span class="min buttonplusminus">
                                                -
                                            </span>
                                            <input type="text" name="qty" id="qty" maxlength="12" />
                                            <span class="plus buttonplusminus">
                                                +
                                            </span>
                                        </div>
                                    </td>
                                    <td>$59.99</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="card-right p-3">
                        <h6 class="cart-border pb-3">ORDER SUMMARY</h6>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <P class="mb-0">PRODUCT TOTAL:</P>
                            <span><b>$179.97</b></span>
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
                                <input type="text" class="cart-coupon-field" name="coupon" placeholder="Enter Code">
                                <input type="button" class="cart-coupon-btn" value="Apply" >
                            </form>
                        </div>
                        <div class="py-3">
                            <div class="shopgo w-100">
                                <a href="#" class="cart-btn-checkout other-color">
                                    <span class="translatex text-uppercase "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                                    <span class="btn-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div class="shopgo-nav">
                                    <ul>
                                        <li><a href="#">Send to one address</a></li>
                                        <li><a href="#">Send to multiple addresses</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="shopgo w-100">
                            <a href="#" class="cart-btn-checkout">
                                <span class="translatex text-uppercase">Continue Shopping</span>
                                <span class="btn-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg">
                                        <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                    </svg>
                                </span>
                            </a>
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


<div id="popupContent" class="cie-item-popup">
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

<div id="popupContent1" class="cie-item-popup">
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
<script>
jQuery(function() {
    var j = jQuery; //Just a variable for using jQuery without conflicts
    var addInput = '#qty'; //This is the id of the input you are changing
    var n = 1; //n is equal to 1

    //Set default value to n (n = 1)
    j(addInput).val(n);

    //On click add 1 to n
    j('.plus').on('click', function() {
        j(addInput).val(++n);
    })

    j('.min').on('click', function() {
        //If n is bigger or equal to 1 subtract 1 from n
        if (n >= 2) {
            j(addInput).val(--n);
        } else {
            //Otherwise do nothing
        }
    });
});
</script>
<script>
  $(document).ready(function() {
    let hoveredContent = $('#popupContent');
    let hoverArea = $('#popupActivate');

    hoverArea.mouseenter(function(e) {
      hoveredContent.css({
        top: e.pageY + 'px',
        left: e.pageX + 10 + 'px'  
      });

      hoveredContent.show();
    });

    hoverArea.mouseleave(function() {
      hoveredContent.hide();
    });

    hoveredContent.mouseenter(function() {
      hoveredContent.show();
    });

    $(document).mousemove(function(e) {
      if (!hoverArea.is(e.target) && !hoveredContent.is(e.target) && hoverArea.has(e.target).length === 0 && hoveredContent.has(e.target).length === 0) {
        hoveredContent.hide();
      }
    });

  });
</script>
<script>
  $(document).ready(function() {
    let hoveredContent1 = $('#popupContent1');
    let hoverArea1 = $('#popupActivate1');

    hoverArea1.mouseenter(function(e) {
        hoveredContent1.css({
        top: e.pageY + 'px',
        left: e.pageX + 10 + 'px'  
      });

      hoveredContent1.show();
    });

    hoverArea1.mouseleave(function() {
        hoveredContent1.hide();
    });

    hoveredContent1.mouseenter(function() {
        hoveredContent1.show();
    });

    $(document).mousemove(function(e) {
      if (!hoverArea1.is(e.target) && !hoveredContent1.is(e.target) && hoverArea1.has(e.target).length === 0 && hoveredContent1.has(e.target).length === 0) {
        hoveredContent1.hide();
      }
    });

  });
</script>