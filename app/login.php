<?php

header('Content-Type: applicacion/json');
include "Conn.php";

$user=$_POST["user"];
$password=$_POST["password"];

$conn="";
$con = new Conn();
$enlace= $con->getConnection();

//if (!$enlace) {}

$query="select * from Users where email='$user' and pass='$password'";
$res=mysqli_query($enlace,$query);

if (mysqli_num_rows($res)) {
	$row = mysqli_fetch_assoc($res);
	session_start();
	$_SESSION['user']['idUser'] = $row['idUser'];
	$_SESSION['user']['firstName']= $row['firstName'];
	$_SESSION['user']['lastName']= $row['lastName'];
	$conn="successful";
}else{
	$conn="failed";
}

mysqli_close($enlace);

echo json_encode($conn);

?>
