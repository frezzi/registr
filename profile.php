<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(!$_SESSION['user']) {
	header('Location:/');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Авторизация</title>
</head>
<body>

	<form >
		<img src="<?= $_SESSION['user']['avatar'] ?>" style="margin:0 auto;"width="100">
		<h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
		<a href="#"><?= $_SESSION['user']['email'] ?></a>
		<a href="vendor/logout.php" style="color: red; text-align: center;">Выход</a>
	</form>


</body>
</html>