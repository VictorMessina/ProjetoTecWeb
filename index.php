<!DOCTYPE html>
<html lang="pt-br">
	<head>
		
		<title>Bem-vindo!!</title>
                <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	</head>
	
	<body>
        <?php include 'conectaDB.php';?>
            <nav>
                <img alt="titulo" src="imagensSite/titulo.png" id='titulo' /> 
             	         
                <?php  echo "<form action = 'validaLogin.php' method = 'post'>    
                    <input type='text' placeholder='E-mail' name='email' /> 
	            <input type='password' placeholder='Senha' name='senha'/>
		    <input type='submit' value='Entrar'/>
                    </form>";
                ?>
            </nav>    
		                        		
	    <div>
                <img alt="birds" src="imagensSite/birds.gif" id='birds'/>
                <h1>Ainda não possui uma conta? Cadastre-se!! </h1> <br/>
                <img alt="cadastrar" src="imagensSite/cadastrar.png" onclick= "javascript:window.location.href='cadastro.php'" id='link'/> 
            </div>
	        
            <footer>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>

	</body>
	
</html>