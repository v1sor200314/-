<?php  

 $connect = mysqli_connect('127.0.0.1', 'root', '', 'egor_pnd_twitter');
						mysqli_query($connect, "INSERT INTO tweeet (logo, title, text, img, id) VALUES ('images/avatar.jpg', '@kaka','" . $_POST['twit'] . "', 'images/v1sor.jpg', '')");
header('Location: http://blogEGOR/Twitter/index.php');
?>