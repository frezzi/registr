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
	<!-- Форма регистрации -->
	<form action="vendor/signup.php"  method="post" enctype="multipart/form-data">
		<label>ФИО</label>
		<input type="text" name="full_name" placeholder="Введите свое полное имя">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите логин">
		<label>Почта</label>
		<input type="email" name="email" placeholder="Введите email">
		<label>Изображение профиля</label>
		<input type="file" name="avatar" >
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<label>Подтверждение пароля</label>
		<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
		<button type="submit">Зарегестрироваться</button>
		<p>У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь</a></p>
		
			<?php
			if ( $_SESSION['message']) {
				echo '<p class="msg">' .$_SESSION['message']. '</p>';
			}
			unset($_SESSION['message']);

			?>
			
		
	</form>


</body>
</html>