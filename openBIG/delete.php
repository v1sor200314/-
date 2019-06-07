<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'openbig');
	mysqli_query($connect, "DELETE FROM tovari WHERE id = '" . $_POST['id'] . "'");
		header('location:http://blogEGOR/openbig/admin.php');
?> 