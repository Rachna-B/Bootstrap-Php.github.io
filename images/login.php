<?php


$con = mysqli_connect('localhost','root','','website');




$user = $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];

$query ="INSERT INTO login(Username, Email, Password)VALUES('$user','$email','$password')";

 $result= mysqli_query ($con,$query);

header('location:index.html');










?>