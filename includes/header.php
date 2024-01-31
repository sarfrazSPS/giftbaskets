<?php
$web_dir = "my_sites/giftbaskets/";
$app_path = "http://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
$root_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;

$today         = date('m/d/Y h:i:s A', time());
$current_month = date("m y", strtotime($today));
$current_year  = date("Y", strtotime($today));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BarnCoamish Builders</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= $app_path ?>assets/css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?= $app_path ?>assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="content" class="site-content">
        
        <section class="top-bar-section container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 top-bar-left">
                        <a href="#">A Note About Food Safety and Shipping</a>
                    </div>
                    <div class="col-md-6 top-bar-right">
                        <a href="#">View Our 2023-24 Holiday Catalogue</a>
                    </div>
                </div>
            </div>
        </section>