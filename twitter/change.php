
<meta charset="utf-8"> 
<form method="POST" action="change.php">
		<?php echo '<input type="" name="update" value="' . $_POST['textx'] . '">';
		echo '<input style= display:none type="" name="upid" value="' . $_POST['id'] . '">';
		?>
		<button>Update</button>
	</form>

<?php 

$connect = mysqli_connect('127.0.0.1', 'root', '', 'egor_pnd_twitter');


mysqli_query($connect, "UPDATE tweeet SET text= '" . $_POST['update'] . "' WHERE id='" . $_POST['upid'] . "' ");

 ?>

 