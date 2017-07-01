<?php
	include("../connection.php");
	$titulo = $_POST['titulo'];
	$content = $_POST['content'];
	$autor = $_POST['autor'];

	$sql = "INSERT INTO dat_letters (titleLetter, messageLetter, senderLetter, createdDate, status)
			VALUES ('".$titulo."','".$content."','".$autor."','".date('Y-m-d')."','1');";

	$mysqli->query($sql);

echo  mysqli_error($mysqli);