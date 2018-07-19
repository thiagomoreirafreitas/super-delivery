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
		<?php
			//Criando a conexao
			$con = mysqli_connect("localhost","root","","delivery");
			// Checando a conexao
			if (mysqli_connect_errno())
			{
				echo "Falha ao conectar com MySQL: ". mysqli_connect_error(); 
			}
			$login=$_POST['Login'];
			$senha=$_POST['Senha'];
			$sql=" SELECT * FROM usuarios WHERE '".$login."' = login AND '" .$senha."' = senha ";
			$result = mysqli_query($con,$sql);
			$num_rows = mysqli_num_rows($result);
			if($num_rows > 0)
			{
				session_start();
				echo"Usuário Logado com Sucesso!!!";
				$dados = mysqli_fetch_array($result);
				$_SESSION['idusuario']=$dados['id'];
				$_SESSION['nomeusuario']=$dados['Nome'];
				mysqli_close($con);	
			}
			else
			{
				echo"Login e Senha Inválidos!!!";
			}
		?>
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