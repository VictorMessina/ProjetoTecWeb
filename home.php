<!DOCTYPE html>
<html>
	<head>
		<title>Bem-vindo!</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<nav>			
			<img alt='titulo' src='img/titulo.png' id='titulo' />
			<?php
				$email = "";			
				if(isset($_COOKIE['emailLogin']))
				{
					$email = $_COOKIE['emailLogin'];
				}
				
				$senha = "";
				if(isset($_COOKIE['senhaLogin']))
				{
					$senha = $_COOKIE['senhaLogin'];
				}
			?>
			<form action='validadorLogin.php' method='POST'>			
				<p><b>Email:</b><input name='emailLogin' type='email' placeholder='Seu email aqui' required/>
				<b>Senha:</b><input name='senhaLogin' type='password' placeholder='Sua senha aqui' required/>
				<p>Desejo salvar meus dados<input name="salvar" type="checkbox" checked/></p>
				<input type='submit' value='ENTRAR'/></p>			
			</form>
			<?php
				include "menu.inc";
			?>
		</nav>
		<div>
			<img alt="birds" src="img/birds.gif" id='birds'/>
			<h1>Parabéns pelo cadastro! Faça seu login!</h1>
		</div>
		<footer>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>
	</body>
</html>