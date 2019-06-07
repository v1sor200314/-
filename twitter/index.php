 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<!--navigacia-->
	<div class="header">
		<div class="container-fluid border-bottom">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="row mt-2">
				<!--Левая колонка-->
				<div class="col-3 pl-0 bg-white mr-3">
					<div class="col-12 pl-0">
						<img src="images/background.jpg" width="285px">
						<div class="d-flex">
							<img src="images/avatar.jpg" height="50px" margin="200px">
							<div>
								<h2>Test</h2>
								<p>@test76867392</p>
							</div>
						</div>
						<div class="d-flex pl-3">
							<div>
								<h4>Твиты</h4>
								<a href="#">9</a>
							</div>
							<div class="ml-5">
								<h4>Читаемые</h4>
								<a href="#">10</a>
							</div>
						</div>
					</div>
					<div class="col-12 mt-5 pl-2">
						<h5>Актуальные темы для вас</h5>
						<a href="#">Изменить</a>
						<div>
						<?php  
						$connects = mysqli_connect('127.0.0.1', 'root', '', 'egor_pnd_twitter');
						$querys = mysqli_query($connects, 'SELECT * FROM lefttweet');

						for($i=0;$i<$querys->num_rows; $i++){
						$left = $querys->fetch_assoc();
						echo '<div>';
						echo '<a href="#">' . $left['tag'] . '</a>';
						echo '<p>' . $left['tweet'] . '</p>';
						echo '</div>';
						};
						?>
						</div>
					</div>
				</div>
				<!--Средняя колонка-->
				<div class="col-5 pl-2 bg-white mr-3">
					<div class="col-12">
						<form method="POST" action="insert.php">
									<input type="" name="twit">
									<button style="background:pink;border-radius:10px;">Твитнуть</button>
								</form>
						<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'egor_pnd_twitter') ;
						$query = mysqli_query($connect, 'SELECT * FROM tweeet');
						?>
						<?php for($i=0;$i<$query->num_rows; $i++)
						{ ?>
							<div>
								
							</div>
						<div class="row">
							<div class="col-2">
								<div class="row mt-2">
									<a href=""><?php $logo = $query->fetch_assoc(); echo '<img src="' . $logo['logo'] . '">'; ?></a>

								</div>

							</div>
							<div class="col-10">
								<div class="row d-flex"><?php echo '<a href="#">' . $logo['title'] . '</a>' ?></div>
								<div class="row d-flex"><?php echo '<p>' . $logo['text'] . '</p>' ?></div>
								<div class="row d-flex"><?php echo '<img src="' . $logo['img'] . '" style=" height: 200px; border-radius: 40px">' ?></div>
								<div class="row d-flex" style="padding-left: 60px">
									<div class="col-3">
										<img src="images/comment.png">
									</div>
									<div class="col-3">
										<img src="images/retweet.png">
									</div>
									<div class="col-3">
										<img src="images/like.png">
									</div>
									<div class="col-3">
										<img src="images/envelope.png">
									</div>
								</div>
							</div>
							<form action="bazik.php" method="POST">
								<?php echo '<input type="" name="id" value="' . $logo['id'] . '" style="display:none ">' ?>
								<button style="background:blue;border-radius:10px;">Delete</button>
							</form>
							<div></div>
							<form action="change.php" method="POST" style="display:block">
								<?php echo '
								<input style= display:none type="" name="textx" value="' . $logo['text'] . '">';
								 echo '<input style= display:none type="" name="id" value="' . $logo['id'] . '">';?>

								<?php echo '<button style="background:yellow;border-radius:10px">Update</button>' ?>
							</form>
						</div>

					<?php } ?>
					
					</div>
				</div>
				<!--Правая колонка-->
				<div class="col-3 pl-2 bg-white">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
				<div class="col-12">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>