<!DOCTYPE html>
<html lang="utf-8">
<head>
	<title>2milk Login</title>
	<style type="text/css" href="style.css"></style>
	<meta charset="utf-8">
	<style type="text/css">
		div, h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Milk Manager 2019</h1><br>
	<div>
		<form action="autenticacao.php" method="post">
			<label>Usuário:</label>
			<input type="text" name="usuario" required><br><br>
			<label>Senha:</label>
			<input type="password" name="senha" required><br><br>
			<button>Entrar</button><br><br>
		</form>
		<form action="senha.html">
			<button>Esqueci minha senha</button><br>
		</form>
	</div>
</body>
</html>