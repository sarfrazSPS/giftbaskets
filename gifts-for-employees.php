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

    <meta property="og:title" content="Gifts for Employees" />

    <meta property="og:description" content="In today's work place it is essential to show our employees they are valued. Our PA Dutch gourmet foods and baked goods are loved and can be customized to any occasion"
		  
    <meta property="og:url" content="https://padutchbaskets.com/gifts-for-employees.php"/>

    <meta property="og:site_name" content="PA Dutch Baskets" />

        <meta property="og:image" content="https://www.padutchbaskets.com/assets/images/products/dutch-traditions/corporate-anniversary.jpg" />

    <meta property="product:price:amount" content="89.50" />

    <meta property="product:price:currency" content="USD" />

    <meta property="og:availability" content="instock" />

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>"Gifts for Employees | Lancaster PA</title>

    <meta name="description" content="In today's work place it is essential to show our employees they are valued. Our PA Dutch gourmet foods and baked goods are loved and can be customized to any occasion" />

    <meta name="keywords" content="gifts for employees, corporate employee gifts, best corporate gifts, employee gift baskets, lancaster pa"/>

    <link rel="canonical" href="https://padutchbaskets.com/gifts-for-employees.php">
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
$pid = "product-059";

$pname = isset($_GET['pname']) ? $_GET['pname'] : '';
$pname = validateInput($pname, "pname");
$pname = "Gifts for Employees - Dutch Traditions ";

$pregular = isset($_GET['pregular']) ? $_GET['pregular'] : '';
$pregular = validateInput($pregular, "pregular");

$psale = isset($_GET['psale']) ? $_GET['psale'] : '';
$psale = validateInput($psale, "psale");
$psale = "89.50";

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
$pimg1 = "corporate-anniversary.jpg";
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
                                src="assets/images/products/dutch-traditions/corporate-anniversary.jpg"
                                alt="Our corporate employee gifts customized for any occasion, birthday, get well, great job. Show you care with our PA Dutch baked goods, gourmet foods and chocolates"
                                onmouseover="myFunction(this)"
                                />
                                            
                                <img
                                class="img-responsive"
                                src="assets/images/products/dutch-traditions/pic2.jpg"
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
                                src="assets/images/products/dutch-traditions/corporate-anniversary.jpg"  alt="Corporate employee gifts have become so important to show employees they are valued. We can customize to any occasion with our PA Dutch baked goods"      id="image_box" class="img-responsive"  />
                                
                            <!--Main images -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="prod-id">Product ID: product-059</p>
                    <h3 class="prod-title">"Dutch Traditions" Gifts for Employees</h3>
                      <span class="price">
                        <span class="prod-price" id='price_per_item' >$89.50</span>
                            <span class="prod-stars">
                                <svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path></svg>
                            </span>
                            <span class="prod-seperator"> | </span>
                            <span class="prod-rev-nos">23 Reviews</span>
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
    
                                                        
                                                        
                                                      <img src="assets/images/tags/corporate1.png" alt="Gifts for employees are becoming the norm for birthdays, get well and more. Our PA Dutch baked goods are loved and offer a way to show your employees they are valued" class="circle">
    
                                                    </label>
    
                                                </div>
											
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag3">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate2">
    
                                                        
                                                        
                                                      <img src="assets/images/tags/corporate2.png" alt="Our employee gift baskets are very popular in showing employees they are valued with our PA Dutch gourmet foods that can be customized to any occasion" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="custom-front">
    
                                                        <input type="checkbox" id="custom-front" class="" value="corporate3">
    
                                                       <img src="assets/images/tags/corporate3.png" alt="Corporate gifts are now the norm to show your employees they are valued. Birthdays, thank you or any occasion, our PA Dutch gourmet foods  can be customized" class="circle ">
    
                                                    </label>
    
                                                </div>
    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="Tag">
    
                                                        <input type="checkbox" id="Tag" class="" value="Corporate4">
    
                                                        <img src="assets/images/tags/corporate4.png" alt="Our gifts for employees are loved by the employees receiving them, filled with PA Dutch gourmet foods and baked goods" class="circle ">
    
                                                    </label>
    
                                                </div>
                                                
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate5">
    
                                                      <img src="assets/images/tags/corporate5.png" alt="Our gift baskets for employees are loved and can be customized to any occasion. Filled with gourmet foods and baked goods from Lancaster PA" class="circle ">
    
                                                    </label>
    
                                                </div>
											
											  <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate6">
    
                                                       <img src="assets/images/tags/corporate6.png" alt="The best gifts for employees are those that are enjoyed. Our PA Dutch baked goods and gourmet foods that can be customized to any occasion " class="circle ">
    
                                                    </label>
    
                                                </div>
											
											
                                     <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Corporate7">
    
                                                       <img src="assets/images/tags/corporate7.png" alt="Delicious gourmet foods and baked goods make up our employee gift baskets that can be customize to any occasion while adding loyalty" class="circle ">
    
                                                    </label>
    
                                                </div>
    
                                               
    
    
                                                <div class="col-sm-new-2 mb-new">
    
                                                    <label for="tag">
    
                                                        <input type="checkbox" id="tag" class="" value="Get Well">
    
                                                       <img src="assets/images/tags/no-custom.png"  alt="Saying thank you, happy birthday, get well or any other occasion to employees shows you care. Our PA Dutch gourmet foods are love by all" class="circle ">
    
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
							
						
                            <p>* Apple or Shoo Fly Pie (Your Choice of Flavor)</p>
							<p>* Blueberry Bread (Your Choice of Flavor)</p>
							<p>* Fudge (Your Choice of Flavor)</p>
							<p>* Strawberry Fry Pie</p>
						<p>* Peanut Butter Balls</p>
							
							
						
                        </div>
                        <div class="cgb-copy-right">
							
							<p>Stoltzfus Beef Sticks</p>
                            <p>* 2 Whoopie Pies</p>
							
							<p>* Emma's Famous Popcorn</p>
							<p>* Martins Pretzels</p>
							
							<p>* Customization</p>
							
							
                            
							
						
							
							
                    
                            
                        </div>
                    </div>

                    <h2 class="cgb-subhead">Gifts for Employees</h2>
                    <p class="cgb-subcopy">PA Dutch Baskets offer gifts for employees that are filled with the most delicious gourmet food, baked goods, chocolates and so much more from the Amish in Lancaster, PA. We are happy to customize your gifts for employees for any occasion including but not limited to thank you, birthday, promotions, anniversaries, and so much more. We offer many options with our gift basket that have the best Lancaster PA treats that are loved by everyone who receives them. We offer everything from apple pie, shoo fly pie, fudge, chocolates, gourmet cheeses and so much more. If you don't see the customization you need, give us a call.</p>




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