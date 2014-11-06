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
			<?php
				include "menu.inc";
			?>
		</nav>
		<section id='posts'>
			<p><strong>Essas são todas as suas postagens:</strong></p>
			<?php			
				session_start();
				
				$id_usuario = $_SESSION['id_usuario'];
				
				//1. Criar conexao
				include "conectaDB.php";
				
				//2. Criar e executar a query SQL 
				$sql = "SELECT * FROM post WHERE id_usuario = '$id_usuario'";
				$resp = mysqli_query ($conexao , $sql);
				
				//3. Exibir resultados
				if ($resp){
					while ($registro = mysqli_fetch_array($resp)){
						$id_post = $registro['id_post'];
						echo "Post $id_post:<br/>".$registro['post']."</br></hr></br>";
					}
				}
				
				//4. Fechar Conexao 
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