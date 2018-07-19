<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
	<head>
		<link rel="stylesheet" type="text/css" href="css.css"/>
		<title>Super Delivery</title>
	</head>
	<body>
		<div class = "cabecalho">
			<hr/>
			<img  id = "logo" src="imagens/logo1.png"/>
			<h1>Super Delivery</h1>
			<hr/>
			<hr/>
			<hr/>
		</div>
		<!-- MENU -->
		<div class="menu-container">
			<ul class="menu clearfix">
	    		<li><a href="Index.php">Inicio</a></li>
	    		<li><a href="Restaurantes.php">Restaurantes</a></li>
	    		<li><a href="Produtos.php">Produtos</a></li>
	    		<li><a href="Cadastro.php">Cadastro</a></li>
	    		<li><a href="Login.php">Login</a></li>
			</ul>
		</div>
		<!-- TERMINA MENU -->
		<div class= "corpo">
			<h2>CADASTRO</h2>
			<form method = "POST" action = "Confirma.php">
				<b>Nome:</b>
				<input type="text" size="40" name="Nome"/><br/><br/>
				<b>Endereço:</b>
				<input type="text" size="80" name="Endereco"/><br/><br/>
				<b>Telefone:</b>
				<input type="text" size="10" name="Telefone"/><br/><br/>
				<b>Login:</b>
				<input type="text" size="20" name="Login"/><br/><br/>
				<b>Senha:</b>
				<input type="password" size="20" name="Senha"/><br/><br/>
				<input type="submit" value ="Cadastrar Usuário >>" name="btncadastrar"/>
				<input type="reset" value ="Limpar Dados >>" name="btnlimpar"/>
			</form>
			<!-- RODAPE -->
			<div class = "rodape3">
				<h2>Super Delivery</h2>
				<hr/>
				<h4>Copyright © 2015 Super Delivery Inc. Todos os direitos reservados.</h4>
			</div>
			<!-- TERMINA RODAPE -->
		</div>
	</body>
</html>