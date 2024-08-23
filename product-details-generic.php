

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
<?php
$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$pid = validateInput($pid, "pid");

$pname = isset($_GET['pname']) ? $_GET['pname'] : '';
$pname = validateInput($pname, "pname");
$pname = "Cozy Winter Gift Box";
$pregular = isset($_GET['pregular']) ? $_GET['pregular'] : '';
$pregular = validateInput($pregular, "pregular");

$psale = isset($_GET['psale']) ? $_GET['psale'] : '';
$psale = validateInput($psale, "psale");
$psale = "45.99";

$pstars = isset($_GET['pstars']) ? $_GET['pstars'] : '';
$pstars = validateInput($pstars, "pstars");
if(!is_numeric($pstars)){
    $pstars="no-star";
}
if($pstars<1){
    $pstars=0;
}

$previews = isset($_GET['previews']) ? $_GET['previews'] : '';
$previews = validateInput($previews, "previews");
if(!is_numeric($previews)){
    $previews="no-review";
}
if($previews<1){
    $previews=0;
}

$pfpie = isset($_GET['pfpie']) ? $_GET['pfpie'] : '';
$pfpie = validateInput($pfpie, "pfpie");

$pfbread = isset($_GET['pfbread']) ? $_GET['pfbread'] : '';
$pfbread = validateInput($pfbread, "pfbread");

$pimgs = isset($_GET['pimgs']) ? $_GET['pimgs'] : '';
$pimgs = validateInput($pimgs, "pimgs");

$pimgsArray = explode(',', $pimgs);

$pimg1 = isset($pimgsArray[0]) ? $pimgsArray[0] : "no-first-img";
$pimg2 = isset($pimgsArray[1]) ? $pimgsArray[1] : "no-second-img";
$pimg3 = isset($pimgsArray[2]) ? $pimgsArray[2] : "no-third-img";
$pimg4 = isset($pimgsArray[3]) ? $pimgsArray[3] : "no-fourth-img";

function validateInput($parameterValue, $parameterName){
    $decodedParameter = urldecode($parameterValue);
    $filteredParameter = filter_input(INPUT_GET, $parameterName, FILTER_SANITIZE_STRING);
    $finalParameter = trim(strip_tags($filteredParameter));
    return $finalParameter;
}
?>

<!doctype html>
<html>
    <head>
       <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T8WKYG8GXL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T8WKYG8GXL');
</script>
      
        <meta property="og:type" content="product" />
        <meta property="og:title" content="Corporate Employee Gifts" />
        <meta property="og:description" content="Our Christmas Gift Baskets from Lancaster PA including baked goods, fudge and gourmet cheese" />
        <meta property="og:url" content="https://padutchbaskets.com/corporate-employee-gifts.html"/>
        <meta property="og:site_name" content="PA Dutch Baskets" />
         <meta property="og:image" content="https://padutchbaskets.com/images/savory-flavors/corporate-employee-gifts.jpg" />
        <meta property="product:price:amount" content="114.99" />
        <meta property="product:price:currency" content="USD" />
        <meta property="og:availability" content="instock" />
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Corporate Employee Gifts</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <link rel="stylesheet" href="https://padutchbaskets.com/assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="https://padutchbaskets.com/assets/css/normalize.css">
        <script src="https://padutchbaskets.com/assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
        <link rel="stylesheet" type="text/css" href="https://padutchbaskets.com/assets/css/styles.css">
        <script src="https://padutchbaskets.com/assets/js/main.js"></script>
        <meta name="description" content="Our Christmas Gift Baskets from Lancaster PA including baked goods, fudge and gourmet cheese" />
        <meta name="keywords" content="christmas gift baskets, corporate employee gifts, gifts for employees, unique gifts for employees, corporate gift ideas, business gifts for employees, employee gift basket"/>
        <link rel="canonical" href="https://padutchbaskets.com/corporate-christmas-gift-basket.html">
         <link rel="stylesheet" type="text/css" href="https://padutchbaskets.com/assets/css/custom_bootstrap.css">
         <link rel="stylesheet" type="text/css" href="https://padutchbaskets.com/assets/css/corporate_gifts.css">
         <link rel="stylesheet" type="text/css" href="https://padutchbaskets.com/assets/css/product-details.css">

         
      <!-- Pinterest Tag -->
