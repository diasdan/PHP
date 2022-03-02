<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
	

		<?php
			if(isset($_POST['acao'])){
				
				$nome = $_POST['nome'];
				$email = $_POST['email'];

				echo $nome;
				echo '<br>';
				echo $email;
			}

		?>

	<form method="post">
		<input type="text" name="nome" />
		<input type="text" name="email" />
		<input type="submit" name="acao" value="Enviar" />
	</form>

</body>
</html>