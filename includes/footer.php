<footer id="siteFooter" class="container-fluid site-footer bg-footer">
    <div class="container">
        <div class="d-flex pt-5 pb-4 footer-outer">
            <div class="w-20">
                <h5>About Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0">Our Story</a></li>
                    <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0">Our Reviews</a></li>
                    <li class="nav-item mb-2"><a href="Blog" class="nav-link p-0"> Blog</a></li>
                    <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0">Contact Us</a></li>
                   
                </ul>
            </div>
            <div class="w-20">
                <h5>Categories</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="gift-baskets.php" class="nav-link p-0">All Gift Baskets</a></li>
                    <li class="nav-item mb-2"><a href="birthday-gift-baskets.php" class="nav-link p-0">Birthday Gifts</a></li>
                    <li class="nav-item mb-2"><a href="sympathy-gift-baskets.php" class="nav-link p-0">Sympathy Gifts</a></li>
                    <li class="nav-item mb-2"><a href="get-well-gift-baskets.php" class="nav-link p-0"> Get Well</a></li>
                    <li class="nav-item mb-2"><a href="corporate-gifts.php" class="nav-link p-0">Corporate Gifts</a></li>
                    <li class="nav-item mb-2"><a href="anniversary-gift-ideas.php" class="nav-link p-0">Anniversary Gifts</a></li>
                    <li class="nav-item mb-2"><a href="congratulations-gift-baskets.php" class="nav-link p-0">Congratulations Gifts</a></li>
                </ul>
            </div>
            <div class="w-20">
                <h5>Customer Service</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0">About Us</a></li>
                    
                    <li class="nav-item mb-2"><a href="shippingpolicy.pdf" class="nav-link p-0">Shipping Information</a></li>
                    <li class="nav-item mb-2"><a href="privacy-policy.pdf" class="nav-link p-0">Privacy Policy</a></li>
                    <li class="nav-item mb-2"><a href="privacy-policy.pdf" class="nav-link p-0">Return Policy</a></li>
                 
                    <li class="nav-item mb-2"><a href="<?=$app_path;?>contact.php" class="nav-link p-0">Contact Us</a></li>
                </ul>
            </div>
            <div class="w-20 2nd-level-1-parent">
                <h5>Shopping</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="cart.php" class="nav-link p-0">Shopping Cart</a></li>
                    <li class="nav-item mb-2"><a href="gift-baskets.php" class="nav-link p-0">All Gifts</a></li>
                </ul>
                <h5 class="2nd-level-1">Corporate Orders</h5>
                <ul class="nav flex-column 2nd-level-1">
                    <li class="nav-item mb-2"><a href="corporate-gifts.php" class="nav-link p-0">Corporate Gifts</a></li>
                    <li class="nav-item mb-2"><a href="corporate-gifting.php" class="nav-link p-0">Branding for Employees</a></li>
                    <li class="nav-item mb-2"><a href="corporate-gifting.php" class="nav-link p-0">Branding for Clients</a></li>
                </ul>
            </div>
            <div class="w-20 2nd-level-2-parent">
                <h5>Social Media</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="https://www.facebook.com/PennsylvaniaDutchBaskets" class="nav-link p-0">Facebook</a></li>
                    <li class="nav-item mb-2"><a href="https://www.linkedin.com/in/padutchbaskets/" class="nav-link p-0">LinkedIn</a></li>
                </ul>
                <h5 class="2nd-level-2">Our Lancaster Pennsylvania Gift Baskets Location</h5>
                <ul class="nav flex-column 2nd-level-2">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Akron, PA</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Lancaster County 17501</a></li>
                </ul>
            </div>
        </div>
        <div class="row footer-border-top text-center">
            <div class="col footer-col py-3">
                <p class="footer-copy mb-0">2024 PA Dutch Baskets. All rights reserved. <a href="/privacy-policynew.pdf">Click here</a>to view our refund &
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
<script type="text/javascript">
$(document).ready(function() {
    $("#addToCartBtn").click(function(e){
        e.preventDefault();
        const hiddenFields = document.querySelectorAll('input[type="hidden"]');
        const textFields = document.querySelectorAll('input[type="text"]');
        const selectFields = document.querySelectorAll('select');
        const label = [];
        const values = [];
        
        // hiddenFields.forEach(field => {
        // const value = field.value;
        // label.push(value);
        // });
        
        // selectFields.forEach(field => {
        //     const value = field.value;
        //     values.push(value);
        // });

        // textFields.forEach(field => {
        // const value = field.value;
        // values.push(value);
        // });         
        
        var description ="";
        var product_details ="";
        

        // for (let i = 0; i < label.length; i++) 
        // {
        //     // if(i == label.length -1)
        //     // {
        //     //     // description += label[i]+':'+values[i];
        //     // }
        //     // else
        //     // {
        //     //     product_details += label[i]+':'+values[i]+'<br/>';
        //     // }
        //     product_details += label[i]+':'+values[i]+'<br/>';
        // }


       


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

        if ($('#choosePie').val() !== undefined && $('#choosePie').val() !== "") {
            product_details += " Choose Your Pie: " + $('#choosePie').val() + "<br />";
        }

        if ($('#chooseFudge').val() !== undefined && $('#chooseFudge').val() !== "") {
            product_details += " Choose Your Fudge: " + $('#chooseFudge').val() + "<br />";
        }

        if ($('#chooseBread').val() !== undefined && $('#chooseBread').val() !== "") {
            product_details += " Choose Your Bread: " + $('#chooseBread').val() + "<br />";
        }

        if (typeof productCardMessage !== 'undefined' && productCardMessage !== "") {
            product_details += " Card Message: " + productCardMessage + "<br />";
        }

        // get values from data attributes and save them
        var productId = $('.product-metadata').data('product-id');
        var productName = $('.product-metadata').data('product-name');
        var productPrice = $('.product-metadata').data('product-price-regular');
        var productShippingPrice = $('.product-metadata').data('product-shipping-price');
        var productCustomization = checkedValuesString;
        var productQty = $('.product-metadata').data('product-qty');
        var productImage = $('.product-metadata').data('product-cart_img');

        //get sinlge selected products details
        var singleitem1 = $('#singleitem1').val();
        var singleitem2 = $('#singleitem2').val();
        
        addToCart(productId, productName, productPrice, productShippingPrice, productFlavorPie, productFlavorBread, productPromoCode, productCardMessage, productCustomization, productQty, productImage, description+product_details, singleitem1, singleitem2);

        var urlCart = $appPathJS+"cart.php";
        window.location.href = urlCart;
        console.log(localStorage);

    });
    
function addToCart(productID, productName, productPrice, productShippingPrice, productFlavorPie, productFlavorBread, productPromoCode, productCardMessage, productCustomization, productQty, productImage, productFullDetails, singleitem1, singleitem2) {
    console.log(productID);
    var cart = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var existingProductIndex = -1;
    var productToAddOrUpdate = { id: productID, name: productName, price: productPrice, shipping: productShippingPrice, pieflavor: productFlavorPie, breadflavor: productFlavorBread, promo: productPromoCode, message: productCardMessage, cutom: productCustomization, quantity: productQty, image: productImage,productDetails:productFullDetails, singleProduct1: singleitem1, singleProduct2: singleitem2};

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

<script type="text/javascript">
$(document).ready(function() {
    $(".datc-btn").click(function(e){
       
        // get values from data attributes and save them
        var productId = $(this).closest(".card-body").find(".product-metadata").data('product-id');
        var productName = $(this).closest(".card-body").find(".product-metadata").data('product-name');
        var productPrice = $(this).closest(".card-body").find(".product-metadata").data('product-price-regular');
        var productShippingPrice = $(this).closest(".card-body").find(".product-metadata").data('product-shipping-price');
        var productQty = $(this).closest(".card-body").find(".product-metadata").data('product-qty');
        var productImage = $(this).closest(".card-body").find(".product-metadata").data('product-cart_img');
        
        addToCartDirect(productId, productName, productPrice, productShippingPrice, productQty, productImage);

        var urlCart = $appPathJS+"cart.php";
        window.location.href = urlCart;
        console.log(localStorage);

    });
    
function addToCartDirect(productID, productName, productPrice, productShippingPrice, productQty, productImage) {
    console.log(productID);
    var cart = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var existingProductIndex = -1;
    var productToAddOrUpdate = { id: productID, name: productName, price: productPrice, shipping: productShippingPrice, quantity: productQty, image: productImage};

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
<script type="text/javascript">
$(document).ready(function() {
    $('#goback').on('click', function() {
        window.history.back();
    });
});
</script>

<script type="text/javascript">

function moveElements() {
  var screenWidth = $(window).width();
  var breakpoint = 768;

  if (screenWidth < breakpoint && screenWidth > 500) {
    var detachedElements = $('.2nd-level-1').detach();
    var wrappedElements = $('<div class="w-20"></div>').append(detachedElements);
    $('.footer-outer').append(wrappedElements);

    var detachedElements2 = $('.2nd-level-2').detach();
    var wrappedElements2 = $('<div class="w-20"></div>').append(detachedElements2);
    $('.footer-outer').append(wrappedElements2);
  }

}    
$(document).ready(function() {

    moveElements();

    $(".navbar-toggler").click(function(){
        $('body').toggleClass('mobile-menu-visible');
        //$('.navbar-toggler').toggleClass('navbar-toggler-icon-close');
        $('#navbarIcon').toggleClass('navbar-toggler-icon');
        $('.navbar-cross').toggleClass('d-none');
        $('.navbar').toggleClass("navbar-content");
        $('#navbarNav').toggleClass("navbarNavCustom");
    });
    

});
</script>
<script>
  $(document).ready(function () {
    // Tab click event
    $('#prodTab a').on('click', function () {
      // Reset all tab icons to the default images
      $('#tab1-icon').attr('src', '<?=$app_path;?>assets/images/tag.png');
      $('#tab2-icon').attr('src', '<?=$app_path;?>assets/images/click.png');

      // Change the icon of the active tab
      if ($(this).attr('id') === 'tab1-tab') {
        $('#tab1-icon').attr('src', '<?=$app_path;?>assets/images/tag-active.png');
        $('#tab2-icon').attr('src', '<?=$app_path;?>assets/images/click.png');
      } else if ($(this).attr('id') === 'tab2-tab') {
        $('#tab2-icon').attr('src', '<?=$app_path;?>assets/images/click-active.png');
        $('#tab1-icon').attr('src', '<?=$app_path;?>assets/images/tag.png');
      }
    });
  });
</script>

<!-- JavaScript for Scroll Buttons -->
<script>
  const productSlider = document.querySelector('.product-slider');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');

  // Scroll amount
  const scrollAmount = 150;
  if (prevBtn && nextBtn) {

    // Scroll to the left
    prevBtn.addEventListener('click', () => {
        productSlider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    // Scroll to the right
    nextBtn.addEventListener('click', () => {
        productSlider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });

  }
</script>

<script>
$(document).ready(function () {
  // Initialize selectedProducts from local storage or as an empty array
  let selectedProducts = [];

  // Function to update the selected product images in the UI
  function updateSelectedProductsUI() {
    const product1 = selectedProducts[0] || {};
    const product2 = selectedProducts[1] || {};

    // Update the images
    $('#selected-product-1').html(
      product1.pc_image ? `<img src="${product1.pc_image}" alt="${product1.pc_name}" style="width:100%">` : ''
    );
    $('#selected-product-2').html(
      product2.pc_image ? `<img src="${product2.pc_image}" alt="${product2.pc_name}" style="width:100%">` : ''
    );

    // Update hidden fields with product details
    $('#singleitem1').val(
      product1.pc_id ? JSON.stringify({
        id_pc: product1.pc_id,
        image_pc: product1.pc_image,
        name_pc: product1.pc_name,
        price_pc: product1.pc_price
      }) : ''
    );

    $('#singleitem2').val(
      product2.pc_id ? JSON.stringify({
        id_pc: product2.pc_id,
        image_pc: product2.pc_image,
        name_pc: product2.pc_name,
        price_pc: product2.pc_price
      }) : ''
    );
  }

  // Click event for adding products
  $('.add-btn').on('click', function (event) {
    event.preventDefault();
    const productCard = $(this).closest('.product-card');
    const productId = productCard.data('pc-pid');
    const productImageSrc = productCard.find('img').attr('src');
    const productName = productCard.find('.pc-pname').text();
    const productPrice = productCard.find('.pc-pprice').text();

    const productData = {
      pc_id: productId,
      pc_image: productImageSrc,
      pc_name: productName,
      pc_price: productPrice,
    };

    // Add product to the selected products array
    if (selectedProducts.length < 2) {
      selectedProducts.push(productData);
    } else {
      selectedProducts[0] = selectedProducts[1];
      selectedProducts[1] = productData;
    }

    // Update the UI
    updateSelectedProductsUI();
  });
});

</script>

</body>

</html>