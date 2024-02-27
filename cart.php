
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= $app_path ?>assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?= $app_path ?>assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;1,500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta property="og:type" content="product" />

    <meta property="og:title" content="Chocolate Gift Baskets" />

    <meta property="og:description" content="Our chocolate gift baskets offer Lancaster PA Dutch baked goods, cheeses, chocolates, whoopie pies, blueberry breads, apple pies and more" />

    <meta property="og:url" content="https://padutchbaskets.com/chocolate-gift-baskets.php"/>

    <meta property="og:site_name" content="PA Dutch Baskets" />

        <meta property="og:image" content="https://www.padutchbaskets.com/assets/images/products/chocolate-lovers/chocolate-lovers-gift-basket.jpg" />

    <meta property="product:price:amount" content="74.50" />

    <meta property="product:price:currency" content="USD" />

    <meta property="og:availability" content="instock" />

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cart | Lancaster PA </title>

    <meta name="description" content="Unleash the joy with amazing chocolate gift baskets in Lancaster, PA, available online at PA Dutch Baskets. Perfect for any occasion, these baskets are a true delight!" />

    <meta name="keywords" content="chocolate gift baskets, chocolate gift baskets from lancaster pa, unique gift basket ideas, food gift ideas, custom gift baskets, lancaster pa"/>

    <link rel="canonical" href="https://padutchbaskets.com/chocolate-gift-baskets.php">
</head>


<?php include("includes/header.php"); ?>
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

<section id="empty-cart-section" class="py-5 text-center d-none">
    <h2 class="mt-5 mb-5">Cart is Empty</h2>
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
                        <div class="shopgo">
                            <span class="btn-shopping text-uppercase">Continue Shopping</span>
                            <span class="margin-negative">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="btn-svg">
                                    <path
                                        d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </span>
                            <div class="shopgo-nav">
                                <ul>
                                    <li><a href="<?=$app_path;?>">Home Page</a></li>
                                    <li><a href="#">Most Recent Categories</a></li>
                                    <li><a href="#">Most Recent Items</a></li=>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="shopgo w-100">
                        <a href="<?=$app_path;?>/checkout.php" class="cart-btn-checkout other-color">
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
                        </div>
                        <div class="py-3">
                            <div class="shopgo w-100">
                                <a href="<?=$app_path;?>/checkout.php" class="cart-btn-checkout other-color">
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
                '<span class="tbl-span item-remove-btn" id="'+item.id+'">REMOVE ITEM</span>'+
                '</div>'+
                '<div class="cart-item-extras">'+
                '<p class="mb-1 text-uppercase">Available with this gift</p>'+
                '<div class="d-flex">'+
                '<div id="popupActivateGift'+totalCartItems+'" class="cie-item">'+
                '<div>'+
                '<img src="assets/images/icons/i-greeting-card.png" />'+
                '</div>'+
                '<div class="cie-item-copy">personalized greeting card</div>'+
                '</div>'+
                '<div id="popupActivateEmail'+totalCartItems+'" class="cie-item">'+
                '<div>'+
                '<img src="assets/images/icons/i-notification.png" />'+
                '</div>'+
                '<div class="cie-item-copy">instant email notification</div>'+
                '</div>'+
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

        var item_qty = $(row).find('.cal_item_qty').val();
        item_qty = parseInt(item_qty);

        var itemTotal = item_qty*item_price;
        itemTotal = parseFloat(itemTotal);
        itemTotal = itemTotal.toFixed(2);
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