<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vote Food</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Vote Your Favourite Food</h2>

    <form method="POST">
        <button name="vote" value="nasi_lemak">Nasi Lemak</button>
        <button name="vote" value="nasi_goreng">Nasi Goreng</button>
    </form>

</div>

</body>
</html>

<?php
include("db.php");

if(isset($_POST['vote'])){
    $vote = $_POST['vote'];
    $user = $_SESSION['user'];

    mysqli_query($conn, "INSERT INTO votes(username, food) VALUES('$user','$vote')");
}
?>