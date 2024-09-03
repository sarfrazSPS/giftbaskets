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

function breadCrumb($app_path, $last_text, $levels = 1, $level2_link = "", $level2_text = "") {
    // Start the breadcrumb with <ol> for proper Microdata structure
    $br_html  = '<ol class="container mt-5 mb-2 ps-0 breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
    
    // Home breadcrumb
    $br_html .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    $br_html .= '<a class="ps-0" itemprop="item" href="' . $app_path . '">';
    $br_html .= '<span class="ps-0 pe-0" itemprop="name">Home</span>';
    $br_html .= '</a>';
    $br_html .= '<meta itemprop="position" content="1" />';
    $br_html .= '</li>';
    
    // Level 2 breadcrumb (if applicable)
    if ($levels == 2) {
        $br_html .= ' &raquo; ';
        $br_html .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        $br_html .= '<a class="ps-0 pe-0" itemprop="item" href="' . $level2_link . '">';
        $br_html .= '<span itemprop="name">' . $level2_text . '</span>';
        $br_html .= '</a>';
        $br_html .= '<meta itemprop="position" content="2" />';
        $br_html .= '</li>';
    }
    
    // Last breadcrumb (current page, no link)
    $br_html .= ' &raquo; ';
    $br_html .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    $br_html .= '<span class="last" itemprop="name">' . $last_text . '</span>';
    $br_html .= '<meta itemprop="position" content="' . ($levels + 1) . '" />';
    $br_html .= '</li>';
    
    // Close the ordered list
    $br_html .= '</ol>';
    
    return $br_html;
}



?>
<script>
//this is for conditioning in custom scripts file
var $appPathJS = <?php echo json_encode($app_path); ?>;
</script>