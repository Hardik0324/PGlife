<?php
session_start();
require("../includes/database_connect.php");

if (!isset($_SESSION["user_id"])) {
    echo "Something went wrong!";
    die();
}

$user_id = $_SESSION['user_id'];

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$college_name = $_POST['college_name'];
$gender = $_POST['gender'];

$sql3 = "UPDATE users SET full_name = '$full_name', phone = '$phone', college_name = '$college_name' , gender = '$gender' WHERE id = $user_id";

$result3 = mysqli_query($conn, $sql3);

if (!$result3) {
    echo "Something went wrong!";
    return; 
}

mysqli_close($conn);
header("location: ../index.php");