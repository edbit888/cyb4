<?php
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$hash = hash("sha256", $pwd);

$conn = mysqli_connect("localhost:3306","root","","cyb4");

$sql = "INSERT INTO users(Login,PwdHash,Email) 
VALUES ('$name','$hash','$email')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo "Вы зарегистрированны!";
include "login.php";