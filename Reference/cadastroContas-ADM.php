<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Atividade 29/03</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<?php
				if(isset($_POST["salvar"]))
				{	
					
					$id = "";
					$endereco_email = $_POST["email"];
					$senha_plain = $_POST["senha"];
					$tipoConta = 2;
					
					$senha_criptografada = md5($senha_plain);
					
					
					include "conexao.php";
					$sql = "INSERT INTO usuario_tb VALUES(?, ?, ?)";
					$contatos = $conex -> prepare($sql);
					$contatos -> execute(array($id, $endereco_email,$senha_criptografada));
					$contatos = NULL;
					
					header("location:index.php");
					
				}
		?>
	</head>
	<body>
		<header>
			<hr>
			<h2><center>Atividade 29/03 - Cadastro de Atendentes - Gabriel Braz</center></h2>
			<hr>
		</header>
		
			<a href="index.php">
				<input class="botaoTop" type="button" value="Menu Principal" name="index" align="center">
			</a>
			<div class="cadastro">
				<fieldset>
					<legend>
						Dados do Cadastro:<br>
					</legend>
					<form action="" method="POST">
						<p>
							Endereco de E-mail: <br>
							<input type="text" name="email" maxlength="200" autofocus required>
						</p>
						
						<hr>
						
						<p>
							Senha:<br>
							<input type="password" name="senha" required>
						</p>
						
						<hr>
						
						<p>
							<input type="submit" value="salvar" name="salvar">
						</p>
					<form>
				</fieldset>
			</div>
		
	</body>
</html>