<?php session_start(); ?>
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
            
            <nav>			
		<img alt='titulo' src='imagensSite/titulo.png' id='titulo' />
	    </nav>
            
            <header>
              <?php include 'menu.php';?>
            </header>
            
            <div>
            <br/><img alt='imagem' id='fotoPerfil' src="<?php echo $_SESSION['imagem'];?>" style='heigth:100px; width:150px; border-radius:300px; margin-left:30px;'/>    
                <?php			

                    $id_usuario = $_SESSION['id_usuario'];

                    include "conectaDB.php";

                    $sql = "SELECT * FROM post WHERE id_usuario = '$id_usuario'";
                    $resp = mysqli_query ($conexao , $sql);

                    if ($resp){
                            while ($registro = mysqli_fetch_array($resp)){
                                    echo "post: ".$id_post = $registro['id_post']."</br></hr></br>";
                                    echo "titulo:<br/>".$registro['titulo']."</br></hr></br>";
                                    echo "autor:<br/>".$registro['autor']."</br></hr></br>";
                                    echo "editora:<br/>".$registro['editora']."</br></hr></br>";
                                    echo "curso:<br/>".$registro['curso']."</br></hr></br>";
                                    echo "preço:<br/>".$registro['preco']."</br></hr></br>";
                                    echo "comentario:<br/>".$registro['comentario']."</br></hr></br>";
                            }
                    }

                    mysqli_close($conexao);	

                ?>
             
                </div>
  
            <footer>
            <?php echo "Você acessou como ".$_SESSION['nome']."."; ?> 
	       Copyright &copy; MackOnline 2014
	    </footer>
	</body>
</html>