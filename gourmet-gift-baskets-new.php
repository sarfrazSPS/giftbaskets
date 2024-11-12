<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include($root_path . "includes/header-links.php"); ?>
  <meta property="og:type" content="product" />

  <meta property="og:title" content="Gourmet Gift Baskets" />

  <meta property="og:description" content="Delicious Gourmet gift baskets from Lancaster PA with baked goods, cheeses, chocolates, whoopie pies and more that can be delivered" />

  <meta property="og:url" content="https://padutchbaskets.com/gourmet-gift-baskets.php" />

  <meta property="og:site_name" content="PA Dutch Baskets" />

  <meta property="og:image" content="https://www.padutchbaskets.com/assets/images/products/deluxe-traditions/gourmet-basket.jpg" />

  <meta property="product:price:amount" content="89.50" />

  <meta property="product:price:currency" content="USD" />

  <meta property="og:availability" content="instock" />

  <title>Gourmet Gift Baskets | Lancaster PA </title>

  <meta name="description" content="Delicious Gourmet gift baskets from Lancaster PA with baked goods, cheeses, chocolates, whoopie pies and more that can be delivered" />

  <meta name="keywords" content="gourmet gift baskets, thank you gourmet gift baskets, sympathy gourmet gift baskets, get well gourmet gift baskets, lancaster pa" />

  <link rel="canonical" href="https://padutchbaskets.com/gourmet-gift-baskets.php">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P6C8664J');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '994885672288673');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=994885672288673&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

  <style>

    .product-slider {
      display: flex;
      overflow-x: scroll;
    }   
    .pd-tabs .nav-link{
      padding: 0;
      border: 0;
    }
    .pd-tabs .nav-link img{
      max-width: 100%;
    }
    .add-btn{
      border-radius: 0;
    }
    .dotted-box {
      width: 100px;
      height: 100px;
      border: 2px dotted #ccc;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 10px 0;
    }
    .nav-tabs{
      display: flex;
      flex-wrap: nowrap;
      justify-content: space-between;
    }

    .plus-box {
      font-size: 22px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 10px 0;
      width: 30px;
    }

    .text-box {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 10px 0;
      padding-left: 15px;
    }

    .center-container-box {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: flex-start;
      flex-wrap: nowrap;
    }
    .tab-pane{
      background-color: #e6e6e6;
      position: relative;
    }
    .carousel-item {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    .product-slider {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding: 10px 0;
    gap: 10px;
  }

  .product-card {
    flex: 0 0 150px;
    max-width: 150px;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 10px;
    
  }
  /* .product-card:first-of-type,
  .product-card:first-child {
    margin-left: 50px;
  }

  .product-card:last-of-type,
  .product-card:last-child {
    margin-right: 50px;
  } */

  .product-card p{
    margin-top: 3px;
    margin-bottom: 5px;
  }

  .product-image {
    width: 100%;
    height: 160px;
    object-fit: cover;
    /* display: inline-block; */
  }

  .scroll-btn {
    background-color: transparent;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    position: absolute;
    top: 35%;
    opacity: 0.2;
  }
  
  .scroll-btn.prev-btn{
    left: 0;
  }
  .scroll-btn.next-btn{
    right: 0;
  }

  .scroll-container {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  .play-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #5a5656;
    padding: 7px 5px 7px 10px;
    cursor: pointer;
    position: relative;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .play-btn::before {
      content: '';
      display: block;
      width: 0;
      height: 0;
      border-left: 15px solid #5a5656;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      transition: border-color 0.3s ease;
  }
  .prev-btn .play-btn{
    transform: rotate(180deg);
  }

  .scroll-container:hover .scroll-btn{
    opacity: 1;
  }

  </style>

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


    <?php echo breadCrumb($app_path, "Gourmet Gift Baskets", 2, "gift-baskets.php", "Gift Baskets"); ?>

    <section id="" class="mb-5">
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
                      src="assets/images/products/deluxe-traditions/gourmet-basket.jpg"
                      alt="Our gourmet baskets are filled with cheeses, gourmet foods, snacks and much more"
                      onmouseover="myFunction(this)" />

                    <img
                      class="img-responsive"
                      src="assets/images/products/deluxe-traditions/gourmet-gift-basket.jpg"
                      alt="Gourmet gift box is offered with Lancaster, PA gourmet foods, cheeses, chocolates and more with delivery"
                      onmouseover="myFunction(this)" />

                    <img
                      class="img-responsive"
                      src="assets/images/products/deluxe-traditions/gourmet-gift-baskets.jpg"
                      alt="Gourmet gift box is offered with Lancaster, PA gourmet foods, cheeses, chocolates and more with delivery"
                      onmouseover="myFunction(this)" />



                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="main-images">
                    <!--Main images -->

                    <img src="assets/images/products/deluxe-traditions/gourmet-basket.jpg" alt="Our Gourmet Gift Baskets are complete with cheeses, chocolates, gourmet foods, and more from Lancaster PA" id="image_box" class="img-responsive" />

                    <!--Main images -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <form method="post">

                <p class="prod-id">Product ID: 013</p>
                <h3 class="prod-title">"Deluxe Traditions" Gourmet Gift Baskets</h3>
                <span class="price">
                  <span class="prod-price" id='price_per_item'>$89.50</span>
                  <span class="prod-stars">
                    <svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path>
                    </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path>
                    </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path>
                    </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path>
                    </svg><svg class="es-star" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.88552 5.85364H0L4.94427 9.72919L8 12.1244L12.9443 16L11.0557 9.72919L16 5.85364H9.88552Z" fill="#7a6e58"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.53216 5.2863L8.13765 0L9.74314 5.2863H6.53216ZM4.92025 10.5937L7.5658 12.6674L3.27832 16L4.92025 10.5937Z" fill="#7a6e58"></path>
                    </svg>
                  </span>
                  <span class="prod-seperator"> | </span>
                  <span class="prod-rev-nos">22 Reviews</span>
                  <span class="prod-seperator"> | </span>
                  <!-- Add a 'Read more' link pointing to the Elfsight widget -->
                  <a href="#elfsight-reviews" class="read-more-link">Read reviews</a>
                </span>
  
                <p class="prod-copy">Make Your Selections</p>
    
                <table id="main_tbl">

                  <tr>
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

                  </tr>

                </table>

                <!--NEW::Code Start Here-->
                <div>
                  <h5 class="customization-head">Choose Your Customization Below </h5>

                  <!-- Tabs Navigation -->
                  <ul class="nav nav-tabs pd-tabs border-0" id="prodTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active border-0" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab">
                        <img id="tab1-icon" src="<?=$app_path;?>assets/images/tag-active.png" />
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab">
                        <img id="tab2-icon" src="<?=$app_path;?>assets/images/click.png" />
                      </a>
                    </li>
                  </ul>

                  <!-- Tabs Content -->
                  <div class="tab-content" id="prodTabContent">

                    <!-- First Tab -->
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="services">

                          <div class="custom-options-services">

                            <div class="row justify-content-center">

                              <div class="col-sm-new-2 mb-new">

                                <label for="birthday">

                                  <input type="checkbox" class="" id="tag" value="bithday">

                                  <img src="assets/images/tags/birthday4.png" alt="gourmet gift baskets filled with cheeses, baked goods, and chocolates" class="circle ">

                                </label>

                              </div>

                              <div class="col-sm-new-2 mb-new">

                                <label for="tag">

                                  <input type="checkbox" id="Sympathy" class="" value="Sympathy">



                                  <img src="assets/images/tags/sympathy3.png" alt="our gourmet gift baskets are loved by everyone and come from Lancaster, PA well known for delicious baked goods" class="circle ">

                                </label>

                              </div>

                              <div class="col-sm-new-2 mb-new">

                                <label for="custom-front">

                                  <input type="checkbox" id="custom-front" class="" value="Get Well">

                                  <img src="assets/images/tags/get-well5.png" alt="get well gourmet gift baskets from Lancaster PA" class="circle ">

                                </label>

                              </div>

                              <div class="col-sm-new-2 mb-new">

                                <label for="Tag">

                                  <input type="checkbox" id="Tag" class="" value="Thank You">

                                  <img src="assets/images/tags/thank-you2.png" alt="thank you gourmet gift baskets filled with chocolates, cheeses and more that we offer delivery on" class="circle ">

                                </label>

                              </div>


                              <div class="col-sm-new-2 mb-new">

                                <label for="tag">

                                  <input type="checkbox" id="tag" class="" value="Congratulations">

                                  <img src="assets/images/tags/congrats3.png" alt="our congratulations gourmet gift baskets offered from Lancaster PA can be delivered and filled with chocolates, baked goods and so much more" class="circle ">

                                </label>

                              </div>


                              <div class="col-sm-new-2 mb-new">

                                <label for="balloon">

                                  <input type="checkbox" id="Tag" class="" value="Anniversary">



                                  <img src="assets/images/tags/happy-anniversary.png" alt="anniversary gourmet gift baskets with gourmet cheeses, chocolates, blueberry bread and more" class="circle ">

                                </label>

                              </div>

                              <div class="col-sm-new-2 mb-new">

                                <label for="tag">

                                  <input type="checkbox" id="tag" class="" value="thinking of you">

                                  <img src="assets/images/tags/thinking-of-you.png" alt="thinking of you gourmet gift baskets from Dutch country in Lancaster PA" class="circle ">

                                </label>

                              </div>


                              <div class="col-sm-new-2 mb-new">

                                <label for="tag">

                                  <input type="checkbox" id="tag" class="" value="Fathers Day">

                                  <img src="tags/fathersday.png" alt="Congratulations graduate custom gift baskets delicious foods and baked goods, cheeses and more from Lancaster PA" class="circle ">

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

                        </div>
                    </div>

                    <!-- Second Tab -->
                    <div class="tab-pane fade" id="tab2" role="tabpanel">

                      <div class="scroll-container">

                        <button class="scroll-btn prev-btn">
                          <div class="play-btn"></div>
                        </button>

                        <div class="product-slider">
                          
                          <div class="product-card" data-pc-pid="1">
                            <img src="<?=$app_path;?>assets/images/products/deluxe-traditions/gourmet-basket.jpg" alt="Product 1" class="product-image product-select">
                            <p class="pc-pname">Product 1</p>
                            <p class="pc-pprice">$10</p>
                            <button type="button" class="btn btn-dark add-btn">Add + </button>
                          </div>

                          <div class="product-card" data-pc-pid="2">
                            <img src="<?=$app_path;?>assets/images/products/deluxe-traditions/gourmet-gift-basket.jpg" alt="Product 2" class="product-image product-select">
                            <p class="pc-pname">Product 2</p>
                            <p class="pc-pprice">$20</p>
                            <button type="button" class="btn btn-dark add-btn">Add + </button>
                          </div>

                          <div class="product-card" data-pc-pid="3">
                            <img src="<?=$app_path;?>assets/images/products/deluxe-traditions/gourmet-gift-baskets.jpg" alt="Product 3" class="product-image product-select">
                            <p class="pc-pname">Product 3</p>
                            <p class="pc-pprice">$30</p>
                            <button type="button" class="btn btn-dark add-btn">Add + </button>
                          </div>

                          <div class="product-card" data-pc-pid="4">
                            <img src="<?=$app_path;?>assets/images/products/chocolate-lovers/chocolate-lovers-gift-basket.jpg" alt="Product 4" class="product-image product-select">
                            <p class="pc-pname">Product 4</p>
                            <p class="pc-pprice">$25</p>
                            <button type="button" class="btn btn-dark add-btn">Add + </button>
                          </div>

                          <div class="product-card" data-pc-pid="5">
                            <img src="<?=$app_path;?>assets/images/products/bakers-special/food-basket.jpg" alt="Product 5" class="product-image product-select">
                            <p class="pc-pname">Product 5</p>
                            <p class="pc-pprice">$35</p>
                            <button type="button" class="btn btn-dark add-btn">Add + </button>
                          </div>

                          <div class="product-card" data-pc-pid="6">
                            <img src="<?=$app_path;?>assets/images/products/traditions/food-basket.jpg" alt="Product 6" class="product-image product-select">
                            <p class="pc-pname">Product 6</p>
                            <p class="pc-pprice">$22</p>
                            <button type="button" class="btn btn-dark add-btn">Add + </button>
                          </div>
                          
                        </div>

                        <button class="scroll-btn next-btn">
                          <div class="play-btn"></div>
                        </button>

                      </div>    
                      
                      <!-- Dotted Boxes for Selected Products -->
                      <div class="container center-container-box">
                        <div class="plus-box">+</div>

                        <div id="selected-product-1" class="dotted-box"></div>
                        <input type="text" id="singleitem1" name="singleitem1" class="singleitemfield" />

                        <div class="plus-box">+</div>

                        <div id="selected-product-2" class="dotted-box"></div>
                        <input type="text" id="singleitem2" name="singleitem2" class="singleitemfield" />

                        <div class="text-box">Your Selection (<span class="selc_qty">0</span>&nbsp;of upto 2 extras)</div>
                      </div>

                    </div>

                  </div>

                </div>
                <!--NEW::Code End Here-->

                <div class="form-qty-btn">
                  <div class="form-qty-left">
                    <span class="prod-form-qty">QTY </span> <input id="productQty" class="form-qty-input" type="number" step="1" min="1" max="1000" value="1" name="qty">
                  </div>
                  <div class="form-qty-right">
                    <button type="submit" id="addToCartBtn">Add to Cart</button>
                  </div>
                </div>

              </form>
            </div>
            <div class="col-sm-12 mt-5">
              <h2 class="cgb-head">Content for your Gourmet Gift Baskets</h2>
              <div class="cgb-copy">
                <div class="cgb-copy-left">



                  <p>* 2 Gourmet Cheeses</p>
                  <p>* Blueberry Bread (Choice of Flavor)</p>
                  <p>* Fudge (Choice of Flavor)</p>
                  <p>* Gourmet Mustards</p>
                  <p>* Whoopie Pie</p>
                </div>

                <div class="cgb-copy-right">
                  <p>* Peanut Butter Crackers</p>
                  <p>* Emma's Famous Popcorn</p>
                  <p>* Emma's Lancaster Party Mix</p>
                  <p>* Martins Pretzels</p>
                  <p>* Customization</p>

                </div>
              </div>

              <h2 class="cgb-subhead">Gourmet Gift Baskets</h2>
              <p class="cgb-subcopy">Discover the perfect way to delight your loved ones with our gourmet gift baskets, filled with the finest products from Lancaster, PA. These baskets are ideal for any occasion, from birthdays and anniversaries to sympathy, congratulations, thank you, and more. Each basket includes a selection of gourmet cheeses, baked goods like whoopie pies and blueberry breads, and classic apple and shoo fly pies.

                Our gourmet gift baskets also feature an assortment of delicious chocolates and jams, all loved by everyone. Each product is chosen for its exceptional quality and rich flavors, ensuring a delightful experience with every bite.</p>

              <p class="cgb-subcopy">These gourmet gift baskets are designed to cater to a variety of occasions, making them a versatile gift choice. Whether you’re celebrating a birthday, expressing sympathy, offering congratulations, or saying thank you, our baskets provide a thoughtful and personalized way to show you care.

                Customization is key to our offerings. We tailor each gourmet gift basket to the specific occasion, ensuring that your gift is not only delicious but also meaningful. You can choose from a variety of themes and combinations to suit the recipient’s preferences and the occasion’s requirements.</p>

              <p class="cgb-subcopy">Our gourmet gift baskets are more than just a collection of treats; they are a way to convey your appreciation and thoughtfulness. By selecting the finest products from Lancaster, PA, we ensure that each basket is a true representation of quality and care.

                Explore our collection of gourmet gift baskets today and find the perfect gift to make any occasion special. With our carefully curated selections and commitment to quality, our gourmet gift baskets are sure to impress and bring joy to any recipient. Indulge in the rich flavors and high-quality products that make our baskets a standout choice for any celebration.</p>








              </p>
            </div>
          </div>
          <div class="cgb-copy">
            <span>
              <h3 style="font-weight: bold; margin: 55px 0; text-align: center;">Gift Baskets from Lancaster, PA</h3>
            </span>
            <div class="swiper-wrapper-container">
              <div class="swiper-outer-container">
                <div class="swiper-container">
                  <div class="swiper-wrapper">

                    <!-- Slide 1 - Chocolate Gift Baskets -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/chocolate-gift-baskets.php">
                        <img src="https://padutchbaskets.com/assets/images/products/chocolate-lovers/chocolate-lovers-gift-basket.jpg" alt="Our chocolate gift baskets are filled with Lancaster PA Dutch chocolates, fudge and delicious baked goods loved by everyone">
                        <h5>Chocolate Gift Baskets</h5>
                        <span id="swiper-price">$74.50</span>
                      </a>
                    </div>

                    <!-- Slide 2 - Bakers Special Food Basket -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/food-basket.php">
                        <img src="https://padutchbaskets.com/assets/images/products/bakers-special/food-basket.jpg" alt="Our Bakers Special food basket offers the most delicious baked goods from the Amish in Lancaster, PA well known for their ability to make the best baked goods">
                        <h5>"Bakers Special" Food Basket</h5>
                        <span id="swiper-price">$76.50</span>
                      </a>
                    </div>

                    <!-- Slide 3 - Gourmet Gift Baskets -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/gourmet-gift-baskets.php">
                        <img src="https://padutchbaskets.com/assets/images/products/deluxe-traditions/gourmet-basket.jpg" alt="With our gourmet gift baskets we offer gourmet cheeses, baked goods, chocolates, fudge and more that we deliver anywhere in the country">
                        <h5>Gourmet Gift Baskets</h5>
                        <span id="swiper-price">$87.50</span>
                      </a>
                    </div>

                    <!-- Slide 4 - Traditions Food Gift Baskets -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/food-gift-baskets.php">
                        <img src="https://padutchbaskets.com/assets/images/products/traditions/food-basket.jpg" alt="Our Traditions food basket is one of our very popular gift baskets offering whoopie pies, baked goods, brittle and more that everyone loves">
                        <h5>"Traditions" Food Gift Baskets</h5>
                        <span id="swiper-price">$79.50</span>
                      </a>
                    </div>

                    <!-- Slide 5 - Gift Baskets Near Me -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/gift-baskets-near-me.php">
                        <img src="https://padutchbaskets.com/assets/images/products/basket-of-treats/basket.jpg" alt="When looking for gift baskets near me, our gift baskets from Lancaster, PA can be delivered anywhere in the country">
                        <h5>Gift Baskets Near Me - Lancaster Treats</h5>
                        <span id="swiper-price">$59.50</span>
                      </a>
                    </div>

                    <!-- Slide 6 - Savory Flavors Best Gift Baskets -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/best-gift-baskets.php">
                        <img src="https://padutchbaskets.com/assets/images/products/savory-flavors/gift-basket-online.jpg" alt="Our Savory Flavors best gift baskets is our most popular with baked pies, blueberry bread, brittle, fudge, apple pie and so much more">
                        <h5>"Savory Flavors" Best Gift Baskets</h5>
                        <span id="swiper-price">$119.50</span>
                      </a>
                    </div>

                    <!-- Slide 7 - Dutch Baked Goods Gift Delivery -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/gift-delivery.php">
                        <img src="https://padutchbaskets.com/assets/images/products/dutch-baked-goods/customized-basket.jpg" alt="When looking for the perfect gift delivery consider our Dutch Baked Goods from Lancaster PA that we guarantee they will love and appreciate">
                        <h5>"Dutch Baked Goods" Gift Delivery</h5>
                        <span id="swiper-price">$72.50</span>
                      </a>
                    </div>

                    <!-- Slide 8 - Lancaster Favorites Custom Gift Baskets -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/custom-gift-baskets.php">
                        <img src="https://padutchbaskets.com/assets/images/products/lancaster-favorites/custom-gift-baskets.jpg" alt="We are happy to offer custom gift baskets with our PA Dutch baked goods. Choose certain products and customize to the occasion">
                        <h5>"Lancaster Favorites" Custom Gift Baskets</h5>
                        <span id="swiper-price">$89.50</span>
                      </a>
                    </div>

                    <!-- Slide 9 - Celebrations Gift Basket Delivery -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/gift-basket-delivery.php">
                        <img src="https://padutchbaskets.com/assets/images/products/celebrations/gift-basket-delivery.jpg" alt="We are happy to offer our gift basket delivery with gourmet foods, cheeses, baked goods and chocolates that we can ship to most states in the country">
                        <h5>"Celebrations" Gift Basket Delivery</h5>
                        <span id="swiper-price">$54.50</span>
                      </a>
                    </div>

                    <!-- Slide 10 - Bakers Choice Gift Basket Ideas -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/gift-basket-ideas.php">
                        <img src="https://padutchbaskets.com/assets/images/products/bakers-choice/deluxe-gift-basket.jpg" alt="The Bakers Choice gift basket ideas has a great variety of gourmet foods thare are loved and appreciated by those receiving them">
                        <h5>"Bakers Choice" Gift Basket Ideas</h5>
                        <span id="swiper-price">$87.50</span>
                      </a>
                    </div>

                    <!-- Slide 11 - Gourmet Snack Basket -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/gourmet-snack-basket.php">
                        <img src="https://padutchbaskets.com/assets/images/products/dutch-traditions/food-gift-ideas.jpg" alt="The gourmet snack basket won't last very long with these baked goods from Lancaster, PA that are loved worldwide">
                        <h5>Gourmet Snack Basket</h5>
                        <span id="swiper-price">$89.50</span>
                      </a>
                    </div>

                    <!-- Slide 12 - Unique Gift Baskets -->
                    <div class="swiper-slide">
                      <a href="https://padutchbaskets.com/unique-gift-baskets.php">
                        <img src="https://padutchbaskets.com/assets/images/products/good-ole-treats/unique-gift-baskets.jpg" alt="Our very unique gift baskets have rave reviews from those receiving our PA Dutch baked goods, gourmet foods, chocolates and more that we deliver">
                        <h5>Unique Gift Baskets</h5>
                        <span id="swiper-price">$79.50</span>
                      </a>
                    </div>

                  </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- Reviews Widget Elfsight -->
    <div id="elfsight-reviews" class="flex-container">
      <script src="https://static.elfsight.com/platform/platform.js" async></script>
      <div class="elfsight-app-8f131827-4530-4c69-aa1f-5e9efdeac4a4" data-elfsight-app-lazy></div>
    </div>
    <!-- do not remove this div, it will be using to pass data -->
    <div class="product-metadata"
      data-product-id="product-013"
      data-product-name="Gourmet Gift Baskets"
      data-product-price-regular="89.50"
      data-product-shipping-price="19.75"
      data-product-flavor-pie="yes"
      data-product-flavor-bread="yes"
      data-product-promo=""
      data-product-card-msg=""
      data-product-customization=""
      data-product-qty=""
      data-product-cart_img="gourmet-basket.jpg"></div>
    <!-- image to be display on cart page must be in root images folder   -->

    <?php
    include("includes/footer.php");
    ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Product",
        "name": "\"Deluxe Traditions\" Gourmet Gift Baskets",
        "image": "https://padutchbaskets.com/assets/images/products/deluxe-traditions/gourmet-basket.jpg",
        "description": "The \"Deluxe Traditions\" Gourmet Gift Basket is a premium collection featuring Lancaster, PA Dutch specialties including gourmet cheeses, blueberry bread, fudge, gourmet mustards, whoopie pie, peanut butter crackers, Emma's famous popcorn, Lancaster party mix, and Martin's pretzels. Perfect for any occasion, this gourmet basket is sure to delight and impress.",
        "sku": "013-DTGB",
        "mpn": "013-DTGB",
        "brand": {
          "@type": "Brand",
          "name": "PA Dutch Baskets"
        },
        "offers": {
          "@type": "Offer",
          "priceCurrency": "USD",
          "price": "89.50",
          "itemCondition": "https://schema.org/NewCondition",
          "availability": "https://schema.org/InStock",
          "seller": {
            "@type": "Organization",
            "name": "PA Dutch Baskets"
          }
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "5",
          "reviewCount": "22"
        },
        "review": [{
            "@type": "Review",
            "author": "Karen Smith",
            "datePublished": "2024-09-25",
            "description": "The Deluxe Traditions Gourmet Gift Basket exceeded our expectations. The cheeses and fudge were absolutely amazing!",
            "name": "Exceeded Expectations",
            "reviewRating": {
              "@type": "Rating",
              "ratingValue": "5"
            }
          },
          {
            "@type": "Review",
            "author": "Tom Anderson",
            "datePublished": "2024-10-12",
            "description": "A perfect gift for any occasion. The blueberry bread and whoopie pie were a hit with everyone!",
            "name": "Perfect for Any Occasion",
            "reviewRating": {
              "@type": "Rating",
              "ratingValue": "5"
            }
          }
        ],
        "additionalType": "https://schema.org/GiftBasket",
        "category": "Gourmet Gift Baskets",
        "isRelatedTo": [{
            "@type": "Product",
            "name": "\"Savory Flavors\" Best Gift Baskets",
            "url": "https://padutchbaskets.com/best-gift-baskets.php",
            "image": "https://padutchbaskets.com/assets/images/products/savory-flavors/gift-basket-online.jpg"
          },
          {
            "@type": "Product",
            "name": "\"Lancaster Favorites\" Custom Gift Baskets",
            "url": "https://padutchbaskets.com/custom-gift-baskets.php",
            "image": "https://padutchbaskets.com/assets/images/products/lancaster-favorites/custom-gift-baskets.jpg"
          }
        ]
      }
    </script>

    <script>
      $(document).ready(function() {
        var per_amount = $('#price_per_item').html();
        var shipping_charges = $('#shipping_charges').html();
        per_amount = parseFloat(shipping_charges) + parseFloat(per_amount);
        $("#total_amount").html(per_amount);
      });

      function myFunction(smallImg) {
        var fullImg = document.getElementById("image_box");
        fullImg.src = smallImg.src
      }
    </script>
    <script>
      var product_details = "Gourmet Gift Baskets - Deluxe Traditions <br/>";
    </script>
    <script src="assets/js/paypal.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=AQ4eIiXQNa2IzhEjEjLZ-HDbwt1GCalO88GsMnnCgfRnOmpoOD8wyhkGclLrgEriqgzie2zoVHl22ce1"></script>
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script type="text/javascript">
      function toggleMenu() {
        var x = document.getElementById("menu");
        if (x.className === "topnav") {
          x.className += " visible";
          console.log("open");
        } else {
          x.className = "topnav";
          console.log("closed");
        }
      }

      var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        // Add responsive breakpoints here
        breakpoints: {
          480: {
            slidesPerView: 1, // Show 1 slide on screens smaller than 640px
            spaceBetween: 10
          },
          768: {
            slidesPerView: 2, // Show 2 slides on screens between 640px and 768px
            spaceBetween: 20
          },
          1024: {
            slidesPerView: 3, // Show 3 slides on screens larger than 1024px
            spaceBetween: 30
          }
        }
      });
    </script>
    <script type="text/javascript">
      function toggleMenu() {
        var x = document.getElementById("menu");
        if (x.className === "topnav") {
          x.className += " visible";
          console.log("open");
        } else {
          x.className = "topnav";
          console.log("closed");
        }
      }
    </script>
    <script type="text/javascript" charset="utf-8">
      finished();
    </script>