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
	  
            <nav>
                <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/> 
             	         
                <form action = "login.php" method = "post">    
                    <input type="email" placeholder="E-mail" name="email" /> 
	            <input type="password" placeholder="Senha" name="senha"/>
		    <input type="submit" value="Entrar"/>
                </form>
            </nav>    
		                        		
	    <div id="principal">
                <img alt="birds" src="imagensSite/birds.gif" id='birds'/>
                <h1>Ainda não possui uma conta? Cadastre-se </h1> <br/>
                <input type ="submit" value="Cadastre-se!" onclick= "javascript:window.location.href='cadastro.php'" id='link'/>
	    </div>
	        
            <footer>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>

	</body>
	
</html>