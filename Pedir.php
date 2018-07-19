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
			session_start();
			if(!isset($_SESSION['idusuario']) || !isset($_SESSION['nomeusuario']))
			{
				header('Location: Login.php');
			}
			else
			{
				//Criando a conexao
				$con = mysqli_connect("localhost","root","","delivery");
				// Checando a conexao
				if (mysqli_connect_errno())
				{
					echo "Falha ao conectar com MySQL: ". mysqli_connect_error(); 
				}
				$valor = $_POST['preco'];
				$idprod = $_POST['id'];
				date_default_timezone_set('America/Sao_Paulo');
				$data = date('Y-m-d H:i');
				$sql = "INSERT INTO pedidos VALUES ('NULL','".$_SESSION['idusuario']."','$data','$valor')";
				if (!mysqli_query($con,$sql))
				{
					die('Erro ao inserir: ' . mysqli_error($con)); 
				}
				$sqlaux = "SELECT id FROM pedidos ORDER BY id DESC LIMIT 1";
				$idpedido =mysqli_query($con,$sqlaux);
				$linha = mysqli_fetch_array($idpedido);
				$sql2 = "INSERT INTO pedidos_tem_produtos VALUES ('$idprod','".$linha['id']."')";
				if (!mysqli_query($con,$sql2)) 
				{
					die('Erro ao inserir: ' . mysqli_error($con)); 
				}
				echo "Pedido realizado com sucesso!";
				mysqli_close($con);	
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