<?php
error_reporting(1);
// Connect to the database
$conn = mysqli_connect("localhost", "marketin_corporate", "Corporate23%", "marketin_pa_dutch_basket");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  echo "failed etstetettsetetetettetetetetetestestsetsetsettsetestetetestetestse";
}
else
{
   echo "Success etstetettsetetetettetetetetetestestsetsetsettsetestetetestetestse";
}




$sql = "SELECT * FROM tbl_users WHERE email='admin@gmail.com' AND password='Corporate23%'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
print_r($row);
echo mysqli_error($conn);



$sql ="ALTER TABLE tbl_promocode ADD discount VARCHAR(250) NOT NULL";

$result = mysqli_query($conn, $sql);
echo mysqli_error($conn);

?>
