<footer id="siteFooter" class="container-fluid site-footer bg-footer">
    <div class="container">
        <div class="d-flex pt-5 pb-4 footer-outer">
            <div class="w-20">
                <h5>About Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Our Story</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Testimonials</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0"> Blog</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Sign In</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Live chat</a></li>
                </ul>
            </div>
            <div class="w-20">
                <h5>Categories</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Occasions</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Fruit</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Gourmet</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0"> Wine/Champagne</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Towers/Tins/Boxes</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Kosher</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Healthy</a></li>
                </ul>
            </div>
            <div class="w-20">
                <h5>Customer Service</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Orders and Payment</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Shipping Information</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Return Policy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Private Policy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Accessibility</a></li>
                    <li class="nav-item mb-2"><a href="<?=$app_path;?>contact.php" class="nav-link p-0">Contact Us</a></li>
                </ul>
            </div>
            <div class="w-20 2nd-level-1-parent">
                <h5>Partner With Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Drop Ship</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Affiliates</a></li>
                </ul>
                <h5 class="2nd-level-1">Corporate Orders</h5>
                <ul class="nav flex-column 2nd-level-1">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Volume Discounts</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Multi-Order Spreadsheet</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Corporate Gifts</a></li>
                </ul>
            </div>
            <div class="w-20 2nd-level-2-parent">
                <h5>Sister Sites</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">babybasket.com</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">winebasket.com</a></li>
                </ul>
                <h5 class="2nd-level-2">Our New Jersey Gift Baskets Local Store</h5>
                <ul class="nav flex-column 2nd-level-2">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">350 Allwood Road</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Clifton, NJ 07012</a></li>
                </ul>
            </div>
        </div>
        <div class="row footer-border-top text-center">
            <div class="col footer-col py-3">
                <p class="footer-copy mb-0">2024 PA Dutch Baskets. All rights reserved. Click here to view our refund &
                    privacy policies. Click here to view our shipping policies.</p>
            </div>
        </div>
    </div>
</footer>
</div>
<!--/#content-->

<script src="<?= $app_path ?>assets/js/jquery-3.7.1.min.js"></script>
<script src="<?= $app_path ?>assets/js/bootstrap/bootstrap.bundle.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var loadCartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
        if (loadCartItems.length !== 0) {
            var totalloadCartItems = 0;
            loadCartItems.forEach(function(item) {
                totalloadCartItems++;
            });
            $(".cart-item-header").html(totalloadCartItems);
            $(".cart-item-header").removeClass("d-none");
        }else{
            $(".cart-item-header").addClass("d-none");
        }
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('.favs-btn').click(function(e) {
        e.preventDefault();
        var href1 = $(this).attr('href');
        if (href1!="#") {
            window.location.href = href1;
        }else{
            var productMetaData = $(this).next('.product-metadata');
        
            var urlbase = $appPathJS+"product-details.php";
            var urltoMove = "?padutch=true";
            var slash = "&";

            if (productMetaData.length > 0) {

                var productID = productMetaData.data('product-id');
                urltoMove += slash+"pid=";
                urltoMove += ($.trim(productID) === '') ? 'no-id' : productID;

                var productName = productMetaData.data('product-name');
                urltoMove += slash+"pname=";
                urltoMove += ($.trim(productName) === '') ? 'no-name' : productName;

                var productPriceRegular = productMetaData.data('product-price-regular');
                urltoMove += slash+"pregular=";
                urltoMove += ($.trim(productPriceRegular) === '') ? 'no-regular' : productPriceRegular;

                var productPriceSale = productMetaData.data('product-price-sale');
                urltoMove += slash+"psale=";
                urltoMove += ($.trim(productPriceSale) === '') ? 'no-sale' : productPriceSale;

                var productShippingPrice = productMetaData.data('product-shipping-price');
                urltoMove += slash+"pshipping=";
                urltoMove += ($.trim(productShippingPrice) === '') ? 'no-shipping' : productShippingPrice;

                var productStars = productMetaData.data('product-stars');
                var productReviews = productMetaData.data('product-reviews');
                productStars = ($.trim(productStars) === '') ? 'no-star' : productStars;
                productReviews = ($.trim(productReviews) === '') ? 'no-review' : productReviews;
                urltoMove += slash+"pstarsreview="+productStars+"--"+productReviews;
                
                var productFlavorPie = productMetaData.data('product-flavor-pie');
                if(productFlavorPie=="yes"){
                    urltoMove += slash+"pfpie=";
                    urltoMove += "pfpie-1";
                }else{
                    urltoMove += slash+"pfpie=";
                    urltoMove += "pfpie-0";
                }

                var productFlavorBread = productMetaData.data('product-flavor-bread');
                if(productFlavorBread=="yes"){
                    urltoMove += slash+"pfbread=";
                    urltoMove += "pfbread-1";
                }else{
                    urltoMove += slash+"pfbread=";
                    urltoMove += "pfbread-0";
                }

                var all_images = slash+"pimgs=";
                
                var productImage1 = productMetaData.data('product-image-1');
                all_images += ($.trim(productImage1) === '') ? 'no-first-img' : encodeURIComponent(productImage1);
                all_images += ",";

                var productImage2 = productMetaData.data('product-image-2');
                all_images += ($.trim(productImage2) === '') ? 'no-second-img' : encodeURIComponent(productImage2);
                all_images += ",";

                var productImage3 = productMetaData.data('product-image-3');
                all_images += ($.trim(productImage3) === '') ? 'no-third-img' : encodeURIComponent(productImage3);
                all_images += ",";

                var productImage4 = productMetaData.data('product-image-4');
                all_images += ($.trim(productImage4) === '') ? 'no-fourth-img' : encodeURIComponent(productImage4);

                urltoMove += all_images;
                
                urltoMove = urlbase + urltoMove;
                console.log(urltoMove);
                window.location.href = urltoMove;

            } else {
                console.log('No product details found.');
            }
        }
        
    });
  });
</script>
</body>

</html>