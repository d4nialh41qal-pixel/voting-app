<?php
include("db.php");

$user = $_POST['username'];
$pass = $_POST['password'];

mysqli_query($conn, "INSERT INTO users(username,password) VALUES('$user','$pass')");

echo "Account created! <a href='index.html'>Login</a>";
?>