<?php
session_start();
include("db.php");

$user = $_POST['username'];
$pass = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($result) > 0){
    $_SESSION['user'] = $user;
    header("Location: vote.php");
}else{
    echo "Login failed!";
}
?>