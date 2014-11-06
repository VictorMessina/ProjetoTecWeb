<?php
	session_start();
	
	$post = $_POST['post'];
	$id_usuario = $_SESSION['id_usuario'];
	
	//1. Criar conexao
	include "conectaDB.php";
	
	//2. Criar e executar a query SQL 
	$sql = "INSERT INTO post (id_usuario , post) VALUE ('$id_usuario' , '$post')";
	$resp = mysqli_query ($conexao , $sql);
	
	//3. Cadeia de comandos
	if ($resp)
	{
		header("Location: mostrarPostagens.php?");
	}
		
	//4. Fechar Conexao 
	mysqli_close($conexao);
?>