<?php
	session_start();
	
	$post = $_POST['post'];
	$id_usuario = $_SESSION['id_usuario'];
	
        
	include "conectaDB.php";
	
	 
	$sql = "INSERT INTO post (id_usuario , post) VALUE ('$id_usuario' , '$post')";
	$resp = mysqli_query ($conexao , $sql);
	
	
	if ($resp)
	{
		header("Location: mostrarPostagens.php?");
	}
		
	 
	mysqli_close($conexao);
?>