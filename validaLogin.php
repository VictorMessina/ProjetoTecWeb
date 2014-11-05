<?php

session_start();

include 'conectaDB.php';

 $email = mysql_escape_string($_POST['email']);
 $senha =  mysql_escape_string($_POST['senha']);
 
  //2. Criar e executar a query SQL
	$sql = "SELECT * FROM usuarios WHERE email='$email'";
	$resp = mysqli_query ($conexao , $sql);
	
	//3. Exibir os resultados
	if($resp)
	{
		while ($registro = mysqli_fetch_array($resp))
		{
			$nome = $registro['nome'];
			$imagem = $registro['foto'];
			if ($senha == $registro['senha'])
			{
				header("Location: perfil.php?nome=$nome&imagem=$imagem");
                                die();
			}
			else
			{
			header("Location: erroLogin.php");
                                die();	
			}
		}
	} 
	
	//4. Fechar conexão
	mysqli_close($conexao);
?>
