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
				include "menu.inc";
			?>
		</nav>
		<div>
			<?php
				session_start();
				
				echo "<br/>";				
				echo "Olá ".$_SESSION['nome'].", seja bem-vindo(a)!<br/>";
			?>
				<br/><img alt='imagem' id='fotoPerfil' src="<?php echo $_SESSION['imagem']; ?>"/>
				<form action ='inserirTabela.php' method='POST' id='excecao'>
				<p>Post:<p/><textarea name='post' rows='10' cols='50' maxlength='500'></textarea>
				<p><input type='submit' value='PUBLICAR'/></p>
				</form>
		</div>
		<footer>
			<?php echo "Você acessou como ".$_SESSION['nome']."."; ?> (<a href='index.php'><b>SAIR</b></a>)<br/>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>
	</body>
</html>