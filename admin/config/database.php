<?php
$host  = "localhost";
$username = "root";
$password = "";
$db = "app_laundry";

$conn = mysqli_connect($host,$username,$password,$db);

if (!$conn) {
    echo "eror";
}
?>