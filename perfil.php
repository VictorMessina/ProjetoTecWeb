<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Perfil</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		<link rel="stylesheet" type="text/css" href="css/menu.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="menu.js"></script>
	</head>
	
	<body>
            
            <header>
                <div id='cssmenu'>
<ul>
   <li><a href='#'>Home</a></li>
   <li class='active has-sub'><a href='#'>Perfil</a>
      <ul>
         <li class='has-sub'><a href='#'>Categoria</a>
            <ul>
               <li><a href='#'>-</a></li>
               <li><a href='#'>-</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'>lalala</a>
            <ul>
               <li><a href='#'>Sub Product</a></li>
               <li><a href='#'>Sub Product</a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='#'>About</a></li>
   <li><a href='#'>Contact</a></li>
</ul>
</div>
                
            </header>
                <form method="POST" enctype="multipart/form-data" action="upload.php"> 
                    <input type="file" name="arquivo" id="arquivo">
                    <br>
                <input type="submit" value="enviar foto"/></br>
                
                
                <footer>
		    <p>Copyright &copy; MackOnline 2014</p>
		</footer>
	
	</body>
	
</html>