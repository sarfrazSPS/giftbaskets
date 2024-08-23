<?php include("includes/header.php"); ?>
<style>
    .img-shaddow {
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }
</style>
<?php echo breadCrumb($app_path, "Contact us");?>
<section id="contactus" class="contactus-page contactus">
    <div class="container-fluid">
        <div class="container">
            <div class="row auto-clear">
                <h1 class="text-center">Contact us</h1>
                <p>We want to answer any questions you have as well as hearing any suggestions about the addition of products to our baskets. You may call us at the number below, email us, or complete the form. We will get back to you within one business day.</p>
                <div class="col-md-6 col-sm-12 d-flex align-items-stretch">
                    <img src="images/ccc.webp" class="img-fluid img-shaddow" />
                </div>
                <div class="col-md-6 col-sm-12 contactus_right">
                    <h3>Send Us A Message</h3>
                    <form id="bpkcntform" class="bpk-form needs-validation" action="sendemail_contactus.php" method="POST" novalidate>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" name="contact_name" id="contact_name" placeholder="Name*" class="form-control brcf-field" value="" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" name="contact_email" id="contact_email" placeholder="Email*" class="form-control brcf-field" value="" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="tel" name="contact_phone" id="contact_phone" placeholder="Phone Number*" class="form-control brcf-field" value="" maxlength="200" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea placeholder="Message*" class="form-control" name="contact_message" id="contact_message" rows="5" maxlength="1000" value="" required></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z" />
                                </svg>
                            </div>
                        </div>

                        <button type="submit" name="contactusnow" id="contactusnow" class="btn btn-secondary form-btn">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<?php
include("includes/footer.php");
?>