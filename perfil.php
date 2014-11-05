<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Perfil</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="perfil"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/perfil.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="menu.js"></script>
	</head>
	
	<body>

	<?php
            $nome=$_GET['nome'];
            $imagem=$_GET['imagem'];
            echo "Olá $nome, seja bem-vindo(a)!<br/>";
            echo "<br/><img alt='imagem' id='fotoPerfil' src='$imagem'/>";
        ?>
	
	 <?php include 'conectaDB.php';?>
            
            <nav>
                <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/>
                
            </nav>     
                
            <header>
                <?php include 'menu.php';?>
            <header>
                
                
            <div id="principal">
                <form method="POST" enctype="multipart/form-data" action="upload.php"> 
                    Atualizar foto do perfil:
                    <input type="file" name="arquivo" id="arquivo">
                    <br>
                    <input type="submit" value="enviar foto"/></br>
                    <br><br>
                 </form>
            
                
            
                <form method="POST" enctype="multipart/form-data" action="feed.php"> 
                    <br><br><br><br><br><br>
                    Faça aqui suas postagens:<br><br>
                    Título:
                    <br><textarea name="titulo" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Autor:
                    <br><textarea name="autor" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Editora:
                    <br><textarea name="editora" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Preço:
                    <br><textarea name="preço" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Comentário:
                    <br><textarea name="comentario" rows="10" cols="50"></textarea><br>
                    <br/><br/>
                    Inserir imagem do livro:
                    <br><input type="file" name="arquivo" id="arquivo">
                    <br>
                    <br><br>
                    <input type="submit" value="Adicionar"/></br>
                </form>
                       
            </div>
            
                <footer>
                    <?php echo "Você acessou como $nome."; ?>  <form action="logout.php"> <input type="submit" value="Sair"/> </form>
		    <p>Copyright &copy; MackOnline 2014</p>
		</footer>
	
	</body>
	
</html>
