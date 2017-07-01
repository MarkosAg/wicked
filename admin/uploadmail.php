<?php
	include("../connection.php");
	$titulo = $_POST['subject'];
	$content = $_POST['content'];

	mail("fernanda.gb90@gmail.com", $titulo, $content);