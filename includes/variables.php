<?php
$web_dir = "padutchbaskets/";
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $web_dir = "/my_sites/padutchbaskets/";
}
$app_path = "https://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == '127.0.0.1') {
    $app_path = "http://" . $_SERVER['HTTP_HOST'] . "/" . $web_dir;
}
$root_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;

$today         = date('m/d/Y h:i:s A', time());
$current_month = date("m y", strtotime($today));
$current_year  = date("Y", strtotime($today));
?>
<script>
//this is for conditioning in custom scripts file
var $appPathJS = <?php echo json_encode($app_path); ?>;
</script>