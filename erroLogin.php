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
        
            <?php include 'conectaDB.php';?>
            
            <nav></nav>  
                                
            <div>
                <h1> Email ou senha inválidos, volte e digite suas informações corretamente</h1>
                <img alt="voltar" src="imagensSite/voltar.png" onclick= "javascript:window.location.href='index.php'"/> 
            </div>
                        
            <footer>
	        </br><p id="textFotter">Copyright &copy; The North's Birds 2014</p>
	    </footer>
           
        </body>
</html>