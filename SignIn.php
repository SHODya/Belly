<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Авторизация</title>
	<link href="style.scss" rel="stylesheet">
	<script src="script.js" defer></script>
</head>

<body>


	<form action="#" method="post">
		<div class="LogReg">
			<nav class="navbar">

				<div class="jc-c margin-12">
					<a href="index.php"><img src="images/BelleLogo.png"></a>
				</div>

				<div class="container jc-c">
					<div class="menu margin-36">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<p class="nav-link navbar-item-text fontSize-24">Войти</p>
							</li>
							<li class="nav-item">
								<p class="navbar-item-text fontSize-20">\</p>
							</li>
							<li class="nav-item">
								<a href="SignUp.php" class="nav-link navbar-item-text fontSize-24 gray">Регистрация</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<p>
			<label for="Email" class="floatLabel">Почта</label>
			<input id="Email" name="Email" type="email">
			<span id="emailError" class="error">Некорректный email адрес</span>
		</p>
		<p>
			<label for="password" class="floatLabel">Пароль</label>
			<input id="password" name="password" type="password">
			<span id="passwordLatinError" class="error mrgnbtm-4">Введите пароль латинскими буквами либо цифрами</span>
			<span id="passwordLengthError" class="error">Введите пароль длиннее 8 символов</span>
		</p>

		<p>
			<input type="submit" value="Войти в аккаунт" id="submit" disabled>
		</p>
	</form>
</body>

</html>