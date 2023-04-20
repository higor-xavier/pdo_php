<?php 

	//DATA SOURCE NAME
	$dsn = 'mysql:host=localhost; dbname=php_com_pdo';
	$user = 'root';
	$password = '';

	try {
		$con = new PDO($dsn, $user, $password);

		$query = '
					CREATE TABLE IF NOT EXISTS tb_usuarios(
					
						id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
						nome VARCHAR(50) NOT NULL,
						email VARCHAR(100) NOT NULL,
						senha VARCHAR(32) NOT NULL
					)
				';
		$retorno = $con->exec($query);
		echo $retorno;

		$query = '
					INSERT INTO tb_usuarios(nome, email, senha) 
					VALUES(

							"Jorge Sant Ana", "jorge@teste.com.br", "123456"
					)
				';
		$retorno = $con->exec($query);
		echo $retorno;
		
	} catch (PDOException $e) {
		echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
		//registrar erro
		
	}


 ?>