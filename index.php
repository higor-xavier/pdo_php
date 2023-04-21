<?php 

	//DATA SOURCE NAME
	$dsn = 'mysql:host=localhost; dbname=php_com_pdo';
	$user = 'root';
	$password = '';

	try {
		$con = new PDO($dsn, $user, $password);

		$query = "SELECT * FROM tb_usuarios";

		$stmt = $con->query($query);
		$lista = $stmt->fetchAll();

		echo "<pre>";
		print_r($lista);
		echo "</pre>";

		echo $lista[0]['nome'];


	} catch (PDOException $e) {
		echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
		//registrar erro
		
	}


 ?>