<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'openbig');
	$query = mysqli_query($connect, "SELECT * FROM users WHERE mail = '" . $_POST['mail'] . "' AND pass = '" . $_POST['pass'] . "'");
	$res = $query->fetch_assoc();
	if ($query->num_rows == 0) {
		header("Location: http://blogEGOR/openbig/reg3.php");
	}else{
		header("Location: http://blogEGOR/openbig/index.php");
	}
	
?>