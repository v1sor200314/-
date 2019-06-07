 
	<meta charset="utf-8">




	<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'egor_pnd_twitter');
	$query = mysqli_query($connect, 'SELECT * FROM store');
	

	for($i=0;$i<$query->num_rows; $i++){
		$logo = $query->fetch_assoc(); 
		echo '<img src="' . $logo['img'] . '">';
		echo '<h2>' . $logo['name'] . '</h2>';
		echo '<p>' . $logo['price'] . '</p>';
		echo '<button>Купить</button>'; ?>
		<form action="admin.php" method="POST">
			<?php echo '<input type="" name="id" value="' . $logo['id'] . '" style="display:none ">'; ?>
			<button>Редактировать</button>
		</form>
		<?php
	};
		?>
