<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Feed</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="feed"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/perfil.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="menu.js"></script>
	</head>
	
	<body>
            <?php
            $nome=$_GET['nome'];
            $imagem=$_GET['imagem'];
            echo "<br> <p style='margin-left:20px; font-size:16pt;'>Olá $nome";
            echo "<br/><img alt='imagem' id='fotoPerfil' src='$imagem' style='heigth:100px; width:150px; border-radius:300px; margin-left:30px;' />";
            include 'conectaDB.php';
            ?>
            
            <nav>
                <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/> 
                <div id="principal">
                    
                    <?php
                    
                        echo "<h3>". $nome=$_GET['nome']; "</h3>";
                        echo "<h3>Curso: ". $_POST['curso']; "</h3>";
                        echo "<h3>Título: ". $_POST['titulo']; "</h3>";
                        echo "<h3>Autor: ". $_POST['autor']; "</h3>";
                        echo "<h3>Editora: ". $_POST['editora']; "</h3>";
                        echo "<h3>Preço: ". $_POST['preco']; "</h3>";
                        echo "<h3>". $_POST['comentario']; "</h3>";
                        
                        $imagem=$_GET['imagem'];
                        echo "<br/><img alt='imagem' id='fotoLivro' src='$imagem' style='heigth:100px; width:150px; border-radius:10px; margin-left:30px;' />";
                        
                    ?>
                    
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