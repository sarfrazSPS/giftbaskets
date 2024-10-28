<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart | PA Dutch Baskets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include($root_path . "includes/header-links.php"); ?>

    <link href="<?= $app_path ?>assets/css/zabuto_calendar.min.css" rel="stylesheet">
    <style>
        .modal-close{
            background: black;
            border: 0;
            color: white;
            padding: 0px 5px;
        }
    </style>

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

<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6C8664J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="content" class="site-content">

    <header>
        <?php include($root_path . "includes/header-top-bar.php"); ?>
        <?php include($root_path . "includes/header-branding.php"); ?>
        <?php include($root_path . "includes/navbar.php"); ?>        
    </header>


<?php
$status = "";
$clear_cart = 0;
$response_type ='danger';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// User card information data received via form submit
	$cc_number = $_POST['cc_number'];
	$cc_exp_month = $_POST['cc_exp_month']; 
	$cc_exp_year = $_POST['cc_exp_year']; 
	$cc_exp_year_month = $cc_exp_year.'-'.$cc_exp_month; 
	$cvc_code = $_POST['cvc_code']; 
	$amount = $_POST['amount']; 
	if(empty($cc_number) || empty($cc_exp_month) || empty($cc_exp_year) || empty($cvc_code) ){
		$status = "<li>Error: Please enter all required fields!</li>";
	}else{
		require_once 'authorize-net-payment.php';
	}	
}

if($response_type=="success"){
    $clear_cart=1;
}
?>
<?php echo breadCrumb($app_path, "Cart");?>
<section id="empty-cart-section" class="py-5 text-center d-none">
    <?php
    if(isset($_GET['res']) && $_GET['res'] == 'thankyou' )
    {
        echo '<h2 class="mt-5 mb-5">Thank you for your order. You will receive an Email shortly confirming your order</h2>'; 
    }
    else
    {
        echo '<h2 class="mt-5 mb-5">Cart is Empty</h2>';
    }
     ?>
    
</section>
<section id="cart-section" class="py-5">
    <div class="container-fluid">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h4>SHOPPING CART (<span id="totalCartItems">-</span> ITEM)</h4>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="d-flex justify-content-end">
                        <div id="goback" class="shopgo">
                            <span class="btn-shopping text-uppercase">Continue Shopping</span>
                            <span class="margin-negative">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg">
                                    <path
                                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </span>
                            <!-- <div class="shopgo-nav">
                                <ul>
                                    <li><a href="<?=$app_path;?>">Home Page</a></li>
                                    <li><a href="#">Most Recent Categories</a></li>
                                    <li><a href="#">Most Recent Items</a></li=>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="shopgo w-100">
                        <a href="<?=$app_path;?>checkout.php" class="cart-btn-checkout other-color">
                            <span class="translatex text-uppercase"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                            <span class="btn-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                    <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                </svg>
                            </span>
                        </a>
                        <!-- <div class="shopgo-nav">
                            <ul>
                                <li><a href="#">Send to one address</a></li>
                                <li><a href="#">Send to multiple addresses</a></li>
                            </ul>
                        </div> -->
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div  id="cart-left" class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" width="70%">PRODUCT</th>
                                    <th scope="col" width="10%">PRICE</th>
                                    <th scope="col" width="10%">QUANTITY</th>
                                    <th scope="col" width="10%">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody id="dynamicContentContainer">                             
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div id="cart-right">
                        <div class="card-right p-3">
                            <h6 class="cart-border pb-3">ORDER SUMMARY</h6>
                            <div class="d-flex justify-content-between pt-3 pb-1">
                                <p class="mb-0">PRODUCT TOTAL:</p>
                                <span id="grandSubTotal"><b>-</b></span>
                            </div> 
                            <div class="position-relative">
                                <input type="text" id="checkout-coupon-field" class="checkout-input-field" name="coupon" placeholder="Enter Code">
                                <input type="button" id="checkout-coupon-btn" onclick="fn_promo_code()" class="cart-coupon-btn chk-cpn-btn" value="Apply" >
                                <span id="error_msg" style="display: none; font-size: medium; color:red">Promo code is not valid or expired.</span>
                                <input type='hidden' name='couponapplied' id="couponapplied" value='0'> 
                                <input type="hidden" name='product_name' id="product_name" />
                                <input type="hidden" name="deliveryDate" id="deliveryDate" value=""> 
                            </div>                      
                        </div>
                        <div class="py-3">
                            <div class="shopgo w-100">
                                <!-- Button to open the modal -->
                                <button type="button" id="openCalendarModal" class="btn-shopping w-100 border-0 mb-3">Choose Delivery Date</button>
                                <a href="<?=$app_path;?>checkout.php" class="cart-btn-checkout other-color">
                                    <span class="translatex text-uppercase "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg> Checkout</span>
                                    <span class="btn-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg other-color rotate90">
                                            <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
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

