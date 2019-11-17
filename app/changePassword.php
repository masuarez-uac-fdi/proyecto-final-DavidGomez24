<?php
header('Content-Type: applicacion/json');
include "Conn.php";

$newPassword=$_POST["newPassword"];
$password=$_POST["password"];

session_start();
$idUser =$_SESSION['user']['idUser'];
$passDatabase="";

$conn="";
$con = new Conn();
$enlace= $con->getConnection();

$query="select pass from Users where idUser='$idUser'";
$res=mysqli_query($enlace,$query);
if (mysqli_num_rows($res)) {
	$row = mysqli_fetch_assoc($res);
	$passDatabase = $row['pass'];

}else{
	$conn="failed";
}
mysqli_close($enlace);

if ($password==$passDatabase) {

	$con = new Conn();
	$enlace= $con->getConnection();

	$query="UPDATE Users SET pass='$newPassword' WHERE idUser = '$idUser'";
	$res=mysqli_query($enlace,$query);
	$conn="successful";
	mysqli_close($enlace);
}

echo json_encode($conn);

?>
