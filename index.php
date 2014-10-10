<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Bem-vindo!!</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
			
                    <script type="text/javascript">
			var tempoP=0;
			
			setInterval(trocaHora,1000);
			
			function trocaHora(){
				var date = new Date();
				var horas = date.getHours();
				var minutos = date.getMinutes();
				var segundos = date.getSeconds();
				
				if(horas<10) horas = "0"+horas;
				if(minutos<10) minutos = "0"+minutos;
				if(segundos<10) segundos = "0"+segundos;
				
				var texto = horas+":"+minutos+":"+segundos;
				
				document.getElementById("relogio").innerHTML = texto;
			}
			
		    </script>
	</head>
	
	<body>
		
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
                    <h3>Ainda não possui uma conta? Cadastre-se </h3> <br/>
                    <input type ="submit" value="Cadastre-se!" onclick= "javascript:window.location.href='cadastro.php'"/>
		</section>
		
		<br/>
                
                <footer>
		    <p>Copyright &copy; MackOnline 2014</p>
		</footer>
	
	</body>
	
</html>