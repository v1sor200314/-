<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'openbig'); 
$query = mysqli_query($connect, "UPDATE tovari SET name = '" . $_POST['name'] . "', summ = '" . $_POST['summ'] . "', img =  'images/" . $_FILES['img'] . "' WHERE id = '" . $_POST['id'] . '"');
header('location:http://blogEGOR/openbig/admin.php');
?>