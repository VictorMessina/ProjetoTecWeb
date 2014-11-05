<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Quem somos</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/contato.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script type="text/javascript" src="validadorCamposContato.js"></script>
                <script src="menu.js"></script>
		
	</head>

    <body>    
	<nav>
            <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/>
        </nav>     
                
        <header>
            <?php include 'menu.php';?>
        </header>
		
        <div id="principal">
            <section>
                <h1>Contato</h1><br/>
		<h2>Gostaria de dar sugestões, fazer críticas e/ou reclamações? Entre em contato conosco!</h3>
                <br/>
                <br/>
                
                <form name="form1" method="post" onsubmit="return validaDados()">
                    Nome: <input type="text" placeholder="Nome" name="nome" required/><br/>
                    Email: <input type="email" placeholder="Email" name="email" required/><br/><br/> 
                    <br/>Escreva um comentário:<br/><textarea name="mensagem" rows="10" cols="50" id="mensagem"></textarea><br/><br/>
                    <br/>Dê uma nota de 0 a 5:<br/>
                            <input type="radio" name="nota" value="0"/>0<br/>
                            <input type="radio" name="nota" value="1"/>1<br/>
                            <input type="radio" name="nota" value="2"/>2<br/>
                            <input type="radio" name="nota" value="3"/>3<br/>
                            <input type="radio" name="nota" value="4"/>4<br/>
                            <input type="radio" name="nota" value="5" checked />5<br/><br/>
                            <input type="submit" value="Enviar"/><br/>
                </form>
                
                <img alt="volta" src="imagensSite/voltar.png" id='mackenzie'onclick= "javascript:window.location.href='perfil.php'"/> 
                <br/><br/>
            <section>    
        </div>        
        	
		<br/>
                
        <footer>
	    <p>Copyright &copy; The North's Birds 2014</p>
	</footer>
	
    </body>
</html>