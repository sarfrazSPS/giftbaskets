<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include($root_path . "includes/header-links.php"); ?>

    <meta property="og:type" content="product" />

    <meta property="og:title" content="Corporate Employee Gifts" />

    <meta property="og:description" content="Show your employees they are valued with our corporate employee gifts customized for any occasion and filled with the most delicious baked goods from Lancaster PA "
    <meta property="og:url" content="https://padutchbaskets.com/best-corporate-gift-ideas.php"/>

    <meta property="og:site_name" content="PA Dutch Baskets" />

        <meta property="og:image" content="https://www.padutchbaskets.com/assets/images/products/savory-flavors/congratulations-employee.jpg" />

    <meta property="product:price:amount" content="119.50" />

    <meta property="product:price:currency" content="USD" />

    <meta property="og:availability" content="instock" />

    <title>"Corporate Employee Gifts | Lancaster PA</title>

    <meta name="description" content="Show your employees they are valued with our corporate employee gifts customized for any occasion and filled with the most delicious baked goods from Lancaster PA" />

    <meta name="keywords" content="corporate employee gifts, best corporate gifts, employee gift baskets, gifts for employees, lancaster pa"/>

    <link rel="canonical" href="https://padutchbaskets.com/corporate-employee-gifts.php">
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
$pid = "product-058";

$pname = isset($_GET['pname']) ? $_GET['pname'] : '';
$pname = validateInput($pname, "pname");
$pname = "Corporate Employee Gifts - Savory Flavors ";

$pregular = isset($_GET['pregular']) ? $_GET['pregular'] : '';
$pregular = validateInput($pregular, "pregular");

$psale = isset($_GET['psale']) ? $_GET['psale'] : '';
$psale = validateInput($psale, "psale");
$psale = "119.50";

