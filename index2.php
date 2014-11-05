<!DOCTYPE html>
<html>
	<head>
		<title>Bem-vindo!</title>
                <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	</head>
	<body>
            <?php include 'conectaDB.php';?>
            <nav>			
                <img alt='titulo' src='imagensSite/titulo.png' id='titulo' onclick= "javascript:window.location.href='index2.php'" />
                
                    <?php echo "<form action='validaLogin.php' method='POST'>			
                        <input type='text' placeholder='E-mail' name='email' required /> 
                        <input type='password' placeholder='Senha' name='senha' required/>
                        <input type='submit' value='Entrar'/>
                    </form>";
                    ?>
                
            </nav>
		<div>
                    <img alt="birds" src="imagensSite/birds.gif" id='birds'/>
                    <h1>Parabéns pelo cadastro! Faça seu login!</h1>
		</div>
		<footer>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>
	</body>
</html>