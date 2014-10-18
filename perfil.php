<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Perfil</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
                <link rel="stylesheet" type="text/css" href="css/perfil.css"/>
                <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
                <script src="menu.js"></script>
	</head>
	
	<body>
            
            <nav>
                <div>
                    
                    <?php
                    
                        echo "<h3>". $_POST['camponome']; "</h3>";
                    
                    ?>
                    
                </div>
                
                 <form method="POST" enctype="multipart/form-data" action="upload.php"> 
                    Atualizar foto do perfil:
                    <input type="file" name="arquivo" id="arquivo">
                    <br>
                    <input type="submit" value="enviar foto"/></br>
                    <br><br>
                 </form>
            </nav>  
            
            <header>
                <div id='cssmenu'>
                    <ul>
                        <li><a href='feed.php'>Home</a></li>
                        <li><a href='perfil.php'>Perfil</a></li>
                       <li class='active has-sub'><a href='#'>Categorias</a>
                          <ul>
                             <li class='has-sub'><a href='#'>Cursos</a>
                                <ul>
                                   <li><a href='#'>-</a></li>
                                   <li><a href='#'>-</a></li>
                                </ul>
                             </li>
                             <li class='has-sub'><a href='#'>lalala</a>
                                <ul>
                                   <li><a href='#'>Sub Product</a></li>
                                   <li><a href='#'>Sub Product</a></li>
                                </ul>
                             </li>
                          </ul>
                       </li>
                       <li><a href='sobre.php'>Quem somos</a></li>
                       <li><a href='contato.php'>Contato</a></li>
                    </ul>
                </div>
            </header>
            
                <input type="hidden" name="tia" value="<?php echo $_POST['tia']; ?>"> 
                <input type="hidden" name="camponome" value="<?php echo $_POST['camponome']; ?>"> 
 		<input type="hidden" name="campoemail" value="<?php echo $_POST['campoemail']; ?>"> 
 		<input type="hidden" name="campocurso" value="<?php echo $_POST['campocurso']; ?>"> 
 		<input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>"> 
 		
                
            
                <form method="POST" enctype="multipart/form-data" action="upload.php"> 
                    <br><br><br><br><br><br>
                    Faça aqui suas postagens:<br><br>
                    Título:
                    <br><textarea name="mensagem" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Autor:
                    <br><textarea name="mensagem" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Editora:
                    <br><textarea name="mensagem" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Preço:
                    <br><textarea name="mensagem" rows="1" cols="50"></textarea><br>
                    <br/><br/>
                    Comentário:
                    <br><textarea name="mensagem" rows="10" cols="50"></textarea><br>
                    <br/><br/>
                    Inserir imagem do livro:
                    <input type="file" name="arquivo" id="arquivo">
                    <br>
                    <input type="submit" value="enviar"/></br>
                    <br><br>
               
                
                <footer>
		    <p>Copyright &copy; MackOnline 2014</p>
		</footer>
	
	</body>
	
</html>