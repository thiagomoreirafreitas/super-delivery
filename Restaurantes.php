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
			//<!-- TABELA RESTAURANTE -->
			$sqlRest = "SELECT * FROM restaurantes ORDER BY Nome ASC";
			$resultRest = mysqli_query($con,$sqlRest);
			echo"
			<div class= 'corpo'>
			<h2>RESTAURANTES</h2>
			<div class='tabelaMaior' >
				<table >
					<tr>
						<td >
						Nome do restaurante<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;Endereço
						</td>
						<td >
							Telefone
						</td>
						<td>
							Pontuação
						</td>
					</tr>"; 
				while($linhaRest = mysqli_fetch_array($resultRest))
				{ 
					echo "
					<tr>
						<td >
							" . $linhaRest['Nome'] . "<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;".$linhaRest['Endereco'] ."
						</td>
						<td >"
							. $linhaRest['Telefone'] . "
						</td>
						<td >"
							. $linhaRest['Pontuacao'] . "
						</td>
					</tr>
					"; 
				}
				echo"</table></div>";
			mysqli_close($con);	
		?>
		<!-- RODAPE -->
		<div class = "rodape2">
			<h2>Super Delivery</h2>
			<hr/>
			<h4>Copyright © 2015 Super Delivery Inc. Todos os direitos reservados.</h4>
		</div>
		<!-- TERMINA RODAPE -->
		</div>
	</body>
</html>