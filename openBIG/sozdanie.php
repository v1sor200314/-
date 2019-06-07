<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'openbig');
	mysqli_query($connect, "INSERT INTO tovari (name, summ, img) VALUES ('" . $_POST['name'] . "', '" . $_POST['summ'] . "', 'images/" . $_FILES['images']['name'] . "')");
		$file_name = $_FILES['images']['name'];
		$file_tmp = $_FILES['images']['tmp_name'];
		move_uploaded_file($file_tmp,"images/" . $file_name);
		header('location:http://blogEGOR/openbig/admin.php');
 ?>