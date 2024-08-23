<?php include("includes/variables.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About us | PA Dutch Baskets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include($root_path . "includes/header-links.php"); ?>

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

    <?php echo breadCrumb($app_path, "About us");?>

<section id="aboutus" class="aboutus-page">
    <div class="container-fluid">
        <div class="container">
            <div class="row aboutus-row">
                <div class="col-lg-5 col-md-6 col-sm-12 about-left">
                    <div class="about-img-holder">
                        <img src="images/michellenew.jpg" class="img-fluid">
                       
                        
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 about-right">
                    <h1>About us</h1>
                    <p>Hi my name is Michelle and I am the owner of PA Dutch Baskets. I love our gift basket company because in these difficult times, it offers a bit of happiness to both those who are giving and receiving them.</p>
                    <p>We are very thankful for all the positive reviews from our customers. Most importantly is the impact they have on so many lives. This of course is why we started our business</p>
                    <p>We have spent a lot of time with business owners that were looking to add a branded gift for their business. These branded gift boxes offer the business design, logo, and a personalization we offer for any occasion for employees and clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="container">
        <section class="main-bkgd">
            <section class="main-content">
                <div class="embedsocial-hashtag" data-ref="38be55d2c920acaa051cd7861e519fadfcc3349d"></div> <script> (function(d, s, id) { var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js); }(document, "script", "EmbedSocialHashtagScript")); </script>
            </section>
        </section>
    </div>
</div>


<?php
include("includes/footer.php");
?>
