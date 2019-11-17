<?php

header('Content-Type: applicacion/json');
include "Conn.php";

$email =$_POST["email"];
$mobile =$_POST["mobile"];

session_start();
$idUser =$_SESSION['user']['idUser'];

$conn="";
$con = new Conn();
$enlace= $con->getConnection();

$query="UPDATE Users SET email='$email' , mobile='$mobile' WHERE idUser = '$idUser'";
if (mysqli_query($enlace,$query)) {
	$conn="successful";

}else{
	$conn="failed";
}
mysqli_close($enlace);

echo json_encode($conn);

?>
