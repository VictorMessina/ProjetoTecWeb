<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
	    <title>Perfil</title>
	    <meta charset="utf-8"/>
	    <meta name="descripition" content="perfil"/>
	    <meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
            <link rel="stylesheet" type="text/css" href="css/visual.css"/>
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script src="menu.js"></script>
	</head>
	
	<body>
            <?php include 'conectaDB.php';?>        
            
            <nav  id="navCorrigida">
              <?php include 'menu.php';?>
            </nav>
            
            <div id="principal">
                
                <?php
                session_start();
                if( isset($_SESSION['nome'])){
                    echo "Olá ".$_SESSION['nome'].", seja bem-vindo(a)!<br/>";
                }
                ?>
               
                <br/><img alt='imagem' id='fotoPerfil' src="<?php echo $_SESSION['imagem'];?>" />
                
                <section id="meio_perfil">
                    
                    <form method="POST" enctype="multipart/form-data" action="createPostagem.php"> 
                        <br><br>
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
                        Curso:
                        <br><textarea name="curso" rows="1" cols="50"></textarea><br>
                        <br/><br/>
                        Preço:
                        <br><textarea name="preco" rows="1" cols="50"></textarea><br>
                        <br/><br/>
                        Comentário:
                        <br><textarea name="comentario" rows="10" cols="50"></textarea><br>
                        <br/><br/>
                        <input type="submit" value="Adicionar" id="adicionar"/></br>
                    </form> 
                                
                </section
            
            </div>    
              
            
  
            <footer>
                <?php echo "Você acessou como.".$_SESSION['nome']; ?> 
                </br><p id="textFotter">Copyright &copy; The North's Birds 2014</p>
	    </footer>
            
	</body>
        
</html>