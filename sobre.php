<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Sobre nós</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="sobre"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/sobre.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="menu.js"></script>
	</head>
	
    <body>
           <?php session_start(); ?> 
        <nav>
            <img alt="titulo" src="imagensSite/titulo.png" id='titulo'/>
        </nav>     
                
        <header>
            <?php include 'menu.php';?>
        </header>
          
        <br/><img alt='imagem' id='fotoPerfil' src="<?php echo $_SESSION['imagem'];?>" style='heigth:100px; width:150px; border-radius:300px; margin-left:30px;'/>
                
        <div id="principal">
            <section>
                <p id="txt"> 
                O Site The North's Birds, é um site criado pelos alunos da FCI do proprio Mackenzie, para ajudar os alunos de todas as faculdades presentes dentro da universidade <br/> a realizar trocas, vendas e  
                compras de livros que não vão mais ser utilizados por seus donos. Este site surgiu da ideia de ajudar tanto os calouros quanto os veteranos da Universidade <br/> Presbiteriana Mackenzie, sendo assim
                para utilizar este site é necessario estar inscrito em algum <b> curso de nivel superior </b> dento da universidade, <b> ser maior de idade </b> e  <br/> <b> possuir um TIA (numero de indentificação do aluno)</b> para realizar o cadastro no site.
                <b> O site não se responsabiliza por qualquer problema que possa vir a acontecer entre as trocas, vendas ou compras então combine todos os detalhes com o fornecedor do livro ou dos livros que deseja adquirir. </b>
                O site Agradece a sua visita.
                <br/>
            </section>
        </div>
            
        <footer>
            <?php echo "Você acessou como ".$_SESSION['nome']."."; ?> 
            Copyright &copy; The North's Birds 2014
        </footer>
	
    </body>
	
</html>