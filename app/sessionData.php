<?php
session_start();
	$array = array('id' => $_SESSION['user']['idUser'], 'firstName'=> $_SESSION['user']['firstName'] , 'lastName' => $_SESSION['user']['lastName'] );
	echo json_encode($array, JSON_FORCE_OBJECT);
?>
