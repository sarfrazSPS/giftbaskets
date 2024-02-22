<?php include("includes/header.php"); ?>
<?php
$old_site_url = "https://padutchbaskets.com/";
$old_site_js = $old_site_url."padutchbaskets/";
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $old_site_js = "http://localhost//my_sites/padutchbaskets/";
}
?>
<script>
var $appPathJS = <?php echo json_encode($old_site_js); ?>;
</script>

<section id="" class="mt-5 mb-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-2 small-images-outer">
                            <div class="small-images">
                                <!--4 side images -->
                                <img class="img-responsive"
                                    src="https://padutchbaskets.com/images/custom-birthday-gifts-sm.jpg"
                                    alt="thumbnail-2" onmouseover="myFunction(this)" />

                                <img class="img-responsive"
                                    src="https://padutchbaskets.com/images/celebrations-gift-basket.jpg"
                                    alt="thumbnail-1" onmouseover="myFunction(this)" />

                                <img class="img-responsive"
                                    src="https://padutchbaskets.com/images/unique-birthday-gifts.jpg" alt="thumbnail-4"
                                    onmouseover="myFunction(this)" />

                                <img class="img-responsive"
                                    src="https://padutchbaskets.com/images/birthday-chocolate-gift.jpg"
                                    alt="thumbnail-3" onmouseover="myFunction(this)" />

                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="main-images">
                                <!--Main images -->

                                <img src="https://padutchbaskets.com/images/custom-birthday-gifts-sm.jpg"
                                    alt="product-image" id="image_box" class="img-responsive" />

                                <!--Main images -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="prod-id">Product ID: product-011</p>
                    <h3 class="prod-title">Chocolate Lovers Gift Basket</h3>
                    <span class="price">
                        <span class="prod-price" id='price_per_item'>$74.50</span>
                        <span class="prod-stars">
                            <svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z"
                                    fill="#7a6e58"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z"
                                    fill="#7a6e58"></path>
                            </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z"
                                    fill="#7a6e58"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z"
                                    fill="#7a6e58"></path>
                            </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z"
                                    fill="#7a6e58"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z"
                                    fill="#7a6e58"></path>
                            </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z"
                                    fill="#7a6e58"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z"
                                    fill="#7a6e58"></path>
                            </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z"
                                    fill="#7a6e58"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z"
                                    fill="#7a6e58"></path>
                            </svg>
                        </span>
                        <span class="prod-seperator"> | </span>
                        <span class="prod-rev-nos">11 Reviews</span>
                    </span>
                    <span class="prod-rev-nos d-block">Shipping Price: $9.50</span>
                    <p class="prod-copy">Make Your Selections</p>
                    <form class="prod-form" target="paypal" action="" method="post">
                        <table id="main_tbl">

                            <tr>
                                <td>

                                    <input type="hidden" name="on0" value="Choose Your Fudge">
                                    <div class="form-label">Choose Your Fudge</div>
                                    <select name="os0" id="chooseFudge">
                                        <option value="Chocolate">Chocolate </option>
                                        <option value="Choc/Peanut Butter">Choc/Peanut Butter </option>

                                    </select>

                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <input type="hidden" name="on2" value="Card Message">
                                    <div class="form-label form-label-margin">Card Message</div>
                                    <input type="text" class="form-input-text" id="cardMessage" name="os2"
                                        maxlength="200" oninput="checkCharacterCount(this.value)"> <span id="message"
                                        style="display: none; font-size: medium; color:red;"></span>
                                </td>
                                <td>
                                    <!--input type="hidden" name="on2" id="promo_code" value="15"-->
                                    <div class="form-label form-label-margin">Promo Code</div>
                                    <span id="error_msg" style="display: none; font-size: medium; color:red">Promo code
                                        is not valid or expired.</span>
                                    <input type="text" class="form-input-text" id="promoCode"
                                        onkeyup="fn_promo_code(this.value)" name="os2" maxlength="200">
                                </td>
                            </tr>

                        </table>

                        <div>
                            <h5 class="customization-head">Choose Your Customization Below </h5>
                            <div class="services">

                                <div class="custom-options-services">

                                    <div class="row justify-content-center">

                                        <div class="col-sm-new-2 mb-new">

                                            <label for="birthday">

                                                <input type="checkbox" class="" id="tag" value="bithday">

                                                <img src="assets/images/tags/birthday4.png" class="circle ">

                                            </label>

                                        </div>

                                        <div class="col-sm-new-2 mb-new">

                                            <label for="tag">

                                                <input type="checkbox" id="Sympathy" class="" value="Sympathy">



                                                <img src="assets/images/tags/sympathy3.png" class="circle ">

                                            </label>

                                        </div>

                                        <div class="col-sm-new-2 mb-new">

                                            <label for="custom-front">

                                                <input type="checkbox" id="custom-front" class="" value="Get Well">

                                                <img src="assets/images/tags/get-well5.png" class="circle ">

                                            </label>

                                        </div>

                                        <div class="col-sm-new-2 mb-new">

                                            <label for="Tag">

                                                <input type="checkbox" id="Tag" class="" value="Thank You">

                                                <img src="assets/images/tags/thank-you2.png" class="circle ">

                                            </label>

                                        </div>


                                        <div class="col-sm-new-2 mb-new">

                                            <label for="tag">

                                                <input type="checkbox" id="tag" class="" value="Congratulations">

                                                <img src="assets/images/tags/congrats3.png" class="circle ">

                                            </label>

                                        </div>


                                        <div class="col-sm-new-2 mb-new">

                                            <label for="balloon">

                                                <input type="checkbox" id="Tag" class="" value="Anniversary">



                                                <img src="assets/images/tags/happy-anniversary.png" class="circle ">

                                            </label>

                                        </div>

                                        <div class="col-sm-new-2 mb-new">

                                            <label for="tag">

                                                <input type="checkbox" id="tag" class="" value="Hanukkah">

                                                <img src="assets/images/tags/thinking-of-you.png" class="circle ">

                                            </label>

                                        </div>


                                        <div class="col-sm-new-2 mb-new">

                                            <label for="tag">

                                                <input type="checkbox" id="tag" class="" value="Get Well">

                                                <img src="assets/images/tags/no-custom.png" class="circle ">

                                            </label>

                                        </div>


                                        <div class="col-sm-4 col-sm-new-4 text-center">

                                            <b>
                                                Can't find what you want? <br>
                                                Give us a call! 717-368-3973

                                            </b>

                                        </div>
                                    </div>
                                </div>
                                <!--NEW::Code End Here-->
                            </div>
                        </div>

                        <div class="form-qty-btn">
                            <div class="form-qty-left">
                                <span class="prod-form-qty">QTY </span> <input id="productQty" class="form-qty-input"
                                    type="number" step="1" min="1" max="1000" value="1" name="qty">
                            </div>
                            <div class="form-qty-right">
                                <button type="submit" id="addToCartBtn">Add to Cart</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-sm-12 mt-5">
                    <!-- <h2 class="cgb-head">Content for your Gift Box</h2>
                    <div class="cgb-copy">
                        <div class="cgb-copy-left">
                            <p>* Blueberry Bread (Choice of flavor)</p>
                            <p>* 2 Whoopie Pies</p>
                            <p>* Apple Pie (Choice of flavor)</p>
                            <p>* Emma's Popcorn</p>
                        </div>
                        <div class="cgb-copy-right">
                            <p>* Blueberry Bread (Choice of flavor)</p>
                            <p>* 2 Whoopie Pies</p>
                            <p>* Apple Pie (Choice of flavor)</p>
                            <p>* Emma's Popcorn</p>
                        </div>
                    </div> -->

                    <!-- <h3 class="cgb-subhead">Gift Baskets for Employees</h3>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit</p> -->
                    <h2 class="cgb-head">Content for your Gift Box</h2>
                    <div class="cgb-copy">
                        <div class="cgb-copy-left">
                            <p>* Fudge (Choice of Flavor)</p>
                            <p>* Peanut Butter Crackers</p>
                            <p>* 2 Whoopie Pies</p>
                            <p>*Peanut Butter Balls</p>
                        </div>
                        <div class="cgb-copy-right">
                            <p>* Muddy Buddies</p>
                            <p>* Non Perials</p>
                            <p>* Chocoalte Pretzel Rods</p>
                            <p>* Chocolate Train/Horse</p>
                        </div>
                    </div>
                    <h3 class="cgb-subhead text-center mb-3">Chocolate Gift Baskets</h3>
                    <p class="mb-5 text-center">If you're looking for chocolate gift baskets you've come to the right
                        place. Our
                        chocolate gift baskets offer
                        a delicious assortment of chocolate delights that are well known from Lancaster, PA. We offer
                        many sweet
                        gift baskets that include an amazing array of flavors. Start mixing in some of these PA Dutch
                        blueberry
                        breads, pies, not to mention the famous Emma's popcorn, you now have the perfect gift. Whether
                        you
                        choose the chocolate basket or one of our other combinations, enjoy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- do not remove this div, it will be using to pass data -->
