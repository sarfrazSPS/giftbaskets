<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= $app_path ?>assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?= $app_path ?>assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta property="og:type" content="product" />

    <meta property="og:title" content="Gift Basket Ideas" />

    <meta property="og:description" content="When looking for gift basket ideas, our gift baskets and gift boxes are loved and offer PA Dutch baked goods, gourmet cheeses, chocolates and more that we deliver"
    <meta property="og:url" content="https://padutchbaskets.com/gift-baskets-near-me.php"/>

    <meta property="og:site_name" content="PA Dutch Baskets" />

        <meta property="og:image" content="https://www.padutchbaskets.com/assets/images/products/bakers-choice/deluxe-gift-baskets.jpg" />

    <meta property="product:price:amount" content="87.50" />

    <meta property="product:price:currency" content="USD" />

    <meta property="og:availability" content="instock" />

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gift Basket Ideas | Lancaster PA</title>

    <meta name="description" content="When looking for gift basket ideas, our gift baskets and gift boxes are loved and offer PA Dutch baked goods, gourmet cheeses, chocolates and more that we deliver" />

    <meta name="keywords" content="gift baskets ideas, sympathy gift basket ideas, birthday gift basket ideas, get well gift basket ideas,  lancaster pa"/>

    <link rel="canonical" href="https://padutchbaskets.com/gift-baskets-ideas.php">
</head>



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
<?php
$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$pid = validateInput($pid, "pid");

$pname = isset($_GET['pname']) ? $_GET['pname'] : '';
$pname = validateInput($pname, "pname");
$pname = "Gift Basket Ideas - Bakers Choice";
$pregular = isset($_GET['pregular']) ? $_GET['pregular'] : '';
$pregular = validateInput($pregular, "pregular");

$psale = isset($_GET['psale']) ? $_GET['psale'] : '';
$psale = validateInput($psale, "psale");
$psale = "72.50";

$pshipping = isset($_GET['pshipping']) ? $_GET['pshipping'] : '';
$pshipping = validateInput($pshipping, "pshipping");

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

