<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'openbig'); 
	$query = mysqli_query($connect, "INSERT INTO users (login, pass, mail) VALUES('" . $_POST['login'] . "', '" . $_POST['pass'] . "', '" . $_POST['mail'] . "')");
	header('location:http://blogEGOR/openbig/login.php');
 ?>