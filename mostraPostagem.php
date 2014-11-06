<!DOCTYPE html>
<html>
	<head>
		<title>Bem-vindo!</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<nav>			
			<img alt='titulo' src='img/titulo.png' id='titulo' />
		</nav>
		<section id='posts'>
			<p><strong>Essas são todas as suas postagens:</strong></p>
			<?php			
				session_start();
				
				
				
				include "conectaDB.php";
				
				
				$sql = "SELECT * FROM post WHERE post = '$post'";
				$resp = mysqli_query ($conexao , $sql);
				
				
				if ($resp){
					while ($registro = mysqli_fetch_array($resp)){
						$id_post = $registro['id_post'];
						echo "Post $id_post:<br/>".$registro['post']."</br></hr></br>";
					}
				}
				
				 
				mysqli_close($conexao);	
			?>		
			<p><img src="img/voltar.png" onclick= "javascript:window.location.href='home1.php'"/></p>
		</section>
		<footer>
			<?php echo "Você acessou como ".$_SESSION['nome']."."; ?> (<a href='index.php'><b>SAIR</b></a>)<br/>
	        <p>Copyright &copy; MackOnline 2014</p>
	    </footer>
	</body>
</html>