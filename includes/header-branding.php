<section class="branding-section container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-md-4 d-flex align-items-center branding-left">
                <div class="branding-left-content">
                    <div class="blc-social">
                        <a href="#" class="d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                            </svg>
                        </a>
                        <a href="#" class="d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
                            </svg>
                        </a>
                        <a href="#" class="d-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path
                                    d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z" />
                            </svg>
                        </a>
                    </div>
                    <div class="blc-contact clearfix">
                        <div class="blcc-left">
                            <img src="<?=$app_path;?>assets/images/graphics/mobile.png" />
                        </div>
                        <div class="blcc-right clearfix">
                            <p class="blccr-1">717-368-3973</p>
                            <p class="blccr-2"><a href="mailto:info@padutchbaskets.com"><span>Email - </span>info@padutchbaskets.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-center branding-center">
                <a href="<?=$app_path;?>" class="d-inline-block">
                    <img src="<?=$app_path;?>assets/images/logo/logo.png" class="image-fluid" />
                </a>
            </div>

            <div class="col-md-4 d-flex align-items-center branding-right">
                <div class="branding-right-content">
                    <div class="brc-top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                        <span>Unlock Exclusive Offers</span>
                    </div>
                    <div class="brc-bottom">
                        <form class="clearfix" method="post" action="sendemail_exclusive_offers.php">
                            <input type="email" class="form-control brcf-field" name="email" id="exampleInputEmail1" placeholder="Your email address" value="">
                            <button type="submit" class="btn btn-primary brcf-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
