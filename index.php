<?php 

	//DATA SOURCE NAME
	$dsn = 'mysql:host=localhost; dbname=php_com_pdo';
	$user = 'root';
	$password = '';

	try {
		$con = new PDO($dsn, $user, $password);
		
	} catch (PDOException $e) {
		echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
		//registrar erro
		
	}


 ?>