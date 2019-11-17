<?php
session_start();
if (!isset($_SESSION['user'])) {
	header ("Location: index.php");
	}
	$array = array('id' => $_SESSION['user']['idUser'], 'firstName'=> $_SESSION['user']['firstName'] , 'lastName' => $_SESSION['user']['lastName'] );
//	echo json_encode($array, JSON_FORCE_OBJECT);
?>