<script>
!function(e){if(!window.pintrk){window.pintrk = function () {
window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
  n=window.pintrk;n.queue=[],n.version="3.0";var
  t=document.createElement("script");t.async=!0,t.src=e;var
  r=document.getElementsByTagName("script")[0];
  r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");
pintrk('load', '2612627018124', {em: '<user_email_address>'});
pintrk('page');
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt=""
  src="https://ct.pinterest.com/v3/?event=init&tid=2612627018124&pd[em]=<hashed_email_address>&noscript=1" />
</noscript>
<!-- end Pinterest Tag -->
   
  <script>
pintrk('track', 'pagevisit', {
line_items: [
{
product_name: 'Christmas Gift Baskets'
}
]
});
</script>

	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P6C8664J');</script>
<!-- End Google Tag Manager -->
	
	<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '994885672288673');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=994885672288673&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

    </head>
    <body class="inner product-focus">
        
        <header>
            
			<?php include("includes/header.php"); ?>
			
			
			
        </header>
        <div class="content-wrapper">
             
            <section class="main-bkgd">
                <section class="main-content">
                   
                    <section class="flex_ feature left">

                        <aside class="left-aside">
                            <div class="contain-left">
                            
                                <!--NEW::Code Start Here-->
                                <div class="product-box">
                                    <div class="all-images" style="">
                                    <div class="row">
                                        <div class="col-sm-2" >
                                        <div class="small-images">
                                            <!--4 side images -->
                                            
                                            
                                                <img
                                                class="img-responsive"
                                                src="https://padutchbaskets.com/images/custom-birthday-gifts-sm.jpg"
                                                alt="thumbnail-2"
                                                onmouseover="myFunction(this)"
                                                />
                                            
                                                <img
                                                class="img-responsive"
                                                src="https://padutchbaskets.com/images/celebrations-gift-basket.jpg"
                                                alt="thumbnail-1"
                                                onmouseover="myFunction(this)"
                                                />
                                           
                                                <img
                                                class="img-responsive"
                                                src="https://padutchbaskets.com/images/unique-birthday-gifts.jpg"
                                                alt="thumbnail-4"
                                                onmouseover="myFunction(this)"
                                                />
                                           
                                                <img
                                                class="img-responsive"
                                                src="https://padutchbaskets.com/images/birthday-chocolate-gift.jpg"
                                                alt="thumbnail-3"
                                                onmouseover="myFunction(this)"
                                                />
                                            
                                        
                                        
                                            
                                        </div>

                                        </div>
                                        <div class="col-sm-10">
                                        <div class="main-images">
                                            <!--Main images -->
                                            
                                                <img  src="https://padutchbaskets.com/images/custom-birthday-gifts-sm.jpg"   alt="product-image"      id="image_box" class="img-responsive"  />
                                           
                                        <!--Main images -->
                                        </div>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!--NEW::Code End Here-->
                                                            
                            </div>
                        </aside>
                        
                        <aside class="right-aside">
                            <p class="prod-id">Product ID: product-046</p>
                            <span class="prod-title">Cozy Winter Gift Boxes</span>
                            <span class="price">
                                <span class="prod-price" id='price_per_item' ><?php if($psale!=="no-sale"){echo $psale;}else{echo $pregular;}?></span>
                                <?php
                                if($pstars!=="no-star"){?>
                                    <span class="prod-stars">
                                        <?php for($i=1;$i<=$pstars;$i++){
                                            if($i>5){
                                                break;
                                            }
                                            ?><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><?php
                                        }?>
                                    </span>
                                <?php }?>
                                <?php  //if($previews!=="no-review"){?>
                                    <span class="prod-seperator"> | </span>
                                    <span class="prod-rev-nos"><?=$previews;?> Reviews</span>
                                <?php // }?>
                            </span>
                            <p class="prod-copy">Make Your Selections</p>
                                                                
                            <form class="prod-form" target="paypal" action="" method="post">
                                <table id="main_tbl">

                                <tr>
                                    <td>
                                        
                                            <input type="hidden" name="on0" value="Choose Your Pie">
                                            <div class="form-label">Choose Your Pie</div>
                                            <select name="os0" id="choosePie">
                                                <option value="Apple">Apple </option>
                                                <option value="Shoo Fly">Shoo Fly </option>
                                                <option value="Cherry Pie">Cherry Pie </option>
                                            </select>
                                        
                                    </td>
                                    <td>
                                        
                                            <input type="hidden" name="on0" value="Choose Your Bread">
                                            <div class="form-label">Choose Your Bread</div>
                                            <select name="os0" id="chooseBread">
                                                <option value="Blueberry">Blueberry </option>
                                                <option value="Banana">Banana </option>
                                            </select>
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="hidden" name="on2" value="Card Message">
                                        <div class="form-label form-label-margin">Card Message</div>
                                        <input type="text" class="form-input-text" id="cardMessage" name="os2" maxlength="200" oninput="checkCharacterCount(this.value)"> <span id="message" style="display: none; font-size: medium; color:red;"></span> 
                                    </td>
                                    <td>
                                        <!--input type="hidden" name="on2" id="promo_code" value="15"--> 
                                        <div class="form-label form-label-margin">Promo Code</div>
                                        <span id="error_msg" style="display: none; font-size: medium; color:red">Promo code is not valid or expired.</span>
                                        <input type="text" class="form-input-text" id="promoCode" onkeyup="fn_promo_code(this.value)" name="os2" maxlength="200">
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
    
                                                    <label for="balloon">
    
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
                                        <span class="prod-form-qty">QTY </span> <input id="productQty" class="form-qty-input" type="number" step="1" min="1" max="1000" value="1" name="qty" >
                                    </div>
                                    <div class="form-qty-right">
                                        <button type="submit" id="addToCartBtn">Add to Cart</button>
                                    </div>
                                </div>

                            </form>

                        </aside>
                                    
                                    
                    </section>

                    <h3 class="cgb-head">Content for your Gift Box</h3>
                    <div class="cgb-copy">
                        <div class="cgb-copy-left">
                            <p>* Blueberry Bread (Choice of flavor)</p>
                            <p>* 2 Whoopie  Pies</p>
                            <p>* Apple Pie (Choice of flavor)</p>
                            <p>* Emma's Popcorn</p>
                        </div>
                        <div class="cgb-copy-right">
                            <p>* Blueberry Bread (Choice of flavor)</p>
                            <p>* 2 Whoopie  Pies</p>
                            <p>* Apple Pie (Choice of flavor)</p>
                            <p>* Emma's Popcorn</p>
                        </div>
                    </div>

                    <h3 class="cgb-subhead">Gift Baskets for Employees</h3>
                    <p class="cgb-subcopy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>
                </section>
            </section>

        </div>

    <!-- do not remove this div, it will be using to pass data -->
    <div class="product-metadata" 
        data-product-id="<?php if($pid!=="no-id"){echo $pid;}else{echo "PAD-BASKET";};?>"
        data-product-name="<?php if($pname!=="no-name"){echo $pname;}else{echo "PA Dutch Basket";}?>"
        data-product-price-regular="<?php if($psale!=="no-sale"){echo $psale;}else{echo $pregular;}?>"
        data-product-flavor-pie="yes"
        data-product-flavor-bread="yes"
        data-product-promo=""
        data-product-card-msg=""
        data-product-customization=""
        data-product-qty=""
        data-product-cart_img="<?=$pimg1;?>"
        ></div>        

    <script type="text/javascript" charset="utf-8">
    finished();
    </script>
   
   
        <!--Start::Compelete-js-code-for-paypal-sdk-->
	<script src="https://www.paypal.com/sdk/js?client-id=AQ4eIiXQNa2IzhEjEjLZ-HDbwt1GCalO88GsMnnCgfRnOmpoOD8wyhkGclLrgEriqgzie2zoVHl22ce1"></script> 
    
   <!-- <script src="https://www.paypal.com/sdk/js?client-id=AWpDcQijQYQEyDDAhrJnpLiZXTqf-8hrMyB5buCmI7nr1qGPrVylcq37V5RtjomEWmXDQ8cb-ZYV40pp"></script> -->
    <script>
        $(document).ready(function() {
            var per_amount = $('#price_per_item').html();
            var shipping_charges = $('#shipping_charges').html(); 
            per_amount = parseFloat(shipping_charges) + parseFloat(per_amount);
            $("#total_amount").html(per_amount);
        });

      </script>
         <script> var product_details ="Corporate Christmas Gift Basket - Lancaster Favorites <br/>"; </script>
         <script src="assets/js/paypal.js"></script>
       </script>
                <script type="text/javascript">
                    function toggleMenu() {
                    var x = document.getElementById("menu");
                    if (x.className === "topnav") {
                    x.className += " visible";
                    console.log("open");
                    }
                    else {
                    x.className ="topnav";
                    console.log("closed");
                    }
                    }
            </script>
<script type="text/javascript">
$(document).ready(function() {
    $("#addToCartBtn").click(function(e){
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
        var productCustomization = checkedValuesString;
        var productQty = $('.product-metadata').data('product-qty');
        var productImage = $('.product-metadata').data('product-cart_img');
        
        addToCart(productId, productName, productPrice, productFlavorPie, productFlavorBread, productPromoCode, productCardMessage, productCustomization, productQty, productImage);

        var urlCart = $appPathJS+"cart.php";
        window.location.href = urlCart;

    });
    
function addToCart(productID, productName, productPrice, productFlavorPie, productFlavorBread, productPromoCode, productCardMessage, productCustomization, productQty, productImage) {

    var cart = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var existingProductIndex = -1;
    var productToAddOrUpdate = { id: productID, name: productName, price: productPrice, pieflavor: productFlavorPie, breadflavor: productFlavorBread, promo: productPromoCode, message: productCardMessage, cutom: productCustomization, quantity: productQty, image: productImage};

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
</body>

</html>
