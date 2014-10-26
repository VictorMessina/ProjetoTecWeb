<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
		<title>Cadastro</title>
		<meta charset="utf-8"/>
		<meta name="descripition" content="Formulário"/>
		<meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
		<link rel="stylesheet" type="text/css" href="css/cadastro.css"/>

	</head>
	
        <body>
	    <?php include 'conectaDB.php';?>
            <nav>
                <img alt="titulo" src="imagensSite/titulo2.png" id='titulo2'/> 
            </nav>    
			
            
            <div id="principal">
                        <?php     
                           echo "<form id='form' method='post' action='create.php'>
                                </br></br></br>
                                <input type='text' placeholder='TIA' name='tia' required /><br/><br/>
                                <input type='text' placeholder='Nome' name='nome' required />   
                                <input type='text' placeholder='Sobrenome' name='sobrenome' required /> <br/> <br/>
				<strong> Coloque sua foto de perfil aqui</strong> <input type='file' name='foto' required/> <br/><br/>
                                <input type='email' placeholder='E-mail' name='email' required/> <br/>
				<br/>
                                <input type='text' placeholder='Curso' name='curso' required /> <br/>
                                <br/>
                                <input type='password' placeholder='Criar senha' name='senha' required/> <h4>*A senha deve possuir 6 dígitos, entre números e letras.</h4>
				<br/>
				<Data de nascimento<br/>
				<select name='dia'>
					<option value='Dia'>Dia</option>
					<option value='1'>1</option>
					<option value='2'>2</option>
					<option value='3'>3</option>
					<option value='4'>4</option>
					<option value='5'>5</option>
					<option value='6'>6</option>
					<option value='7'>7</option>
					<option value='8'>8</option>
					<option value='9'>9</option>
					<option value='10'>10</option>
					<option value='11'>11</option>
					<option value='12'>12</option>
					<option value='13'>13</option>
					<option value='14'>14</option>
					<option value='15'>15</option>
					<option value='16'>16</option>
					<option value='17'>17</option>
					<option value='18'>18</option>
					<option value='19'>19</option>
					<option value='20'>20</option>
					<option value='21'>21</option>
					<option value='22'>22</option>
					<option value='23'>23</option>
					<option value='24'>24</option>
					<option value='25'>25</option>
					<option value='26'>26</option>
					<option value='27'>27</option>
					<option value='28'>28</option>
					<option value='29'>29</option>
					<option value='30'>30</option>
					<option value='31'>31</option>
				</select>
				
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
                                        <option value='ano'>Ano</option>
					<option value='1996'>1996</option>
					<option value='1995'>1995</option>
					<option value='1994'>1994</option>
					<option value='1993'>1993</option>
					<option value='1992'>1992</option>
					<option value='1991'>1991</option>
					<option value='1990'>1990</option>
					<option value='1989'>1989</option>
					<option value='1988'>1988</option>
					<option value='1987'>1987</option>
					<option value='1986'>1986</option>
					<option value='1985'>1985</option>
					<option value='1984'>1984</option>
					<option value='1983'>1983</option>
					<option value='1982'>1982</option>
					<option value='1981'>1981</option>
					<option value='1980'>1980</option>
					<option value='1979'>1979</option>
					<option value='1978'>1978</option>
					<option value='1977'>1977</option>
					<option value='1976'>1976</option>
					<option value='1975'>1975</option>
					<option value='1974'>1974</option>
					<option value='1973'>1973</option>
					<option value='1972'>1972</option>
					<option value='1971'>1971</option>
					<option value='1970'>1970</option>
					<option value='1969'>1969</option>
					<option value='1968'>1968</option>
					<option value='1967'>1967</option>
					<option value='1966'>1966</option>
					<option value='1965'>1965</option>
					<option value='1964'>1964</option>
					<option value='1963'>1963</option>
					<option value='1962'>1962</option>
					<option value='1961'>1961</option>
					<option value='1950'>1950</option>
				</select>
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