<!-- Modal structure -->
<div id="calendarModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold">DELIVERY CALENDAR</h5>
        <button type="button" class="close modal-close" aria-label="Close" onclick="customCloseModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-8">
                <!-- Calendar will be here -->
                <div id="demo-calendar-basic"></div>
                <h6 id="display_ddate" class="mt-3 ms-1 fw-normal"></h6>
            </div>
            <div class="col-sm-4">
                <h5 class="mb-3">SHIPPING SUMMARY</h5>
                <p class="mt-2 mb-0 p-0">Simply provide your recipient's email and we'll send them an note that a gift for them is on the way!</p>
            </div>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary" onclick="customCloseModal()">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="popupContentGift" class="cie-item-popup">
    <div class="cie-item-popup-outer">
        <div class="ciep-top">
            <img src="assets/images/icons/i-greeting-card-white.png" />
            Make your gift extra special
        </div>
        <p class="ciep-head">
            Personalize a greeting card with your message and add o photo or logo!
        </p>
        <img src="<?=$app_path;?>assets/images/card-example.webp" class="img-fluid mt-1" />
        <p class="d-block text-sm mt-2 mb-0 f-80">(adding an image is optional)</p>
        <p class="d-block text-uppercase mt-2 mb-0">Available at checkout #3.99</p>
        <p class="d-block text-xs mt-2 mb-0 f-70">a complimentary message is also included with this gift</p>
    </div>
</div>

<div id="popupContentEmail" class="cie-item-popup">
    <div class="cie-item-popup-outer">    
        <div class="ciep-top">
            <img src="assets/images/icons/i-notification-white.png" />
            Instant Email Notification
        </div>
        <p class="ciep-head">
            Let them know their gift is on the way!
        </p>
        <img src="<?=$app_path;?>assets/images/notification_example.webp" class="img-fluid mt-1" />
        <p class="d-block text-xs mt-2 mb-0 f-70">email notification included in this gift</p>
    </div>
</div>

<?php
include("includes/footer.php");
?>
<script src="<?= $app_path ?>assets/js/zabuto_calendar.min.js"></script>
<?php
if($clear_cart==1){
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            localStorage.clear();
        });
    </script>
    <?php
}
?>

<script>
    function fn_promo_code()
    {
        var promocode = $('#checkout-coupon-field').val();
        // Replace 'YOUR_API_URL' with the actual URL of your PHP API
        const apiURL = '../admin/promo_code_api.php?promocode='+promocode;
        // Make a GET request to the API
        fetch(apiURL)
        .then(response => response.json())
        .then(data => {
        if (data.valid) {
            
            $("#error_msg").css("display","none");
            var total_amount = $('#grandSubTotal').html(); 

            var total_amount =  parseFloat(total_amount.replace(/[^0-9.]/g, ''));
            // alert(totalAmount);
            var discountPercent = parseFloat(data.discount);
            var discount_type = data.discount_type;
            // alert(discountPercent);
            // Check if the discount percentage is valid (greater than or equal to 0 and less than or equal to 100)
            if (isNaN(discountPercent) || discountPercent < 0 || discountPercent > 100) {
                alert("Invalid discount percentage");
            } else {
                if(discount_type=="percent")
                {
                var discountAmount = (discountPercent / 100) * total_amount;
                }
                else
                {
                var discountAmount = parseFloat(data.discount);
                }
                
                localStorage.setItem('discountAmount', discountAmount);
                var totalAmount = parseFloat(total_amount) - parseFloat(discountAmount);
                $("#grandSubTotal").html('$'+totalAmount.toFixed(2));
            }
        } else {
            console.log('Promo code is not valid or expired.');
            $("#error_msg").css("display","block");
            // console.log('Message:', data.message);
        }
        })
        .catch(error => {
        console.error('Error:', error);
        });

    }
 </script>

