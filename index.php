<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <title>Bem-vindo!!</title>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
	    <meta charset="utf-8"/>
	    <meta name="descripition" content="Formulário"/>
	    <meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
	    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	</head>
        
	<body>
            
            <?php 
            
                if(isset($_SESSION['nome'])){
                    session_destroy();
                }
            
                if(isset($_SESSION['imagem'])){
                    session_destroy();
                }
            	
                $email = "";
                    if(isset($_COOKIE['email'])){
                        $email = $_COOKIE['email'];
                    }  
                $senha = "";
                    if(isset($_COOKIE['senha'])){
                        $senha = $_COOKIE['senha'];
                    }
            ?>
            
            <nav>
               
                <table>
                    <tr>
                        <td>
                            <form action = 'validaLogin.php' method = 'post'>    
                                Email:<input type='text' placeholder='E-mail' name='email' required /> 
                                Senha:<input type='password' placeholder='Senha' name='senha' required />
                                <input type='submit' value='Entrar' id="entrar"/>
                                <br/><br/>
                                <input name='salvar' type='checkbox' /> <p id="salvar"> Desejo salvar meus dados  </p>
                            </form>
                        </td>
                    </tr>
                </table>
            </nav> 
                
            
            
                        		
            <div id="principal">
                <section id="meio">
                    <img alt="birds" src="imagensSite/birds.gif" id='birds'/>
                    <h1>Ainda não possui uma conta? Cadastre-se!! </h1> <br/>
                    <img alt="cadastrar" src="imagensSite/cadastrar.png" onclick= "javascript:window.location.href='cadastro.php'" id='link'/> 
                </section>
            </div>
	        
            <footer>
	        </br><p id="textFotter">Copyright &copy; The North's Birds 2014</p>
	    </footer>

	</body>
	
</html>