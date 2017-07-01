<?php
	include("../connection.php");
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
	$path = 'upload/'; // upload directory
	 $ext = strtolower(pathinfo($_FILES["file"]['name'], PATHINFO_EXTENSION));
	$root = rand(1,10000000000000).'.'.$ext;
    move_uploaded_file($_FILES["file"]["tmp_name"], $path.$root);
	
	$title = $_POST['nombre-img'];
	$sql = "INSERT INTO sis_images (nameImage, uploadDate, titleImage, status)
			VALUES ('".$root."','".date('Y-m-d')."','".$title."','1');";

	$mysqli->query($sql);
echo  mysqli_error($mysqli);
header('Location: iframe-portfolio.php');