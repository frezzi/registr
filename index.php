<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if($_SESSION['user']) {
	header('Location:profile.php');
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
	<!-- Форма авторизации -->
	<form action="vendor/signin.php"  method="post">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<button type="submit">Войти</button>
		<p>У вас нет аккаунта? - <a href="registr.php">Зарегестрируйтесь</a></p>
			<?php
			if ( $_SESSION['message']) {
				echo '<p class="msg">' .$_SESSION['message']. '</p>';
			}
			unset($_SESSION['message']);

			?>
	</form>


</body>
</html>