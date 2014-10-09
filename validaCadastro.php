<!DOCTYPE html>
<html lang="pt-br">
	<head>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
            <meta charset="utf-8"/>
            <title>valida dados</title>
        </head>            
            <body>
                <?php
                    if(empty($_POST['camponome'])){echo "Verifique se o campo Nome esta preenchido.<br>"; $erro=TRUE;}
                    if(empty($_POST['campoSobrenome'])){echo "Verifique se o campo Sobrenome esta preenchido.<br>"; $erro=TRUE;}
                    if(empty($_POST['campoemail']) OR !strstr($_POST['campoemail'],'@')){echo "Digite o e-mail corretamente ou verifique se o campo estra preenchido. <br>"; $erro=TRUE;}
                    if (empty($_POST['camposenha']) OR strlen($_POST['camposenha'])<6){echo "Digite uma senha com 6 digitos. <br>"; $erro=TRUE;} 
                    if (empty($_POST['tia']) OR strlen($_POST['tia'])<8){echo "Verifique se o campo TIA esta preenchido com todos os digitos. <br>"; $erro=TRUE;}
                    ?>
            </body>
</html>                    