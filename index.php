<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Bem-vindo!!</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
			
                    
	</head>
	
	<body>
	        
                <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/> 
            
		<header id="formulario">
                
                <form action = "login.php" method = "post">    
                    <div>
                        <input type="email" placeholder="E-mail" name="campoemail" /> 
		        <input type="password" placeholder="Senha" name="camposenha"/>
		        <input type="submit" value="Entrar"/>
                    <div>
                        <br/>
			<br/>
                </form>
                    
		</header>
            
            
                <img alt="birds" src="imagensSite/birds.gif" id='birds'/>
            
		
		<section id="form">
                    <h1>Ainda não possui uma conta? Cadastre-se </h1> <br/>
                    <input type ="submit" value="Cadastre-se!" onclick= "javascript:window.location.href='cadastro.php'" id='link'/>
		</section>
		
		<br/>
                
                <footer>
		    <p>Copyright &copy; MackOnline 2014</p>
		</footer>
	
	</body>
	
</html>