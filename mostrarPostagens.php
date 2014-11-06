<!DOCTYPE html>
<html>
	<head>
		<title>Postagens</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/mostrarPostagens.css"/>
	</head>
	<body>
		<nav>			
			<img alt='titulo' src='imagensSite/titulo.png' id='titulo' />
		</nav>
		<section id='posts'>
			<p><strong>Essas são todas as suas postagens:</strong></p>
			<?php			
                            session_start();

                            $id_usuario = $_SESSION['id_usuario'];

                            include "conectaDB.php";

                            $sql = "SELECT * FROM post WHERE id_usuario = '$id_usuario'";
                            $resp = mysqli_query ($conexao , $sql);

                            if ($resp){
                                    while ($registro = mysqli_fetch_array($resp)){
                                            $id_post = $registro['id_post'];
                                            echo "Post $id_post:<br/>".$registro['post']."</br></hr></br>";
                                    }
                            }                 
                            mysqli_close($conexao);	
			?>		
			<p><img src="imagensSite/voltar.png" onclick= "javascript:window.location.href='perfil.php'"/></p>
		</section>
		<footer>
                    <?php echo "Você acessou como ".$_SESSION['nome']."."; ?>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>
	</body>
</html>