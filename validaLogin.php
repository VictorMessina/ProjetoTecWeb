<?php
    $salvar = false;
    if(isset($_POST['salvar']))
    {
            $salvar = true;
    }

     $email = mysql_escape_string($_POST['email']);
     $senha =  mysql_escape_string($_POST['senha']);
     
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

include 'conectaDB.php';

 
	$sql = "SELECT * FROM usuarios WHERE email='$email'";
	$resp = mysqli_query ($conexao , $sql);
        
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
                                
				header("Location: perfil.php?");
                                die();
			}
			else
			{
			header("Location: erroLogin.php");
                                die();	
			}
		}
	} 
	
	mysqli_close($conexao);
?>
