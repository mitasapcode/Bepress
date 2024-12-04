<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bengkel Ku</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
	<style>
		body {
			margin: 0;
			font-family: 'Poppins', sans-serif;
			background: linear-gradient(180deg, #d9f2e9, #ffffff);
			color: #333;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		nav {
			width: 100%;
			padding: 10px 20px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			background: transparent;
		}
		nav a {
			color: #333;
			text-decoration: none;
			font-weight: 650;
			font-size: 1.2rem;
		}
		.container {
			text-align: center;
			width: 100%;
			max-width: 400px;
			padding: 20px;
		}
		h2 {
			font-size: 2rem;
			font-weight: 750;
			margin-bottom: 10px;
		}
		p {
			font-size: 1rem;
			color: #666;
			margin-bottom: 20px;
		}
		.form-group {
			margin-bottom: 15px;
		}
		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			font-size: 1rem;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}
		button {
			padding: 10px 20px;
			font-size: 1rem;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		.btn-primary {
			background: #6200ee;
			color: #fff;
		}
		.btn-outline {
			border: 2px solid #6200ee;
			color: #6200ee;
			background: none;
		}
		.btn-primary:hover,
		.btn-outline:hover {
			opacity: 0.9;
		}
	</style>
</head>
<body>
	<nav>
		<a href="#">Bengkel Ku</a>
		<a href="#">Hai, <?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : "Akun"; ?></a>
	</nav>
	<div class="container">
		<h2>Login</h2>
		<p>Solusi cepat untuk kamu, dimanapun kamu berada!</p>
		<form action="action/act_masuk.php" method="post" autocomplete="off">
			<div class="form-group">
				<input type="text" name="username" placeholder="Masukkan Username" required>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Masukkan Password" required>
			</div>
			<button class="btn-primary" type="submit" name="button">Masuk</button>
			<a href="daftar.php" class="btn-outline">Daftar</a>
		</form>
	</div>
</body>
</html>
