<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<title>Projeto Financeiro</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<?php
			session_start();
			unset($_SESSION);
			if (session_destroy()){
				$mensagem = "Logout realizado com sucesso.";
			}
		?>
	</head>
	<body>
		<header>
			<hr>
			<h2><center>Projeto Financeiro - Logout - Braz & Senes</center></h2>
			<hr>
		</header>
		
		<center>
		<div>
				<fieldset>
					
					<p>
						<?php echo $mensagem; ?>
					</p>
					
					<hr>
					
					<p>
						<a href="index.php">
							<input type="button" value="Retornar" name="retorno">
						</a>
					</p>
				</fieldset>
			
			<form>
		</div>
		</center>
	</body>
</html>