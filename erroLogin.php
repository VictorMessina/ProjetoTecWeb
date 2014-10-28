<!DOCTYPE html>
<html>
	<head>
		<title>Erro Login</title>
                <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<meta charset="utf-8">
                <meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/erroLogin.css"/>
	</head>
        <body>
       
            <nav>
                <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/> 
             	         
                <form action = "validaLogin.php" method = "post">    
                    <input type="text" placeholder="E-mail" name="email" /> 
	            <input type="password" placeholder="Senha" name="senha"/>
		    <input type="submit" value="Entrar"/>
                </form>
            </nav>
                                
            <div>
                <h1> Email ou senha inválidos, volte e digite suas informações corretamente</h1>
                <img alt="voltar" src="imagensSite/voltar.png" onclick= "javascript:window.location.href='index.php'"/> 
            </div>
                        
            <footer>
                <p>Copyright &copy; MackOnline 2014</p>
            </footer>
           
        </body>
</html>