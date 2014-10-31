<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Cadastro</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		<link rel="stylesheet" type="text/css" href="css/cadastro.css"/>
                <script type="text/javascript" src="validaCamposCadastro.js"></script>

	</head>
	
        <body>
	    <?php include 'conectaDB.php';?>
            <nav>
                <img alt="titulo" src="imagensSite/titulo2.png" id='titulo2'/> 
            </nav>    
			
            
            <div id="principal">
                        <?php     
                           echo "<form id='form' name='form' method='post' action='create.php' onsubmit='return validaDados()'>
                                </br></br></br>
                                <input type='text' placeholder='TIA' name='tia' /><br/><br/>
                                <input type='text' placeholder='Nome' name='nome'  />   
                                <input type='text' placeholder='Sobrenome' name='sobrenome'  /> <br/> <br/>
				<strong> Coloque sua foto de perfil aqui</strong> <input type='file' name='foto' required/> <br/><br/>
                                <input type='email' placeholder='E-mail' name='email' /> <br/>
				<br/>
                                <input type='text' placeholder='Curso' name='curso' /> <br/>
                                <br/>
                                <input type='password' placeholder='Criar senha' name='senha' /> <h4>*A senha deve possuir 6 dígitos, entre números e letras.</h4>
				<br/>
				<Data de nascimento<br/>
				<select name='dia'>
                                        <option value='dia'>Dia</option>";
                                        for($i = 1; $i <= 31; $i++){
                                            echo "<option value='dia'>$i</option> ";                                          
                                        }
                                        
                            echo "</select>
				
				<select name='mes'>
					<option value='Mês'>Mês</option>
					<option value='01'>Jan</option>
					<option value='02'>Fev</option>
					<option value='03'>Mar</option>
					<option value='04'>Abr</option>
					<option value='05'>Maio</option>
					<option value='06'>Jun</option>
					<option value='07'>Jul</option>
					<option value='08'>Ago</option>
					<option value='09'>Set</option>
					<option value='10'>Out</option>
					<option value='11'>Nov</option>
					<option value='12'>Dez</option>
				</select>
				
				<select name='ano'>
                                        <option value='ano'>Ano</option>";
                                        for($i = 1996; $i >= 1950; $i--){
                                            echo "<option value='ano'>$i</option> ";                                          
                                        }
                                        
                            echo "</select>
				<br/>
				<br/>
				
				
				<input type='radio' name='sexo' value='M'/>Masculino<br/>
				<input type='radio' name='sexo' value='F'/>Feminino<br/>
				<br/>
				
				<input type='submit' id='btnSubmit' value='Abrir conta'/><br/>
                                
                            </form>" ;
                        ?>
            </div>
                
                <footer>
		    <p>Copyright &copy; MackOnline 2014</p>
		</footer>
	
	</body>
	
</html>