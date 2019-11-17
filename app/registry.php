<?php

header('Content-Type: applicacion/json');
include "Conn.php";

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$age=$_POST["age"];
$mobile=$_POST["mobile"];

$conn="";
$con = new Conn();
$enlace= $con->getConnection();

//if (!$enlace) {}

$query="insert into Users (firstName,lastName,email,pass,age,mobile)values('$firstName','$lastName','$email','$pass','$age','$mobile')";

if (mysqli_query($enlace,$query)) {
	$conn="successful";
}else{
	$conn="failed";
}

mysqli_close($enlace);

echo $conn;


 ?>
