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
        </body>
</html>