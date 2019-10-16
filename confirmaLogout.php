<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <title>Sair</title>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
	    <meta charset="utf-8"/>
	    <meta name="descripition" content="Logout"/>
	    <meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
	    <link rel="stylesheet" type="text/css" href="css/confirmaLogout.css"/>
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="validadorCamposContato.js"></script>
            <script src="menu.js"></script>
	</head>
        
	<body>
            <?php session_start();?>
            <nav id="navCorrigida">
              <?php include 'menu.php';?>
            </nav>
            
             <?php
                    if(!$_SESSION['nome']) {
                       header("location: erroLogin.php");
                       die();
                    }
             ?>
            
            
            <div id="principal">
                <section id="meio">
                    </br></br></br></br></br></br></br></br>
                    <p id="sair"> Você deseja sair?</p>
                    <img style="margin-top: 50px;" alt="sair" src="imagensSite/sair.png" onclick= "javascript:window.location.href='logout.php'" id="botao1"/>
                    <img style="margin-top: 50px;" alt="cancelar" src="imagensSite/cancelar.png" onclick= "javascript:window.location.href='feed.php'" id="botao2"/>
                </section>
            </div>
            
            <footer>
                <?php echo "Você acessou como.".$_SESSION['nome']; ?> 
	        </br><p id="textFotter">Copyright &copy; The North's Birds 2014</p>
	    </footer>

	</body>
	
</html>