<html>
	  <head>
		<title>Exemplo</title>
		<style type="text/css">
                    img { 
                        margin-top:-11px;
                        border-radius: 10px 10px 10px 10px;
                    }
                    
                    #titulo{
                        width:25%;
                        height:50px;
                        margin-top:0px;
                        margin-left:10%;
                    }
                    
		</style>
	  </head>
<body>

<?php
      echo "<div id='cssmenu'>
                    <ul>
                        <li><a href='feed.php'>Home</a></li>
                        <li><a href='perfil.php'>Perfil</a></li>
                        <li><a href='sobre.php'>Quem somos</a></li>
                        <li><a href='contato.php'>Contato</a></li>
                        <li><a href='confirmaLogout.php'>Sair</a></li> 
                        <img alt='titulo' src='imagensSite/titulo.png' id='titulo' > 
                </div>"
?>

          
          </body>
	</html>