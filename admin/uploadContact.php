<?php
	include("../connection.php");
	$titulo = $_POST['subject'];
	$content = $_POST['content'];
	$sql = "INSERT INTO dat_letters (titleLetter, messageLetter, senderLetter, createdDate, status)
			VALUES ('".$titulo."','".$content."','".$autor."','".date('Y-m-d')."','1');";

	$mysqli->query($sql);

echo  mysqli_error($mysqli);