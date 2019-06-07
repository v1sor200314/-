<!DOCTYPE html>
<html>
<head>
	<title>Редактировать</title>
	<meta charset="utf-8">
</head>
<body>
	<form enctype="multipart/form-data" method="POST" action="update2.php">
		<?php echo '<input type="" name="name" value=' . $_POST['name'] . '>' ?>
		<?php echo '<input type="" name="summ" value=' . $_POST['summ'] . '>' ?>
		<?php echo '<input type="file" name="img">'?>
		<?php echo '<input type="hidden" name="id" value=' . $_POST['id'] . '>' ?>
		<button>Сохранить</button>
	</form>
</body>
</html>