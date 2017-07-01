<?php
	include("../connection.php");
	$id = $_POST['id'];
	$type = $_POST['type'];
	
	if($type == "img"){
		$sql = "UPDATE sis_images SET status = '0' WHERE idImage = ".$id;
		$mysqli->query($sql);
		
	}
	else if($type == "letter"){
		$sql = "UPDATE dat_letters SET status = '0' WHERE idLetter = ".$id;
		$mysqli->query($sql);
	}
header('Location: index.php');

echo  mysqli_error($mysqli);