<div class="product-metadata" data-product-id="product-011" data-product-name="PA Dutch Basket""
    data-product-price-regular=" 79.50" data-product-shipping-price="9.50" data-product-flavor-pie="yes"
    data-product-flavor-bread="yes" data-product-promo="" data-product-card-msg="" data-product-customization=""
    data-product-qty="" data-product-cart_img="<?=$pimg1;?>"></div>


<?php
include("includes/footer.php");
?>
<script>
$(document).ready(function() {
    var per_amount = $('#price_per_item').html();
    var shipping_charges = $('#shipping_charges').html();
    per_amount = parseFloat(shipping_charges) + parseFloat(per_amount);
    $("#total_amount").html(per_amount);
});

function myFunction(smallImg) {
    var fullImg = document.getElementById("image_box");
    fullImg.src = smallImg.src
}
</script>
<script>
var product_details = "Corporate Christmas Gift Basket - Lancaster Favorites <br/>";
</script>
<script src="assets/js/paypal.js"></script>
<script
    src="https://www.paypal.com/sdk/js?client-id=AQ4eIiXQNa2IzhEjEjLZ-HDbwt1GCalO88GsMnnCgfRnOmpoOD8wyhkGclLrgEriqgzie2zoVHl22ce1">
</script>
<script type="text/javascript">
function toggleMenu() {
    var x = document.getElementById("menu");
    if (x.className === "topnav") {
        x.className += " visible";
        console.log("open");
    } else {
        x.className = "topnav";
        console.log("closed");
    }
}
</script>
<script type="text/javascript" charset="utf-8">
finished();
</script>
<script type="text/javascript">
$(document).ready(function() {
    $("#addToCartBtn").click(function(e) {
        e.preventDefault();

        //set value in data attributes
        var productCardMessage = $('#cardMessage').val();
        $('.product-metadata').attr('data-product-card-msg', productCardMessage);
        var productPromoCode = $('#promoCode').val();
        $('.product-metadata').attr('data-product-promo', productPromoCode);
        var productFlavorPie = $('#choosePie').val();
        $('.product-metadata').attr('data-product-flavor-pie', productFlavorPie);
        var productFlavorBread = $('#chooseBread').val();
        $('.product-metadata').attr('data-product-flavor-bread', productFlavorBread);
        var productQty = $('#productQty').val();
        $('.product-metadata').attr('data-product-qty', productQty);

        var checkedValuesString = '';
        $('.custom-options-services input[type="checkbox"]:checked').each(function(index) {
            if (index !== 0) {
                checkedValuesString += ',';
            }
            checkedValuesString += $(this).val();
        });
        $('.product-metadata').attr('data-product-customization', checkedValuesString);

        // get values from data attributes and save them
        var productId = $('.product-metadata').data('product-id');
        var productName = $('.product-metadata').data('product-name');
        var productPrice = $('.product-metadata').data('product-price-regular');
        var productShippingPrice = $('.product-metadata').data('product-shipping-price');
        var productCustomization = checkedValuesString;
        var productQty = $('.product-metadata').data('product-qty');
        var productImage = $('.product-metadata').data('product-cart_img');

        addToCart(productId, productName, productPrice, productShippingPrice, productFlavorPie,
            productFlavorBread, productPromoCode, productCardMessage, productCustomization,
            productQty, productImage);

        var urlCart = $appPathJS + "cart.php";
        window.location.href = urlCart;
        console.log(localStorage);

    });

    function addToCart(productID, productName, productPrice, productShippingPrice, productFlavorPie,
        productFlavorBread, productPromoCode, productCardMessage, productCustomization, productQty, productImage
    ) {

        var cart = JSON.parse(localStorage.getItem('cartstorage')) || [];
        var existingProductIndex = -1;
        var productToAddOrUpdate = {
            id: productID,
            name: productName,
            price: productPrice,
            shipping: productShippingPrice,
            pieflavor: productFlavorPie,
            breadflavor: productFlavorBread,
            promo: productPromoCode,
            message: productCardMessage,
            cutom: productCustomization,
            quantity: productQty,
            image: productImage
        };

        $.each(cart, function(index, product) {
            if (product.id === productToAddOrUpdate.id) {
                existingProductIndex = index;
                return false;
            }
        });

        // Update quantity or add a new product to the cart
        if (existingProductIndex !== -1) {
            // Product already exists in the cart, update quantity
            cart[existingProductIndex].quantity += productToAddOrUpdate.quantity;
        } else {
            // Product not found, add it to the cart
            cart.push(productToAddOrUpdate);
        }

        // Save the updated cart to local storage
        localStorage.setItem('cartstorage', JSON.stringify(cart));

    }

});
</script>