<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload</title>
    </head>
        <body>
            <?php
            
                echo " O nome do arquivo é: ".$_FILES['arquivo']['name'];
                echo "<br/>";
                echo $_FILES['arquivo']['tmp_name'];
                echo "<br/>";
                echo " O tipo do arquivo é: ".$_FILES['arquivo']['type'];
                echo "<br/>";
                echo " O tamanho do arquivo é de: ".$_FILES['arquivo']['size'];
                echo "<br/>";
                echo $_FILES['arquivo']['error'];
            ?>
            
            <form method="POST" action="feed.php"> 
                <input type="hidden" name="tia" value="<?php echo $_POST['tia']; ?>"> 
                <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>"> 
 		<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"> 
 		<input type="hidden" name="curso" value="<?php echo $_POST['curso']; ?>"> 
 		<input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>"> 
                
                <input type="hidden" name="arquivo" value="<?php echo $_FILES['arquivo'] ['name']; ?>"> 
                <input type="hidden" name="arquivo" value="<?php echo $_FILES['arquivo'] ['tmp_name']; ?>"> 
                <input type="hidden" name="arquivo" value="<?php echo $_FILES['arquivo'] ['type']; ?>"> 
                <input type="hidden" name="arquivo" value="<?php echo $_FILES['arquivo'] ['size']; ?>"> 
            </form>   
            
        </body>
</html>