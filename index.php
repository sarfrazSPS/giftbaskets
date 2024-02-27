<?php include("includes/header.php"); ?>

<section id="productCats" class="product-cats">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 proc-left bg-light">
                    <h3>Product Categories</h3>
                    <div class="ui-accordion">
                        <div class="ui-accordion-item">
                            <a href="javascript:void(0);" class="ui-accordion-title">
                                <span>Occasion</span>
                            </a>
                            <div class="ui-accordion-content">
                                <ul class="category-selection">
                                    <li>
                                        <a href="#" class="acc-cs-link">All Gift Baskets <span>(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Birthday <span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Sympathy <span>(16)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Corporate <span>(28)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Get Well <span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Congratulations <span>(26)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Thank You <span>(1)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Anniversary <span>(13)</span></a>
                                    </li>
                                    <li>
                                        <a href="#" class="acc-cs-link">Employees <span>(8)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 proc-right">
                    <img src="<?=$app_path;?>assets/images/background/hero-new.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="OccasionSeciton" class="occs-section">
    <div class="container-fluid occss-bg">
        <div class="occssbg-overlay"></div>
        <div class="container occss-container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Shop for any Occassion</h2>
                    <div class="occss-content">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 occss-item">
                                <a href="#">
                                    <img src="<?=$app_path;?>assets/images/graphics/thankyou-full.png" />
                                    <p>Thank you</p>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 occss-item">
                                <a href="#">
                                    <img src="<?=$app_path;?>assets/images/graphics/birthday-full.png" />
                                    <p>Birthday</p>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 occss-item">
                                <a href="#">
                                    <img src="<?=$app_path;?>assets/images/graphics/sympathy-full.png" />
                                    <p>Sympathy</p>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 occss-item">
                                <a href="#">
                                    <img src="<?=$app_path;?>assets/images/graphics/getwell-full.png" />
                                    <p>Get Well</p>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 occss-item">
                                <a href="#">
                                    <img src="<?=$app_path;?>assets/images/graphics/business-full.png" />
                                    <p>Business</p>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-4 occss-item">
                                <a href="#">
                                    <img src="<?=$app_path;?>assets/images/graphics/congratulations-full.png" />
                                    <p>Congratulations</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <h4>Don’t see your occasion or event? Call us direct</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="CustomerFavourite" class="fav-section">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Customer's Favorites</h2>
                    <div class="favs-content">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-6 favs-col">
                                <div class="favs-img-holder">
                                    <img src="<?=$app_path;?>assets/images/products/1.png" />
                                </div>
                                <h5 class="favs-head">Cozy Winter Gift Box</h5>
                                <span class="favs-regular">
                                    $79.99
                                </span>
                                <span class="favs-sale">
                                    $45.99
                                </span>
                                <p class="favs-cat">Winter Sale!*</p>
                                <p class="favs-copy">$6 Standard Shipping</p>
                                <a href="javascript:void(0);" class="btn btn-primary favs-btn btn-data">View Details</a>
                                <!-- images must be on root path in the folder "images" -->
                                <div class="product-metadata" 
                                    data-product-id="product-01"
                                    data-product-name="product name is here"
                                    data-product-price-regular="$100"
                                    data-product-price-sale=""
                                    data-product-shipping-price="9.50"
                                    data-product-stars="5"
                                    data-product-reviews="76"
                                    data-product-flavor-pie="yes"
                                    data-product-flavor-bread="yes"
                                    data-product-image-1="custom-birthday-gifts-sm.jpg"
                                    data-product-image-2="celebrations-gift-basket.jpg"
                                    data-product-image-3="unique-birthday-gifts.jpg"
                                    data-product-image-4="birthday-chocolate-gift.jpg"
                                    ></div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-6 favs-col">
                                <div class="favs-img-holder">
                                    <img src="<?=$app_path;?>assets/images/products/2.png" />
                                </div>
                                <h5 class="favs-head">Cozy Winter Gift Box</h5>
                                <span class="favs-regular">
                                    $79.99
                                </span>
                                <span class="favs-sale">
                                    $45.99
                                </span>
                                <p class="favs-cat">Winter Sale!*</p>
                                <p class="favs-copy">$6 Standard Shipping</p>
                                <a href="javascript:void(0);" class="btn btn-primary favs-btn">View Details</a>
                                <!-- images must be on root path in the folder "images" -->
                                <div class="product-metadata" 
                                    data-product-id="product-02"
                                    data-product-name="product name is here"
                                    data-product-price-regular="$100"
                                    data-product-price-sale=""
                                    data-product-shipping-price="9.50"
                                    data-product-stars="5"
                                    data-product-reviews="76"
                                    data-product-flavor-pie="yes"
                                    data-product-flavor-bread="yes"
                                    data-product-image-1="custom-birthday-gifts-sm.jpg"
                                    data-product-image-2="celebrations-gift-basket.jpg"
                                    data-product-image-3="unique-birthday-gifts.jpg"
                                    data-product-image-4="birthday-chocolate-gift.jpg"
                                    ></div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-6 favs-col">
                                <div class="favs-img-holder">
                                    <img src="<?=$app_path;?>assets/images/products/3.png" />
                                </div>
                                <h5 class="favs-head">Cozy Winter Gift Box</h5>
                                <span class="favs-regular">
                                    $79.99
                                </span>
                                <span class="favs-sale">
                                    $45.99
                                </span>
                                <p class="favs-cat">Winter Sale!*</p>
                                <p class="favs-copy">$6 Standard Shipping</p>
                                <a href="javascript:void(0);" class="btn btn-primary favs-btn">View Details</a>
                                <!-- images must be on root path in the folder "images" -->
                                <div class="product-metadata" 
                                    data-product-id="product-033"
                                    data-product-name="product name is here"
                                    data-product-price-regular="$100"
                                    data-product-price-sale=""
                                    data-product-shipping-price="9.50"
                                    data-product-stars="5"
                                    data-product-reviews="76"
                                    data-product-flavor-pie="yes"
                                    data-product-flavor-bread="yes"
                                    data-product-image-1="custom-birthday-gifts-sm.jpg"
                                    data-product-image-2="celebrations-gift-basket.jpg"
                                    data-product-image-3="unique-birthday-gifts.jpg"
                                    data-product-image-4="birthday-chocolate-gift.jpg"
                                    ></div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-6 favs-col">
                                <div class="favs-img-holder">
                                    <img src="<?=$app_path;?>assets/images/products/4.png" />
                                </div>
                                <h5 class="favs-head">Cozy Winter Gift Box</h5>
                                <span class="favs-regular">
                                    $79.99
                                </span>
                                <span class="favs-sale">
                                    $45.99
                                </span>
                                <p class="favs-cat">Winter Sale!*</p>
                                <p class="favs-copy">$6 Standard Shipping</p>
                                <a href="javascript:void(0);" class="btn btn-primary favs-btn">View Details</a>
                                <!-- images must be on root path in the folder "images" -->
                                <div class="product-metadata" 
                                    data-product-id="product-045"
                                    data-product-name="product name is here"
                                    data-product-price-regular="$100"
                                    data-product-price-sale=""
                                    data-product-shipping-price="9.50"
                                    data-product-stars="5"
                                    data-product-reviews="76"
                                    data-product-flavor-pie="yes"
                                    data-product-flavor-bread="yes"
                                    data-product-image-1="custom-birthday-gifts-sm.jpg"
                                    data-product-image-2="celebrations-gift-basket.jpg"
                                    data-product-image-3="unique-birthday-gifts.jpg"
                                    data-product-image-4="birthday-chocolate-gift.jpg"
                                    ></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="GiftBoxesList" class="gift-list-section">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Corporate Customized Gift Boxes</h2>
                    <div class="gls-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 gls-col">
                                <div class="gls-copy">
                                    <h5>Strengthen Relationships</h5>
                                    <ul>
                                        <li>Employee Retention</li>
                                        <li>Employee Loyalty</li>
                                        <li>Employee's Feel Valued</li>
                                        <li>Personalized Message Card</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 gls-col">
                                <div class="gls-copy">
                                    <h5>Any Occasion</h5>
                                    <ul>
                                        <li>Birthdays</li>
                                        <li>Get Well</li>
                                        <li>Congratulaitons</li>
                                        <li>Greate Job</li>
                                        <li>Sympathy</li>
                                        <li>Holiday's & More</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 gls-col">
                                <div class="gls-copy">
                                    <h5>Brand your Business</h5>
                                    <p>We are happy to offer a selection of both gift boxes and baskets. Many businesses
                                        choose to have their gift boxes branded to their business</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION Send Employee’s & Clients a branded gift from your business START-->
<section id="employee-client" class="pt-5 empclient">
    <div class="container-fluid testimonial-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Send Employee’s & Clients a branded gift from your business</h2>
                </div>
            </div>
            <div class="row mt-4 gifts-row">
                <div class="col-md-3 col-sm-5 col-5 text-center">
                    <div class="emp-img px-2">
                        <img src="<?= $app_path ?>assets/images/gifts/11.png" alt="" class="" />
                    </div>
                    <!-- <div class="gift-box d-flex align-items-center justify-content-center">
                        <a href="#" class="mb-0">Get it Now</a>
                    </div> -->
                </div>
                <div class="col-md-3 col-sm-5 col-5 text-center">
                    <div class="emp-img px-2">
                        <img src="<?= $app_path ?>assets/images/gifts/22.png" alt="" class="" />
                    </div>
                    <!-- <div class="gift-box d-flex align-items-center justify-content-center">
                        <a href="#" class="mb-0">Get it Now</a>
                    </div> -->
                </div>
                <div class="col-md-3 col-sm-5 col-5 text-center">
                    <div class="emp-img px-2">
                        <img src="<?= $app_path ?>assets/images/gifts/33.png" alt="" class="" />
                    </div>
                    <!-- <div class="gift-box d-flex align-items-center justify-content-center">
                        <a href="#" class="mb-0">Get it Now</a>
                    </div> -->
                </div>
                <div class="col-md-3 col-sm-5 col-5 text-center">
                    <div class="emp-img px-2">
                        <img src="<?= $app_path ?>assets/images/gifts/44.png" alt="" class="" />
                    </div>
                    <!-- <div class="gift-box d-flex align-items-center justify-content-center">
                        <a href="#" class="mb-0">Get it Now</a>
                    </div> -->
                </div>

                <div class="col-md-10 text-center m-auto gb-btn-outer">
                    <div class="gift-box d-flex align-items-center justify-content-center gb-btn-inner">
                        <a href="#" class="mb-0">Get it Now</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- SECTION Send Employee’s & Clients a branded gift from your business END-->
<!-- SECTION PA Dutch Gourmet Foods & Baked goods START -->
<section id="dutch-gourmet" class="pt-5 foods-section">
    <div class="container-fluid testimonial-head">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>PA Dutch Gourmet Foods & Baked goods</h2>
                    <div class="w-86 m-widthauto mt-3">
                        <p>Lancaster, PA is well known around the globe for the best gourmet foods,
                            cheeses, chocolates,
                            and
                            baked goods found anywhere. Our gift baskets are filled with the most
                            delicious treats that
                            are
                            loved by everyone. </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5 food-type-row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 ps-1 pe-1 food-div1 position-relative">
                    <img class="w-100 bgimg-bg" src="<?= $app_path ?>assets/images/background/111.png" alt="" />
                    <h2 class="text-img mt-4 text-center w-100 position-absolute">Gourmet Foods</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 ps-1 pe-1 food-div2 position-relative">
                    <div class="px-3 bg-img bgimg-pad text-center ">
                        <img src="<?= $app_path ?>assets/images/background/222.png" alt=""
                            class="img-dutch-gourmet justify-content-center align-items-center" />
                        <p class="text-white mt-3">We are happy to offer Amish gourmet
                            foods, cheeses, and baked
                            goods
                            from lancaster, PA.
                        </p>
                        <p class="text-white mt-3">We deliver to most of the United States
                            while offering customization for any
                            event or occasion,</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 ps-1 pe-1 food-div3 position-relative">
                    <img class="w-100 bgimg-bg" src="<?= $app_path ?>assets/images/background/333.png" alt="" />
                    <h2 class="text-img mt-4 text-center w-100 position-absolute">Baked Foods</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION PA Dutch Gourmet Foods & Baked goods END -->
<!-- SECTION TESTIMONIALS START -->
<section id="testimonials" class="pt-5 pb-5 testimonials-section">
    <div class="container-fluid testimonial-head">
        <div class="container">
            <div class="row text-center ">
                <div class="col-md-12 mb-5">
                    <h2>PA Dutch Gift Baskets</h2>
                    <div class="d-flex justify-content-center testimonial-top">
                        <h5>5.0rating of 76 reviews</h5>
                        <div class="ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                            </svg>

                        </div>
                    </div>

                </div>

                <div id="slider-sh5" class="carousel slide slider-sheds-common" data-bs-interval="3000">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-lg-6 col-md-6 px-2">
                                <div class="testimonial">
                                    <h3 class="text-white">Wonderful Gift Basket</h3>
                                    <P class="text-white">
                                        Thank You so much for the details in
                                        putting this delicious gift basket together. It was loved by my family ”
                                    </P>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <div class="d-flex flex-row align-items-center mt-3">
                                        <img src="https://i.imgur.com/G1pXs7D.jpg" width="50" class="rounded-circle">
                                        <div class="d-flex flex-column ms-3">
                                            <h4 class="text-white mb-0">Rick</h4>
                                            <span class="text-white">2 months ago</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-6 col-md-6 px-2">
                                <div class="testimonial">
                                    <h3 class="text-white">Wonderful Gift Basket</h3>
                                    <P class="text-white">
                                        Thank You so much for the details in
                                        putting this delicious gift basket together. It was loved by my family ”
                                    </P>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <div class="d-flex flex-row align-items-center mt-3">
                                        <img src="https://i.imgur.com/G1pXs7D.jpg" width="50" class="rounded-circle">
                                        <div class="d-flex flex-column ms-3">
                                            <h4 class="text-white mb-0">Rick</h4>
                                            <span class="text-white">2 months ago</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-lg-6 col-md-6 px-2">
                                <div class="testimonial">
                                    <h3 class="text-white">Wonderful Gift Basket</h3>
                                    <P class="text-white">
                                        Thank You so much for the details in
                                        putting this delicious gift basket together. It was loved by my family ”
                                    </P>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path
                                            d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    <div class="d-flex flex-row align-items-center mt-3">
                                        <img src="https://i.imgur.com/G1pXs7D.jpg" width="50" class="rounded-circle">
                                        <div class="d-flex flex-column ms-3">
                                            <h4 class="text-white mb-0">Rick</h4>
                                            <span class="text-white">2 months ago</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#slider-sh5" role="button"
                        data-bs-slide="prev">
                        <span class="cc-prev-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                            </svg>
                        </span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#slider-sh5" role="button"
                        data-bs-slide="next">
                        <span class="cc-next-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                            </svg>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="">
    <div class="container-fluid testimonial-head">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="guaranty-text">100% SATISFACTION GUARANTEED</h2>
                </div>
            </div>
        </div>
</section>
<!-- SECTION TESTIMONIALS END -->
<?php
include("includes/footer.php");
?>

<script type="text/javascript">
$(document).ready(function() {

    if ($(".slider-sheds-common .carousel .carousel-item")) {
        showbpkSlider();
    }

    moveElements();

    // $(".navbar-toggler").click(function(){
    //     $('body').toggleClass('mobile-menu-visible');
    //     $('.navbar-toggler').toggleClass('navbar-toggler-icon-close');
    //     $('#navbarIcon').toggleClass('navbar-toggler-icon');
    //     $('.navbar-cross').toggleClass('d-none');
    //     $('.navbar').toggleClass("navbar-content");
    // });

    $(".navbar-toggler").click(function(){
        $('body').toggleClass('mobile-menu-visible');
        //$('.navbar-toggler').toggleClass('navbar-toggler-icon-close');
        $('#navbarIcon').toggleClass('navbar-toggler-icon');
        $('.navbar-cross').toggleClass('d-none');
        $('.navbar').toggleClass("navbar-content");
        $('#navbarNav').toggleClass("navbarNavCustom");
    });


});

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

function showbpkSlider() {
    
    if ($(window).width() < (768)) {
        setbpkSlider(1);
    } else {
        setbpkSlider(2);
    }
}

function setbpkSlider($minSlides) {
    let items = document.querySelectorAll(".slider-sheds-common .carousel-item");

    items.forEach((el) => {
        const minPerSlide = $minSlides
        let next = el.nextElementSibling;
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                next = items[0]
            }
            let cloneChild = next.cloneNode(true);
            el.appendChild(cloneChild.children[0]);
            next = next.nextElementSibling;
        }
    });
}
</script>