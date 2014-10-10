<?php 

        $email = $_POST['campoemail'];
        $senha= $_POST['camposenha'];
	
	include "validaLogin.php";
	$resposta = autentica($email,$senha);
	
	if($resposta == true)
	{
		header("Location: perfil.php");
	} else {
		header("Location: erroLogin.php");
	}
?>