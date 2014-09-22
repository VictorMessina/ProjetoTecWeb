<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Quem somos</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		
	</head>
	
	<body>
        
            <header id="formulario">
                <img alt="logo" src="imagensSite/mackenzie.jpg"/>
				
		<h1>Contato</h1><br/>
		<h3>Gostaria de dar sugestões, fazer críticas e/ou reclamações? Entre em contato conosco!</h3>
                <br/><br/>
		<form>
                    Nome: <input type="text" placeholder="Nome" name="camponome"/><br/>
                    Email: <input type="email" placeholder="Email" name="campoemail"/><br/><br/> 
                    <br/>Escreva um comentário:<br/><textarea name="mensagem" rows="10" cols="50"></textarea><br/><br/>
                    <br/>Dê uma nota de 0 a 5:<br/>
                            <input type="radio" name="nota" value="0"/>0<br/>
                            <input type="radio" name="nota" value="1"/>1<br/>
                            <input type="radio" name="nota" value="2"/>2<br/>
                            <input type="radio" name="nota" value="3"/>3<br/>
                            <input type="radio" name="nota" value="4"/>4<br/>
                            <input type="radio" name="nota" value="5" checked />5<br/><br/>
                            <input type="submit" value="Enviar"/><br/>
                </form>
                <br/><br/><a href="perfil.php" style="text-decoration:none; color:#000;">Voltar</a>
            </header>
		
		<br/><footer>
		<small>Copyright &copy; The North's Birds 2014</small>
		</footer>
	
	</body>
</html>