<script type="text/javascript">

    $(document).ready(function() {
        var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
        console.log(localStorage);
        if (cartItems.length === 0) {
            $("#empty-cart-section").removeClass("d-none");
            $("#cart-section").addClass("d-none");
        }else{
            var totalCartItems = 0;
            cartItems.forEach(function(item) {
                totalCartItems++;
                $('#dynamicContentContainer').append(
                '<tr id="'+item.id+'" class="cart_tr">' +
                '<td>' +
                '<div class="d-flex">' +
                '<div class="cartitemimage">' +
                '<a href="#" id="">' +
                '<img id="" class="img-fluid" src="'+$appPathJS+'images/'+item.image+'" alt="'+item.name+'" style="border-width:0px;">' +
                '</a>'+
                '<span class="tbl-span">PRODUCT ID: '+item.id+'</span>'+
                '</div>'+
                '<div class="ms-3 w-100 position-relative">'+
                '<div class="cart-item-name">'+
                '<p class="mb-1" style="text-transform:uppercase;">'+item.name+'</p>'+
                '<span class="tbl-span item-remove-btn" style="color:black" id="'+item.id+'">REMOVE ITEM</span>'+
                '</div>'+
                '<div class="cart-item-extras">'+
                '<div class="d-flex">'+
                '<div id="popupActivateGift'+totalCartItems+'" class="cie-item">'+
                '<div id="popupActivateEmail'+totalCartItems+'" class="cie-item">'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</td>'+
                '<td class="cal_item_price">'+item.price+'</td>'+
                '<td width="10%">'+
                '<div class="d-flex">'+
                '<span class="min buttonplusminus">'+
                '-'+
                '</span>'+
                '<input class="cal_item_qty" type="number" name="qty" id="qty" min="1" value="'+item.quantity+'" />'+
                '<span class="plus buttonplusminus">'+
                '+'+
                '</span>'+
                '</div>'+
                '</td>'+
                '<td class="">$<span class="cal_item_sub_total">0</span></td>'+
                '</tr>'
                );
            });
            $("#totalCartItems").text(totalCartItems);
        }
    }); 
</script>

<script type="text/javascript">
    function calculat_each_item_total(){
        $('#dynamicContentContainer tr').each(function(index, row) {
            var item_price = $(row).find('.cal_item_price').text();
    console.log(index+"="+item_price);
            var item_qty = $(row).find('.cal_item_qty').val();
            item_qty = parseInt(item_qty);
    console.log(index+"="+item_qty);
            var itemTotal = item_qty*item_price;
            itemTotal = parseFloat(itemTotal);
            itemTotal = itemTotal.toFixed(2);
    console.log(index+"="+itemTotal);        
            $(row).find(".cal_item_sub_total").text(itemTotal);
        });
    }

    function calculat_items_sub_total(){
        var subTotal = 0;
        $('#dynamicContentContainer tr').each(function(index, row) {
            var item_sub_price = $(row).find('.cal_item_sub_total').text();
            item_sub_price = parseFloat(item_sub_price);
            subTotal += item_sub_price;
        });
        subTotal = subTotal.toFixed(2);
        $("#grandSubTotal").html("<b>$"+subTotal+"</b>");
        $("#cartSubTotal").val(subTotal);
    }

    function updateQuantityInLocalStorage(newQuantity,specificIdToRemove) {
        var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];

        var specificId = specificIdToRemove;
        var foundItem = cartItems.find(item => item.id === specificId);

        if (foundItem) {
        foundItem.quantity = newQuantity;
        }

        localStorage.setItem('cartstorage', JSON.stringify(cartItems));
    }

    $(document).ready(function() {
        calculat_each_item_total();
        calculat_items_sub_total();
    });
