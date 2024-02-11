<?php include("includes/header.php"); ?>
<script>
    //Coupn as an example
    var padcoupons = [
    { name: 'PADCOUPON1', type: 'percentage', value: 10 },
    { name: 'PADCOUPON2', type: 'value', value: 5 },
    ];

    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    if (cartItems.length === 0) {
        window.location.href = $appPathJS;
    }
</script>
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
.cart-coupon-field,
.cart-input-field{
    padding: 5px 10px;
    width: 77%;
    border: 2px solid #fff;
    -webkit-appearance: none;    
    -moz-appearance: none;  
    appearance: none;  
}
.cart-coupon-field:focus,
.cart-input-field:focus{
    -webkit-box-shadow: 0 0 5px #999999;
    -moz-box-shadow: 0 0 5px #999999;
    box-shadow: 0 0 5px #999999;
    background: #fafafa;
    border-color: #999999;
    outline: none;
}
.cart-coupon-btn,
.cart-input-btn{
    padding: 7px 10px;
    /* background-color: #977b6e; */
    background-color: var(--mainBrownColor);
    border: 0;
    color: #fff;
}
.cart-coupon-btn:hover,
.cart-input-btn:hover{
    opacity: 0.9;
}
.cart-btn-checkout,
.cart-btn-payment{
    width: 100%;
    display: block;
    /* background-color: #957b6d; */
    background-color: var(--mainBrownColor);
    color: #fff;
    padding: 10px 15px;
    text-align: center;
    position: relative;
}
.cart-btn-checkout:hover,
.cart-btn-payment:hover{
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
.cart-btn-checkout .translatex svg,
.cart-btn-payment .translatex svg{
    width: 13px !important;
    fill: #fff !important;
    margin-top: -4px;
    margin-right: 4px;
}
.cart-btn-checkout{
    scroll-behavior: smooth;
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
#popupContentGift,
#popupContentEmail{
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
.cart-payment{
    display: none;
}
.cart-payment .row{
    margin: 0 auto;
}
.cart-payment .card{
    border-radius: 0;
}
.cart-payment .card-block{
    padding-bottom: 15px;
    border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.cart-input-field{
    width: 100%;
    border: 1px solid rgba(0, 0, 0, 0.175);
    border-radius: 0;
    font-size: 0.87rem;
    font-weight: 400;
    height: 35px;
}
.cart-payment label{
    margin-bottom: 2px;
    margin-top: 10px;
    font-weight: 500;
}
.cart-btn-payment{
    background-color: var(--mainBrownColor) !important; 
}
</style>
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
                            <tbody id="dynamicContentContainer">                             
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="card-right p-3">
                        <h6 class="cart-border pb-3">ORDER SUMMARY</h6>
                        <div class="d-flex justify-content-between cart-border py-3">
                            <P class="mb-0">PRODUCT TOTAL:</P>
                            <span id="grandSubTotal"><b>-</b></span>
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
                        
                        <div id="cart-payment" class="shopgo w-100 cart-payment">
                        
                            <div class="card ">
                                <div class="card-header p-0">
                                    <div class="row w-100">
                                        <h6 class="pt-2 pb-1">Payment Details</h6>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <form role="form">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>CARD OWNER</label>
                                                    <input type="text" class="form-control cart-input-field" placeholder="Enter Code" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>CARD NUMBER</label>
                                                    <div class="input-group">
                                                        <input type="tel" class="form-control cart-input-field" placeholder="Valid Card Number" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7 col-md-7">
                                                <div class="form-group">
                                                    <label>EXP DATE</span></label>
                                                    <input type="tel" class="form-control cart-input-field" placeholder="MM / YY" />
                                                </div>
                                            </div>
                                            <div class="col-sm-5 col-md-5 float-xs-right">
                                                <div class="form-group">
                                                    <label>CV CODE</label>
                                                    <input type="tel" class="form-control cart-input-field" placeholder="CVC" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>SHIPPING ADDRESS</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control cart-input-field" placeholder="Enter Shipping Address" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="card-footer p-0 m-3">
                                    <div class="row p-0">
                                        <div class="col-12 p-0">
                                            <a href="#" class="cart-btn-payment">
                                                <span class="translatex text-uppercase ">Process payment</span>
                                                <span class="btn-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg rotate90">
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

<script type="text/javascript">
    $(document).ready(function() {
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
            '<input class="cal_item_qty" type="number" name="qty" id="qty" maxlength="12" value="'+item.quantity+'" />'+
            '<span class="plus buttonplusminus">'+
            '+'+
            '</span>'+
            '</div>'+
            '</td>'+
            '<td class="cal_item_sub_total">-</td>'+
            '</tr>'
            );
        });
        $("#totalCartItems").text(totalCartItems);
    }); 
</script>

<script type="text/javascript">
function calculat_item_sub_total(){
    $('#dynamicContentContainer tr').each(function(index, row) {
        var item_price = $(row).find('.cal_item_price').text();
        item_price = parseInt(item_price.replace(/\$/g, ''));

        var item_qty = $(row).find('.cal_item_qty').val();
        item_qty = parseInt(item_qty);

        var itemTotal = item_qty*item_price;

        $(row).find(".cal_item_sub_total").text("$"+itemTotal);
    });
}

function calculat_items_total(){
    var grandTotal = 0;
    $('#dynamicContentContainer tr').each(function(index, row) {
        var item_sub_price = $(row).find('.cal_item_sub_total').text();
        item_sub_price = parseInt(item_sub_price.replace(/\$/g, ''));
        grandTotal += item_sub_price;
    });
    $("#grandSubTotal").html("<b>$"+grandTotal+"</b>");
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

    calculat_item_sub_total();
    calculat_items_total();
});
</script>

<script type="text/javascript">
    $("#cart-coupon-btn").click(function(){
        var cartTotal = $("#grandSubTotal").text();
        cartTotal = parseInt(cartTotal.replace(/\$/g, ''));
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
            alert('Coupon applied successfully!');

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

        calculat_item_sub_total();
        calculat_items_total();

        var updatedQuantity = parseInt(addInput.val(), 10);
        var specificIdToRemove = j(this).closest(".cart_tr").attr("id");

        updateQuantityInLocalStorage(updatedQuantity,specificIdToRemove);        
        
        console.log(updatedQuantity);

    });
});
</script>

<script type="text/javascript">
$('#dynamicContentContainer').on('click', '.item-remove-btn', function() {
    var specificIdToRemove = $(this).attr('id');

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
    let hoveredContent = $('#popupContentGift');
    let hoverArea = $('#popupActivateGift1');

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
    let hoveredContent1 = $('#popupContentEmail');
    let hoverArea1 = $('#popupActivateEmail1');

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