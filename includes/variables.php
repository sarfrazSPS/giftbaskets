<?php
$web_dir = "";
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

function breadCrumb($app_path, $last_text, $levels=1, $level2_link="", $level2_text="" ){
    $br_html      = '<section class="container mt-5 mb-2 ps-0 breadcrumb">';
    $br_html     .= "<a href='".$app_path."'>Home</a>";
    if($levels==2){
        $br_html    .= '&raquo;';
        $br_html    .= "<a href='".$level2_link."'>".$level2_text."</a>";
    }
    $br_html    .= '&raquo;';
    $br_html    .= '<span class="last">'.$last_text.'</span>';
    $br_html    .= '</section>';
    return $br_html;
}

?>
<script>
//this is for conditioning in custom scripts file
var $appPathJS = <?php echo json_encode($app_path); ?>;
</script>