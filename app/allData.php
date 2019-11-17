<?php

header('Content-Type: applicacion/json');
include "Conn.php";

session_start();
$idUser=$_SESSION['user']['idUser'];

$con = new Conn();
$enlace= $con->getConnection();
//if (!$enlace) {}

$query="select * from Users where idUser='$idUser'";
$res=mysqli_query($enlace,$query);

if (mysqli_num_rows($res)) {
	$row = mysqli_fetch_assoc($res);

	$array = array('email' => $row['email'],
				   'mobile' => $row['mobile'],
				   'pass' => $row['pass'] );

}else{
	$array = array('email' => "",
				   'mobile' => "",
				   'pass' => "");

}

mysqli_close($enlace);

echo json_encode($array,JSON_FORCE_OBJECT);

?>
