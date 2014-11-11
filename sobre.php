<!DOCTYPE html>
<html lang="pt-br">
	<head>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
	    <title>Sobre nós</title>
	    <meta charset="utf-8"/>
	    <meta name="descripition" content="sobre"/>
	    <meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
            <link rel="stylesheet" type="text/css" href="css/visual.css"/>
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script src="menu.js"></script>
	</head>
	
    <body>
           <?php session_start(); ?>
        
            <nav id="navCorrigida">
              <?php include 'menu.php';?>
            </nav>
            
            <div id="principal">
                
                <br/><img alt='imagem' id='fotoPerfil' src="<?php echo $_SESSION['imagem'];?>" />
                
                <section id="meio_sobre">
                    <p id="txt_sobre"> O Site The North's Birds, é um site criado pelos alunos da FCI do próprio Mackenzie, para ajudar os alunos de todas as faculdades presentes dentro da universidade <br/> 
                                a realizar trocas, vendas e compras de livros que não serão mais utilizados por seus donos. Este site surgiu da ideia de ajudar tanto os calouros quanto os veteranos da 
                                Universidade <br/> Presbiteriana Mackenzie, sendo assim para utilizar este site é necessário estar inscrito em algum <b> curso de nível superior </b> dento da 
                                universidade, <b> ser maior de idade </b> e  <br/> <b> possuir um TIA (número de indentificação do aluno)</b> para realizar o cadastro no site. <b> O site não se 
                                responsabiliza por qualquer problema que possa vir a ocorrer entre as trocas, vendas ou compras. Sendo assim, combine todos os detalhes com o fornecedor do livro ou 
                                dos livros que deseja adquirir. </b> Agradecemos a sua visita.</p>
                    
                    <img alt="volta" src="imagensSite/voltar.png" id='voltar_sobre'onclick= "javascript:window.location.href='perfil.php'"/> 
                    <br/><br/>
                
                 </section>
            
            </div>    
              
            
  
            <footer>
                <?php echo "Você acessou como.".$_SESSION['nome']; ?> 
                </br><p id="textFotter">Copyright &copy; The North's Birds 2014</p>
	    </footer>
            
	</body>
        
</html>