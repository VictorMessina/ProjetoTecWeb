<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Feed</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/perfil.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="menu.js"></script>
	</head>
	
	<body>
            
            <nav>
                <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/> 
                <div>
                    
                    <?php
                    
                        echo "<h3>". $_POST['nome']; "</h3>";
                        echo "<h3>". $_POST['campocurso']; "</h3>";
                        echo "<h3>". $_POST['titulo']; "</h3>";
                        echo "<h3>". $_POST['autor']; "</h3>";
                        echo "<h3>". $_POST['editora']; "</h3>";
                        echo "<h3>". $_POST['preço']; "</h3>";
                        echo "<h3>". $_POST['comentario']; "</h3>";
                        echo $_FILES['arquivo'] ['name']; 
                        echo $_FILES['arquivo'] ['tmp_name']; 
                        echo $_FILES['arquivo'] ['type']; 
                        echo $_FILES['arquivo'] ['size']; 
                        
                        
                    
                    ?>
                    
                    <input type="hidden" name="titulo" value="<?php echo $_POST['titulo']; ?>"> 
                    <input type="hidden" name="autor" value="<?php echo $_POST['autor']; ?>"> 
                    <input type="hidden" name="editora" value="<?php echo $_POST['editora']; ?>"> 
                    <input type="hidden" name="preço" value="<?php echo $_POST['preço']; ?>"> 
                    <input type="hidden" name="comentario" value="<?php echo $_POST['comentario']; ?>"> 
                    
                </div>
            </nav>  
            
            <header>
              <?php include 'menu.php';?>
            </header>
            
                <footer>
		    <p>Copyright &copy; MackOnline 2014</p>
		</footer>	
	</body>
</html>