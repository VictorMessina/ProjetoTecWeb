<?php 

        $email = $_POST['email'];
        $senha= $_POST['senha'];
	
	include "validaLogin.php";
	$resposta = autentica($email,$senha);
	
	if($resposta == true)
	{
		header("Location: perfil.php");
	} else {
		header("Location: erroLogin.php");
	}
?>