</script>

<script type="text/javascript">
    jQuery(function() {
        var j = jQuery; 

        j('.plus, .min').on('click', function() {
            var addInput = j(this).siblings('.cal_item_qty'); 

            if (j(this).hasClass('plus')) {
                addInput.val(function(i, value) {
                    return parseInt(value, 10) + 1;
                });

            } else if (j(this).hasClass('min')) {
                addInput.val(function(i, value) {
                    return parseInt(value, 10) >= 2 ? parseInt(value, 10) - 1 : value;
                });
            }

            calculat_each_item_total();
            calculat_items_sub_total();

            var updatedQuantity = parseInt(addInput.val(), 10);
            var specificIdToRemove = j(this).closest(".cart_tr").attr("id");

            updateQuantityInLocalStorage(updatedQuantity,specificIdToRemove);        
            
            console.log(updatedQuantity);

        });
    });

</script>

<script>
    $('#dynamicContentContainer').on('click', '.cal_item_qty', function() {
        var addInput = $(this);
        var updatedQuantity = parseInt(addInput.val(), 10);
        var specificIdToRemove = $(this).closest(".cart_tr").attr("id");
        updateQuantityInLocalStorage(updatedQuantity,specificIdToRemove);        

        calculat_each_item_total();
        calculat_items_sub_total();
    });

    $('#dynamicContentContainer').on('change', '.cal_item_qty', function() {
        calculat_each_item_total();
        calculat_items_sub_total();
    });
</script>

<script type="text/javascript">
    $('#dynamicContentContainer').on('click', '.item-remove-btn', function() {
        var specificIdToRemove = $(this).attr('id');

        var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
        // Remove the item with the specific ID from the cartItems array
        cartItems = cartItems.filter(function(item) {
            return item.id !== specificIdToRemove;
        });

        // Update the localStorage with the modified cartItems array
        localStorage.setItem('cartstorage', JSON.stringify(cartItems));
        window.location.href = location.href;

    });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    let hoveredContentGift = $('#popupContentGift');
    var hoverAreaGift = {};

    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var totalCItems = 0;
    cartItems.forEach(function(item) {
        totalCItems++;

        hoverAreaGift[totalCItems] = $('#popupActivateGift'+totalCItems);

        hoverAreaGift[totalCItems].mouseenter(function(e) {
            hoveredContentGift.css({
                top: e.pageY + 'px',
                left: e.pageX + 10 + 'px'  
            });

            hoveredContentGift.show();
        });

        hoverAreaGift[totalCItems].mouseleave(function() {
            hoveredContentGift.hide();
        });

        hoveredContentGift.mouseenter(function() {
            hoveredContentGift.show();
        });

        // $(document).mousemove(function(e) {
        //     if (!hoverAreaGift[totalCItems].is(e.target) && !hoverAreaGift[totalCItems].is(e.target) && hoverArea1.has(e.target).length === 0 && hoveredContentGift.has(e.target).length === 0) {
        //         hoveredContentGift.hide();
        //     }
        // });
    });

    

  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    let hoveredContentEmail = $('#popupContentEmail');
    var hoverAreaEmail = {};

    var cartItems = JSON.parse(localStorage.getItem('cartstorage')) || [];
    var totalCItems1 = 0;
    cartItems.forEach(function(item) {
        totalCItems1++;

        hoverAreaEmail[totalCItems1] = $('#popupActivateEmail'+totalCItems1);

        hoverAreaEmail[totalCItems1].mouseenter(function(e) {
            hoveredContentEmail.css({
            top: e.pageY + 'px',
            left: e.pageX + 10 + 'px'  
        });

        hoveredContentEmail.show();
        });

        hoverAreaEmail[totalCItems1].mouseleave(function() {
            hoveredContentEmail.hide();
        });

        hoveredContentEmail.mouseenter(function() {
            hoveredContentEmail.show();
        });

        // $(document).mousemove(function(e) {
        //   if (!hoverAreaEmail[totalCItems1].is(e.target) && !hoveredContentEmail.is(e.target) && hoverAreaEmail[totalCItems1].has(e.target).length === 0 && hoveredContentEmail.has(e.target).length === 0) {
        //     hoveredContentEmail.hide();
        //   }
        // });
    });

  });
