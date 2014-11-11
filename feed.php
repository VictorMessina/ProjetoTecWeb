<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">       
	<head>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
	    <title>Feed</title>
	    <meta charset="utf-8"/>
	    <meta name="descripition" content="feed"/>
	    <meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
            <link rel="stylesheet" type="text/css" href="css/visual.css"/>
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script src="menu.js"></script>
	</head>
        
	<body>
                                    
            <nav  id="navCorrigida">
              <?php include 'menu.php';?>
            </nav>
            
            <div id="principal">
            
                <br/><img alt='imagem' id='fotoPerfil' src="<?php echo $_SESSION['imagem'];?>" />       
            
                   <section id="meio_feed">
                    
                        <?php			
                            $id_usuario = $_SESSION['id_usuario'];
                            include "conectaDB.php";
                            $sql = "SELECT * FROM post WHERE id_usuario = '$id_usuario'";
                            $resp = mysqli_query ($conexao , $sql);

                            if ($resp){
                                while ($registro = mysqli_fetch_array($resp)){
                                    echo "<table border='1' style='width:500px; height:300px; margin-top:50px;' id='meio_feed'>";
                                    echo "<tr><td colspan='5' style='background-color:#e9eaed;'>Post: ".$id_post = $registro['id_post']."</br></hr></br></td></tr>";
                                    echo "<tr><td>Título:<br/>".$registro['titulo']."</br></hr></br></td>";
                                    echo "<td>Autor:<br/>".$registro['autor']."</br></hr></br></td>";
                                    echo "<td>Editora:<br/>".$registro['editora']."</br></hr></br></td>";
                                    echo "<td>Curso:<br/>".$registro['curso']."</br></hr></br></td>";
                                    echo "<td>Preço:<br/>".$registro['preco']."</br></hr></br></td></tr>";
                                    echo "<tr><td colspan='5' style='background-color:#e9eaed;'>Comentario:<br/>".$registro['comentario']."</br></hr></br></td></tr>";
                                    echo "</table>";
                                }
                            }
                            mysqli_close($conexao);	
                        ?>
            
                       <a href="perfil.php" ><img alt="voltar" style="margin-top: 180px;" src="imagensSite/voltar.png"/></a>
                   </section>
            </div>    
            </br>  
            
  
            <footer>
                <?php echo "Você acessou como.".$_SESSION['nome']; ?> 
                </br><p id="textFotter">Copyright &copy; The North's Birds 2014</p>
	    </footer>
    
        </body>
        
</html>