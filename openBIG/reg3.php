<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<meta charset="utf-8">
</head>
<body>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>ВНИМАНИЕ!</strong> Вы не правильно ввели название почты или пароля.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	<div class="container bg-white">
		<div class="text-center">
			<form action="reg2.php" method="POST">
				<input type="" name="login" placeholder="Введите имя">
				<input type="password" name="pass" placeholder="Введите пароль">
				<input type="" name="mail" placeholder="Введите mail">
				<input type="submit" name="submit">
			</form>
		</div>
	</div>
		<script type="text/javascript">
		$('.alert').alert()
	</script>
</body>
</html>