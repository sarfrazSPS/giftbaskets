<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include($root_path . "includes/header-links.php"); ?>

    <meta property="og:type" content="product" />

    <meta property="og:title" content="Best Gift Baskets" />

    <meta property="og:description" content="Looking for the best gift baskets, everyone who has tried our gift baskets love them. Lancaster, PA Dutch baked goods, gourmet foods, cheeses, chocolates and more"
    <meta property="og:url" content="https://padutchbaskets.com/assets/images/products/savory-flavors/gift-basket-online.jpg"/>

    <meta property="og:site_name" content="PA Dutch Baskets" />

        <meta property="og:image" content="https://www.padutchbaskets.com/assets/images/products/savory-flavors/gift-basket-online.jpg" />

    <meta property="product:price:amount" content="119.50" />

    <meta property="product:price:currency" content="USD" />

    <meta property="og:availability" content="instock" />

    <title>Best Gift Baskets | Lancaster PA</title>

    <meta name="description" content="Looking for the best gift baskets, everyone who has tried our gift baskets love them. Lancaster, PA Dutch baked goods, gourmet foods, cheeses, chocolates and more" />

    <meta name="keywords" content="best gift baskets, best sympathy gift baskets, best birthday gift baskets, best get well gift baskets,  lancaster pa"/>

    <link rel="canonical" href="https://padutchbaskets.com/best-gift-baskets.php">
</head>

<body>
    <div id="content" class="site-content">

    <header>
        <?php include($root_path . "includes/header-top-bar.php"); ?>
        <?php include($root_path . "includes/header-branding.php"); ?>
        <?php include($root_path . "includes/navbar.php"); ?>   
    </header>

    
<?php
$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$pid = validateInput($pid, "pid");
$pid = "product-019";

$pname = isset($_GET['pname']) ? $_GET['pname'] : '';
$pname = validateInput($pname, "pname");
$pname = "Best Gift Baskets -Savory Flavors";

$pregular = isset($_GET['pregular']) ? $_GET['pregular'] : '';
$pregular = validateInput($pregular, "pregular");

$psale = isset($_GET['psale']) ? $_GET['psale'] : '';
$psale = validateInput($psale, "psale");
$psale = "119.50";

$pshipping = isset($_GET['pshipping']) ? $_GET['pshipping'] : '';
$pshipping = validateInput($pshipping, "pshipping");
$pshipping = "0";

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
$pimg1 = "deluxe-gift-basket.jpg";
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
                                src="assets/images/products/savory-flavors/gift-basket-online.jpg"
                                alt="When looking for the best gift baskets, Lancaster PA offers the best baked goods, gourmet cheeses, chocoaltes and so much more that we deliver"
                                onmouseover="myFunction(this)"
                                />
                                            
                                <img
                                class="img-responsive"
                                src="assets/images/products/bakers-choice/pic2.jpg"
                                alt="the best gift baskets are filled with baked goods, gourmet foods, chocolates and more from Lancaster PA and delivered"
                                onmouseover="myFunction(this)"
                                />
                            
                              
                                
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="main-images">
                            <!--Main images -->
                                
                                    <img  src="assets/images/products/bakers-choice/deluxe-gift-basket.jpg"   alt="Looking for the best gift baskets, our PA Dutch baked goods, chocolates, and gourmet foods are loved by everyone"      id="image_box" class="img-responsive"  />
                                
                            <!--Main images -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="prod-id">Product ID: product-019</p>
                    <h3 class="prod-title">"Savory Flavors" Best Gift Baskets</h3>
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
                    <span class="prod-rev-nos d-block">Shipping Price: $0</span>
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
    
                                                        <img src="assets/images/tags/birthday4.png" alt="best birthday gift baskets filled with PA Dutch baked goods"  class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="Sympathy" class="" value="Sympathy">
    
                                                        
                                                        
                                                        <img src="assets/images/tags/sympathy3.png" alt="best sympathy gift baskets that are loved by everyone who has the opportunity to enjoy these PA Dutch baked goods" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="custom-front">
    
                                                        <input type="checkbox" id="custom-front" class="" value="Get Well">
    
                                                        <img src="assets/images/tags/get-well5.png" alt="best get well gift baskets that offer chocolates, cheeses, blueberry breads and more" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="Tag">
    
                                                        <input type="checkbox" id="Tag" class="" value="Thank You">
    
                                                        <img src="assets/images/tags/thank-you2.png" alt="Best Thank you gift baskets is the perfect way to say thank you with a delicious gift basket" class="circle ">
    
                                                    </label>
    
                                                </div>
                                                
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Congratulations">
    
                                                        <img src="assets/images/tags/congrats3.png" alt="Best congratulations gift baskets known around the world with Amish baked goods, cheeses and more" class="circle ">
    
                                                    </label>
    
                                                </div>
                                    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="balloon">
    
                                                        <input type="checkbox" id="Tag" class="" value="Anniversary">
    
                                                        
                                                        
                                                        <img src="assets/images/tags/happy-anniversary.png" alt="best anniversary gift baskets that come from the Amish in Lancaster PA with delicious baked goods" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Thinking of You">
    
                                                        <img src="assets/images/tags/thinking-of-you.png" alt="best thinking of you gift baskets loved by everyone filled with baked foods, gourmet cheeses and more from lancaster pa" class="circle ">
    
                                                    </label>
    
                                                </div>
    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Get Well">
    
                                                        <img src="assets/images/tags/no-custom.png" alt="best get well gift baskets delivered anywhere in the country" class="circle ">
    
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
							 <p>* Peanut Butter Balls</p>
							
						
							
                        </div>
                        <div class="cgb-copy-right">
							 <p>* Peanut Butter Brittle</p>
							  <p>* Whoopie Pie</p>
                            <p>* Emma's Famous Popcorn</p>
                            <p>* Martins Pretzels</p>
                           <p>* Lancaster Party Mix</p>
								<p>* Chocolate Pretzel Rods</p>
							 <p>* Cinnamon Stick (Filled with Cream Cheese)</p>
                            
                        </div>
                    </div>

                    <h2 class="cgb-subhead">Best Gift Baskets</h2>
                    <p class="cgb-subcopy">The Best Gift Baskets are loved by everyone who receives them. We offer Savory Flavors gift basket that offers baked goods, cheeses, chocolates and more. Filled with the most popular Dutch treats including delicious Blueberry bread (your choice of flavor), whoopie pie, Stoltzfus Peanut Butter Brittle, gourmet mustard, fudge and so much more. This is one of our most popular and best gift baskets that people are amazed at as you simply can't get enough. We are happy to customize for an occasion or event, simply click in our navigation to find the occasion and if you can't find it, give us a call.


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
    data-product-shipping-price="<?php if($pshipping!=="no-shipping"){echo $pshipping;}?>"
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