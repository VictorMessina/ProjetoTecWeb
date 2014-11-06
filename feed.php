<!DOCTYPE html>
<html lang="pt-br">
   
        
	<head>
		<title>Feed</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="feed"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/perfil.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="menu.js"></script>
	</head>
	
	<body>
            
            <nav>			
			<img alt='titulo' src='img/titulo.png' id='titulo' />
	    </nav>
            
            <div>
			<?php
				session_start();
				
				echo "<br/>";				
				echo "Olá ".$_SESSION['nome'].", seja bem-vindo(a)!<br/>";
			?>
            
                <br/><img alt='imagem' id='fotoPerfil' src="<?php echo $_SESSION['imagem']; ?>"/>
				<form action ='createPostagem.php' method='POST' id='excecao'>
				<p>Post:<p/><textarea name='post' rows='10' cols='50' maxlength='500'></textarea>
				<p><input type='submit' value='PUBLICAR'/></p>
				</form>
                
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
   
            
            <header>
              <?php include 'menu.php';?>
            </header>
            
            <footer>
			<?php echo "Você acessou como ".$_SESSION['nome']."."; ?> (<a href='index.php'><b>SAIR</b></a>)<br/>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>
	</body>
</html>