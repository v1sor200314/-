<!DOCTYPE html>
<html>
<head>
	<title>
		openBIG | Админ-панель
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="col-12">
		<div class="row">
		<div class="href">
			<a href="#">Как стать продавцом</a>
		</div>
		<div class="href">
			<a href="#">Создать интернет-магазин</a>
		</div>
		<div class="href">
			<a href="#">Стать продавцом</a>
		</div>
		<div class="href">
			<a href="#">Новости</a>
		</div>
		<div class="href">
			<a href="#">Новые товары</a>
		</div>
		<div class="href">
			<a href="#">Скидки</a>
		</div>
		<div class="href">
			<a href="#">Продавцы</a>
		</div>
		<div class="href">
			<a href="index.php">Магазин</a>
		</div>
		</div>
		<hr>
	</div>

	<div class="row">
		<div class="col-3">
			<img src="images/logo.png" class="logo">
		</div>
		<div class="col-2 nomer">
			<h2>+79969152960</h2>
			<a href="#">Заказать обратный звонок</a>
		</div>
		<div class="col-3">
			<input type="" name="poisk" placeholder="Введите название товара">
			<input type="submit" name="submit">	
	</div>
		<div class="text-center">
					<a href="reg.php">
						<img src="images/profil.png" class="profil">
					</a>
					<h5>Регистрация</h5>

					<a href="korzina.php">
						<img src="images/korzina.png" class="korzina">
					</a>
					<h5>Корзина</h5>
		</div>
		</div>

		<hr>
	<form action="sozdanie.php" method="POST" enctype="multipart/form-data">
		<h2>Создать товар</h2>
		<input type="" name="name" placeholder="Название">
		<input type="" name="summ" placeholder="Сумма">
		<input type="file" name="images">
		<button>Создать</button>
	</form>
<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'openbig');
	$query = mysqli_query($connect, 'SELECT * FROM tovari');

	for($i=0;$i<$query->num_rows; $i++){
		$result = $query->fetch_assoc();
		echo '<p>' . $result['name'] . '</p>'; 
		echo '<img src="' . $result['img'] . '">';
		echo '<p>' . $result['summ'] . '</p>';
		
		
?>

		<form action="update.php" method="POST">
			<?php echo '<input type="hidden" name="id" value="' . $result['id'] . '">' ?>
			<button>Редактировать</button>
		</form>	
		<form action="delete.php" method="POST">
			<?php echo '<input type="hidden" name="id" value="' . $result['id'] . '">' ?>
			<button>Удалить</button>
		</form>

<?php } ?>
</body>
</html>