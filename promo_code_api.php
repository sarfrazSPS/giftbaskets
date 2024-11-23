<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json");
include('includes/db_code.php');
// Check if promocode parameter is provided
if (isset($_GET['promocode'])) {
    $promocode = $_GET['promocode'];

    // Construct the SQL query
    $sql = "SELECT * FROM tbl_promocode WHERE promocode = '$promocode' AND expir_date >= NOW()";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if the promo code is valid and not expired
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $response = array(
                "valid" => true,
                "discount" => $row['discount'],
                "discount_type" => $row['discount_type'],
                "message" => "Promo code is valid and not expired."
            );
        } else {
            $response = array(
                "valid" => false,
                "message" => "Invalid or expired promo code."
            );
        }
        mysqli_free_result($result);
    } else {
        $response = array(
            "valid" => false,
            "message" => "Query error: " . mysqli_error($conn)
        );
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    $response = array(
        "valid" => false,
        "message" => "Promo code parameter is missing."
    );
}

// Output the JSON response
echo json_encode($response);
?>
