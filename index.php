<?php 

	//DATA SOURCE NAME
	$dsn = 'mysql:host=localhost; dbname=php_com_pdo';
	$user = 'root';
	$password = '';

	try {
		$con = new PDO($dsn, $user, $password);

		$query = "SELECT * FROM tb_usuarios WHERE id=2";

		$stmt = $con->query($query);

		//FETCH_ASSOC = nome associado a coluna no retorno
		//FETCH_NUM = indice associado a tupla no retorno
		//FETCH_BOTH = os dois acima
		//FETCH_OBJ = torna o retorno em um objeto
		$usuario = $stmt->fetch(PDO::FETCH_OBJ);

		echo "<pre>";
		print_r($usuario);
		echo "</pre>";

		echo $usuario->nome;


	} catch (PDOException $e) {
		echo 'Erro: '.$e->getCode(). ' Mensagem: '.$e->getMessage();
		//registrar erro
		
	}


 ?>