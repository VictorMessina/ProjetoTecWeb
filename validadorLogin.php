<?php
	$salvar = false;
	if(isset($_POST['salvar']))
	{
		$salvar = true;
	}
	
	$email = $_POST['emailLogin'];
	$senha = $_POST['senhaLogin'];
	
	session_start();
	$_SESSION['email'] = $email;
		
	if($salvar)
	{
		setcookie("email", $email, time()+(60*60*24*30));
		setcookie("senha", $senha, time()+(60*60*24*30));
	} else{
		setcookie("usuario", "", time()+(60*60*24*30));
		setcookie("senha", "", time()+(60*60*24*30));
	}
	
	//1. Criar conexão 
	include "conectaDB.php";
	
	//2. Criar e executar a query SQL
	$sql = "SELECT * FROM usuarios WHERE email='$email'";
	$resp = mysqli_query ($conexao , $sql);
	
	//3. Exibir os resultados
	if($resp)
	{
		while ($registro = mysqli_fetch_array($resp))
		{
			if ($senha == $registro['senha'])
			{
				$id_usuario = $registro['id_usuario'];
				$nome = $registro['nome'];
				$imagem = $registro['foto'];
				
				$_SESSION['id_usuario'] = $id_usuario;
				$_SESSION['nome'] = $nome;
				$_SESSION['imagem'] = $imagem;
				
				header("Location: home1.php");
			}
			else
			{
				echo "Senha incorreta.";
				echo "<form action='index.php'>";
					echo "<p><input type='submit' value='VOLTAR'/></p>";
				echo "</form>";
			}
		}
	} else{
		echo "Email não cadastrado. <a href='cadastro.php'><b>Cadastre-se</b></a>.";
	}
	
	//4. Fechar conexão
	mysqli_close($conexao);
?>