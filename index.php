<?php 

	if (!empty($_POST['usuario']) && !empty($_POST['senha']) ) {

		//DATA SOURCE NAME
		$dsn = 'mysql:host=localhost; dbname=php_com_pdo';
		$user = 'root';
		$password = '';

		try {
			$con = new PDO($dsn, $user, $password);

			$query = "SELECT * FROM tb_usuarios WHERE";
			$query .= " email = :usuario ";
			$query .= " AND senha = :senha";

			echo($query);
			echo "<hr>";

			$stmt = $con->prepare($query);
			$stmt->bindValue(':usuario',$_POST['usuario']);
			$stmt->bindValue(':senha',$_POST['senha']);
			$stmt->execute();
			$usuario = $stmt->fetch();

			echo "<pre>";
			print_r($usuario);
			echo "</pre>";

		} catch (PDOException $e) {
			echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
			//registrar erro
			
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Login</title>
 </head>
 <body>

 	<form method="POST" action="index.php">
 		<input type="text" name="usuario" placeholder="usuario">
 		<br>
 		<input type="password" name="senha" placeholder="senha">
 		<br>
 		<button type="submit">Logar</button>
 	</form>
 
 </body>
 </html>