$pshipping = isset($_GET['pshipping']) ? $_GET['pshipping'] : '';
$pshipping = validateInput($pshipping, "pshipping");
$pshipping = "10";

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
$pimg1 = "congratulations-employee.jpg";
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
                                src="assets/images/products/savory-flavors/congratulations-employee.jpg"
                                alt="Our corporate employee gifts customized for any occasion, birthday, get well, great job. Show you care with our PA Dutch baked goods, gourmet foods and chocolates"
                                onmouseover="myFunction(this)"
                                />
                                            
                                <img
                                class="img-responsive"
                                src="assets/images/products/savory-flavors/pic2.jpg"
                                alt="Corporate gift baskets show employees they are valued with our customized gift baskets for birthday, welcome to our team or any occasion"
                                onmouseover="myFunction(this)"
                                />
                            
                              
                                
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="main-images">
                            <!--Main images -->
                                
                                   <img
                                class="img-responsive"
                                src="assets/images/products/savory-flavors/congratulations-employee.jpg"  alt="Corporate employee gifts have become so important to show employees they are valued. We can customize to any occasion with our PA Dutch baked goods"      id="image_box" class="img-responsive"  />
                                
                            <!--Main images -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="prod-id">Product ID: product-058</p>
                    <h3 class="prod-title">"Savory Flavors" Corporate Employee Gifts</h3>
                      <span class="price">
                        <span class="prod-price" id='price_per_item' >$119.50</span>
                            <span class="prod-stars">
                                <svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg>
                            </span>
                            <span class="prod-seperator"> | </span>
                            <span class="prod-rev-nos">37 Reviews</span>
                    </span>
                    <span class="prod-rev-nos d-block">Shipping Price: $10</span>
                    <p class="prod-copy">Make Your Selections</p>
                    <form class="prod-form" target="paypal" action="" method="post">
                        <table id="main_tbl">

                        <tr>
							
							<td>
                                
                                    <input type="hidden" name="on0" value="Choose Your Pie">
                                    <div class="form-label">Choose Your Pie</div>
                                    <select name="os0" id="choosePie">
                                        <option value="Apple">Apple </option>
                                        <option value="ShooFly">Shoo Fly </option>
                                      
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
    
                                                    <label for="tag3">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate1">
    
                                                        
                                                        
                                                      <img src="assets/images/tags/corporate1.png" alt="The perfect corporate gift ideas customize to any occasion, birthday, sympathy, get well, with our PA Dutch gourmet foods and baked goods" class="circle ">
    
                                                    </label>
    
                                                </div>
											
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag3">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate2">
    
                                                        
                                                        
                                                      <img src="assets/images/tags/corporate2.png" alt="Corporate employee gifts increase loyatly and show you care with our PA Dutch baked goods loved by all and customized to any occasion" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="custom-front">
    
                                                        <input type="checkbox" id="custom-front" class="" value="corporate3">
    
                                                       <img src="assets/images/tags/corporate3.png" alt="Employee gift baskets can be customized for birthday, get well, thank you or any occasion with our PA Gourmet foods loved by all " class="circle ">
    
                                                    </label>
    
                                                </div>
    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="Tag">
    
                                                        <input type="checkbox" id="Tag" class="" value="Corporate4">
    
                                                        <img src="assets/images/tags/corporate4.png" alt="When looking for corporate gift employee gifts we can customize to any occasion with the most delicious PA Dutch baked goods" class="circle ">
    
                                                    </label>
    
                                                </div>
                                                
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate5">
    
                                                      <img src="assets/images/tags/corporate5.png" alt="We need to show our employees they are valued and our PA Dutch gourmet foods and baked goods can do that and be customized to any occasion" class="circle ">
    
                                                    </label>
    
                                                </div>
											
											  <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate6">
    
                                                       <img src="assets/images/tags/corporate6.png" alt="Employee gift baskets are delicious PA Dutch foods and baked goods and customized to any occasion to show your employees you care" class="circle ">
    
                                                    </label>
    
                                                </div>
											
											
                                     <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate7">
    
                                                       <img src="assets/images/tags/corporate7.png" alt="Our corporate employee gifts show that you care, can be customized to any occasion, and offer the most thoughtful and deliciuos PA Dutch baked goods" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                               
    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Get Well">
    
                                                       <img src="assets/images/tags/no-custom.png"  alt="Saying thank you to employees or happy birthday with our PA Dutch baskets shows you care adding to more loyalty from your employees" class="circle ">
    
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
							<P>* 2 Gourmet Mustard</P>
                            <p>* Apple or Shoo Fly Pie (Your Choice of Flavor)</p>
							<p>* Blueberry Bread (Your Choice of Flavor)</p>
							<p>* Fudge (Your Choice of Flavor)</p>
							<p>* Peanut Butter Brittle</p>
						<p>* Peanut Butter Balls</p>
							
							
						
                        </div>
                        <div class="cgb-copy-right">
							
							
                            <p>* Whoopie Pie</p>
							<p>* Cinnamon Stick (Filled w/Cream Cheese)</p>
							
							
							<p>* Lancaster Party Mix</p>
							
							<p>* Emma's Famous Popcorn</p>
							<p>* Martins Pretzels</p>
							<p>* Chocolate Pretzel Rods</p>
							<p>* Customization</p>
							
							
                            
							
						
							
							
                    
                            
                        </div>
                    </div>

                    <h2 class="cgb-subhead">Corporate Employee Gifts</h2>
                    <p class="cgb-subcopy">Our corporate employee gifts are without question different but more importantly is how they are loved by everyone who receives our gift baskets and boxes. We can customize to your occasion, promotion, thank you, get well, great job, and so many others.</p><p class="cgb-subcopy"> Our corporate employee gifts are filled with the most delicious Lancaster PA Dutch baked goods that are loved by everyone who recieves them and includes gourmet cheeses, gourmet mustards, whoopie pie, peanut butter brittle, chocolates and so much more. So many of our customers started out receiving one first, that is the biggest compliment we could receive, thank you</p>




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
<script src="file:///C|/Users/DELLUS~1/AppData/Local/Temp/Adobe/Dreamweaver 2021/assets/js/paypal.js"></script>
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