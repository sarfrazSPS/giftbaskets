<?php include("includes/header.php"); ?>
<style>
.btn-shopping {
    background-color: #957b6d;
    color: #fff;
    padding: 7px 15px 6px 15px;
    text-align: center;
    width: 220px;
}

.btn-svg {
    fill: #fff !important;
    align-self: center;
    background: #957b6d;
    margin-left: 1px;
    width: 37px !important;
    height: 34px;
    border: 0;
    padding: 5px;
}

.button {
    padding: 5px;
    cursor: pointer;
    background: #ab978ba1;
    color: white;
    text-align: center;
    display: inline-block;
    width: 25px;
    height: 30px;
}

.button:hover {
    background: #ab978b;
}

.d-flex input {
    width: 20px;
    text-align: center;
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
    width: 156px;
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
}
.cart-coupon-btn{
    padding: 7px 10px;
    background-color: #977b6e;
    border: 0;
    color: #fff;
}
.cart-coupon-btn:hover{
    opacity: 0.9;
}
.cart-btn-checkout{
    width: 100%;
    display: block;
    background-color: #957b6d;
    color: #fff;
    padding: 10px 15px;
    text-align: center;
    position: relative;
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
                        <span class="btn-shopping text-uppercase">Continue Shopping</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg">
                                <path
                                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">

                    <a href="#" class="cart-btn-checkout">
                            <span class="translatex text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                            <span class="btn-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg rotate90">
                                    <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                </svg>
                            </span>
                        </a>

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
                                            <div class="ms-3">
                                                <p class="mb-1">GOURMET MEAT & CHEESE SAMPLER - DELUXE</p>
                                                <span class="tbl-span item-remove-btn">REMOVE ITEM</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$59.99</td>
                                    <td width="10%">
                                        <div class="d-flex">
                                            <span class="min button">
                                                -
                                            </span>
                                            <input type="text" name="qty" id="qty" maxlength="12" />
                                            <span class="plus button">
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
                            <a href="#" class="cart-btn-checkout">
                                <span class="translatex text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                                <span class="btn-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg rotate90">
                                        <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        
                        <a href="#" class="cart-btn-checkout">
                            <span class="translatex text-uppercase">Continue Shopping</span>
                            <span class="btn-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg">
                                    <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                </svg>
                            </span>
                        </a>
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
        if (n >= 1) {
            j(addInput).val(--n);
        } else {
            //Otherwise do nothing
        }
    });
});
</script>