<section id="" class="mt-5 mb-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-2 small-images-outer">
                            <div class="small-images">
                            <!--4 side images -->
                                <img
                                class="img-responsive"
                                src="assets/images/products/bakers-choice/deluxe-gift-basket.jpg"
                                alt="Our gift basket ideas start with PA Dutch baked goods, cheeses, chocolates and more from the Amish in Lancaster PA and loved by everyone"
                                onmouseover="myFunction(this)"
                                />
                                            
                                <img
                                class="img-responsive"
                                src="assets/images/products/bakers-choice/pic2.jpg"
                                alt="the delicious taste of gift baskets near me in lancaster pa are the most delicious gift baskets from the Dutch in lancaster county"
                                onmouseover="myFunction(this)"
                                />
                            
                              
                                
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="main-images">
                            <!--Main images -->
                                
                                    <img  src="assets/images/products/bakers-choice/deluxe-gift-basket.jpg"   alt="Looking for gift basket ideas that will be loved? Our Lancaster PA Dutch baked goods, gourmet cheeses and chocolates are just the thing. We also deliver"      id="image_box" class="img-responsive"  />
                                
                            <!--Main images -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="prod-id">Product ID: product-018</p>
                    <h3 class="prod-title">Gift Basket Ideas</h3>
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
                            <span class="prod-rev-nos"><?=$previews;?>19 Reviews</span>
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
                                        <option value="Apple">Apple Pie </option>
                                        <option value="Shoo Fly">Shoo Fly Pie </option>
                                      
                              </select>
                                
                            </td>
							
							
							
							<td>
                                
                                    <input type="hidden" name="on0" value="Choose Your Fudge">
                                    <div class="form-label">Choose Your Fudge</div>
                                    <select name="os0" id="chooseFudge">
                                        <option value="Chocolate">Chocolate </option>
                                        <option value="Choc/Peanut Butter">Choc/Peanut Butter </option>
                                      
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
    
                                                        <img src="assets/images/tags/birthday4.png" alt="birthday gift basket ideas near me filled with PA Dutch baked goods"  class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="Sympathy" class="" value="Sympathy">
    
                                                        
                                                        
                                                        <img src="assets/images/tags/sympathy3.png" alt="sympathy gift basket ideas loved by everyone who has the opportunity to enjoy" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="custom-front">
    
                                                        <input type="checkbox" id="custom-front" class="" value="Get Well">
    
                                                        <img src="assets/images/tags/get-well5.png" alt="get well gift basket ideas from Lancaster, PA with delicious baked goods, gourmet cheeses, and so much more" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="Tag">
    
                                                        <input type="checkbox" id="Tag" class="" value="Thank You">
    
                                                        <img src="assets/images/tags/thank-you2.png" alt="Thank you gift basket ideas that can be delivered anywhere in the country" class="circle ">
    
                                                    </label>
    
                                                </div>
                                                
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Congratulations">
    
                                                        <img src="assets/images/tags/congrats3.png" alt="congratulations gift baskets known around the world with Amish baked goods, cheeses and more" class="circle ">
    
                                                    </label>
    
                                                </div>
                                    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="balloon">
    
                                                        <input type="checkbox" id="Tag" class="" value="Anniversary">
    
                                                        
                                                        
                                                        <img src="assets/images/tags/happy-anniversary.png" alt="anniversary gift basket ideas from PA Dutch country with baked goods loved by everyone" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Thinking of You">
    
                                                        <img src="assets/images/tags/thinking-of-you.png" alt="thinking of you gift baskets near me are loved by everyone filled with baked foods, gourmet cheeses and more from lancaster pa" class="circle ">
    
                                                    </label>
    
                                                </div>
    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Get Well">
    
                                                        <img src="assets/images/tags/no-custom.png" alt="get well gift baskets filled with PA Dutch baked goods and delivered anywhere in the country" class="circle ">
    
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
                </div>
                <div class="col-sm-12 mt-5">
                    <h2 class="cgb-head">Content for your Gift Basket</h2>
                    <div class="cgb-copy">
                        <div class="cgb-copy-left">
							
							
                            <p>* 2 Gourmet Cheeses</p>
							<p>* Gourmet Mustard</p>
                            <p>* Apple Pie (Choice of Flavor)</p>
							<p>* Delicious Blueberry Bread (Choice of Flavor)</p>
                          
                            <p>* Fudge (Choice of Flavor)</p>
							
						
							
                        </div>
                        <div class="cgb-copy-right">
							  <p>* Whoopie Pie</p>
                            <p>* Emma's Famous Popcorn</p>
                            <p>* Martins Pretzels</p>
                           <p>* Strawberry Danish</p>
								<p>* Blueberry Donut Holes</p>
                            
                        </div>
                    </div>

                    <h2 class="cgb-subhead">Gift Basket Ideas</h2>
                    <p class="cgb-subcopy">When looking for gift basket ideas, our PA Dutch baked goods and other foods have become such a popular choice because everyone loves them. It's become so popular to send a gift basket to a friend, loved one, coworker, or yourself. Our customers tell us that our gift basket ideas are unique and everyone says they are delicious. While our staff does an amazing job to make our baskets and boxes attractive, we are able to offer foods and baked goods from one of the most popular places in the country when it comes to delicious foods.


                </div>
            </div>
        </div>
    </div>
</section>
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
    function myFunction(smallImg){var fullImg=document.getElementById("image_box");fullImg.src=smallImg.src}
</script>
<script> var product_details ="Corporate Christmas Gift Basket - Lancaster Favorites <br/>"; </script>
<script src="assets/js/paypal.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AQ4eIiXQNa2IzhEjEjLZ-HDbwt1GCalO88GsMnnCgfRnOmpoOD8wyhkGclLrgEriqgzie2zoVHl22ce1"></script> 
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
<script type="text/javascript" charset="utf-8">
finished();
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