</script>
<script>
  $(document).ready(function() {

    localStorage.setItem('discountAmount', 0);
    var leftElement = $("#cart-left");
    var rightElement = $("#cart-right");

    function updateLeftElementPosition() {
      var leftHeight = leftElement.outerHeight();
      var rightHeight = rightElement.outerHeight();

      if (leftHeight > rightHeight) {
        rightElement.css({
          position: "sticky",
          top: 0
        });
      } else {
        rightElement.css({
          position: "static",
          top: "auto"
        });
      }
    }

    $(window).scroll(updateLeftElementPosition);

    updateLeftElementPosition();
  });


</script>

<!-- Initialize the plugin and handle modal -->
<script>
var lastSelectedDate = null;

function customCloseModal() {
    $("#calendarModal").modal('hide');
}

function myDateFunction(id, date) {
    console.log("You clicked on date: " + date);
}

$(document).ready(function () {
    // Initialize Zabuto Calendar
    var $el = $('#demo-calendar-basic');

    $el.zabuto_calendar({
        classname: 'table clickable'
    });

    $(".zabuto-calendar__day--today").css({
        'font-weight': 'bold',
        'color': '#7b5c4a', 
    });

    $el.on('zabuto:calendar:day', function (e) {
        console.log("day");
        var now = new Date();

        $(".zabuto-calendar__day, .zabuto-calendar__day--today").removeAttr("style");

        // $(".zabuto-calendar__day--today").css({
        //     'font-weight': 'bold',
        //     'color': '#7b5c4a', 
        // });

        $(e.element).css({
            'background-color': '#7b5c4a',
            'color': '#ffffff', 
        });

        // Save the selected date
        lastSelectedDate = e.date;
        
        $("#deliveryDate").val(e.date.toDateString());
        $("#display_ddate").html("Delivery Date: <b>" + e.date.toDateString() + "</b>");
        $("#openCalendarModal").text("Delivery Date: " + e.date.toDateString());
        

    });


          
    // Reapply the last selected date's style when reopening the modal
    $("#openCalendarModal").click(function() {
        if (lastSelectedDate) {
            var formattedDate = lastSelectedDate.toISOString().split('T')[0]; // Format the date for comparison

            // Reapply styles to the previously selected date
            $el.find('.zabuto-calendar__day[data-date="' + formattedDate + '"]').css({
                'background-color': '#7b5c4a',
                'color': '#ffffff',
            });
        }
        $("#calendarModal").modal("show");
    });

    // Handle month navigation to keep the last selected date
    // $(document).on('zabuto:calendar:navigate', function () {
        
    //     if (lastSelectedDate) {
    //         var formattedDate = lastSelectedDate.toISOString().split('T')[0];
    //         console.log("months"+formattedDate);
    //         // Use setTimeout to wait until the calendar is fully rendered
    //         setTimeout(function() {
    //             $el.find('.zabuto-calendar__day[data-date="' + formattedDate + '"]').css({
    //                 'background-color': '#7b5c4a',
    //                 'color': '#ffffff',
    //             });
    //         }, 100); // Adjust the delay if necessary
    //     }
    // });

    // Detect when the calendar is re-rendered (e.g., after month change)
    // $el.on('DOMSubtreeModified', function () {
    //     if (lastSelectedDate) {
    //         var formattedDate = lastSelectedDate.toISOString().split('T')[0];

    //         // Reapply styles to the previously selected date after DOM modification
    //         $el.find('.zabuto-calendar__day[data-date="' + formattedDate + '"]').css({
    //             'background-color': '#7b5c4a',
    //             'color': '#ffffff',
    //         });
    //     }
    // });
    
});
</script>