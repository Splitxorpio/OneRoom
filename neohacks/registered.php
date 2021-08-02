<?php
include "db.php";
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $sql);
    header('location:login.php');
}
?>