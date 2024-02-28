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

$pregular = isset($_GET['pregular']) ? $_GET['pregular'] : '';
$pregular = validateInput($pregular, "pregular");

$psale = isset($_GET['psale']) ? $_GET['psale'] : '';
$psale = validateInput($psale, "psale");

$pshipping = isset($_GET['pshipping']) ? $_GET['pshipping'] : '';
$pshipping = validateInput($pshipping, "pshipping");

$pstarsreview = isset($_GET['pstarsreview']) ? $_GET['pstarsreview'] : '';
$pstarsreview = validateInput($pstarsreview, "pstarsreview");
$sepSR = explode("--",$pstarsreview);

$pstars = $sepSR[0];
if(!is_numeric($pstars)){
    $pstars="no-star";
}
if($pstars<1){
    $pstars=0;
}

$previews = $sepSR[1];
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
                                <?php if($pimg1!=="no-first-img"){?>
                                    <img
                                    class="img-responsive"
                                    src="<?=$old_site_js;?>images/<?=$pimg1;?>"
                                    alt="thumbnail-2"
                                    onmouseover="myFunction(this)"
                                    loading="lazy"
                                    />
                                <?php }?>
                                            
                                <?php if($pimg2!=="no-second-img"){?>
                                    <img
                                    class="img-responsive"
                                    src="<?=$old_site_js;?>images/<?=$pimg2;?>"
                                    alt="thumbnail-1"
                                    onmouseover="myFunction(this)"
                                    loading="lazy"
                                    />
                                <?php }?>

                                <?php if($pimg3!=="no-third-img"){?>
                                    <img
                                    class="img-responsive"
                                    src="<?=$old_site_js;?>images/<?=$pimg3;?>"
                                    alt="thumbnail-4"
                                    onmouseover="myFunction(this)"
                                    loading="lazy"
                                    />
                                <?php }?>
                            
                                <?php if($pimg4!=="no-fourth-img"){?>
                                    <img
                                    class="img-responsive"
                                    src="<?=$old_site_js;?>images/<?=$pimg4;?>"
                                    alt="thumbnail-3"
                                    onmouseover="myFunction(this)"
                                    loading="lazy"
                                    />
                                <?php }?>
                                
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="main-images">
                             <!--Main images -->
                             <?php if($pimg1!=="no-first-img"){?>
                                    <img  src="<?=$old_site_js;?>images/<?=$pimg1;?>"   alt="product-image"      id="image_box" class="img-responsive" loading="lazy" />
                                <?php }?>
                            <!--Main images -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="prod-id">Product ID: <?php if($pid!=="no-id"){echo $pid;}else{echo "PAD-BASKET";};?></p>
                    <h3 class="prod-title"><?php if($pname!=="no-name"){echo $pname;}else{echo "PA Dutch Basket";}?></h3>
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
                    <span class="prod-rev-nos d-block"><?php if($pshipping!=="no-shipping"){echo "Shipping Price: ".$pshipping;}?></span>
                    <p class="prod-copy">Make Your Selections</p>
                    <form class="prod-form" target="paypal" action="" method="post">
                        <table id="main_tbl">
                            <tr>
                                <td>
                                    <?php if($pfpie=="pfpie-1"){?>
                                        <input type="hidden" name="on0" value="Choose Your Pie">
                                        <div class="form-label">Choose Your Pie</div>
                                        <select name="os0" id="choosePie">
                                            <option value="Apple">Apple </option>
                                            <option value="Shoo Fly">Shoo Fly </option>
                                            <option value="Cherry Pie">Cherry Pie </option>
                                        </select>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if($pfbread=="pfbread-1"){?>
                                        <input type="hidden" name="on0" value="Choose Your Bread">
                                        <div class="form-label">Choose Your Bread</div>
                                        <select name="os0" id="chooseBread">
                                            <option value="Blueberry">Blueberry </option>
                                            <option value="Banana">Banana </option>
                                        </select>
                                    <?php }?>
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
                                <span class="prod-form-qty">QTY </span> <input id="productQty" class="form-qty-input" type="number" step="1" min="1" max="1000" value="1" name="qty" >
                            </div>
                            <div class="form-qty-right">
                                <button type="submit" id="addToCartBtn">Add to Cart</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-sm-12 mt-5">
                    <h2 class="cgb-head">Content for your Gift Box</h2>
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