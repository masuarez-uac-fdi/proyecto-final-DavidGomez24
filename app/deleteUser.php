<?php
header('Content-Type: applicacion/json');
include "Conn.php";

session_start();
$idUser =$_SESSION['user']['idUser'];

$conn="";
$con = new Conn();
$enlace= $con->getConnection();

$query="DELETE FROM Users WHERE idUser = '$idUser'";
if (mysqli_query($enlace,$query)) {
	$conn="successful";

}else{
	$conn="failed";
}
mysqli_close($enlace);

unset($_SESSION['user']);

echo json_encode($conn);

?>
