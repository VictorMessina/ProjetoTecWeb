<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
            <title>Criação Cadastro</title>
            <meta charset="utf-8"/>
            <meta name="descripition" content="criação cadastro"/>
            <meta name="author" content="Bianca, Carol, Marcelo, Victor"/>
        </head>
            
            <body>
                <?php
                    $nome = $_POST['nome'];
                    $tia = $_POST['tia'];
                    $sobrenome = $_POST['sobrenome'];
                    $email = $_POST['email'];
                    $curso = $_POST['curso'];
                    $sexo = $_POST['sexo'];
                    $dia = $_POST['dia'];
                    $mes = $_POST['mes'];
                    $ano = $_POST['ano'];
                    $data = $ano."-".$mes."-".$dia;
                    $senha = $_POST ['senha'];
                    $foto = $_POST['foto'];

                    include "conectaDB.php";

                    $sql = "INSERT INTO cadastro(nome, tia, sobrenome, email, curso, sexo , data, senha, foto) VALUES('$nome', '$tia', '$sobrenome', '$email', '$curso', '$sexo', '$data', '$senha', '$foto')";
                    $resultado = mysqli_query($conexao, $sql);

                    if ($resultado){
                        echo "cadastro inserido com sucesso";
                        header("Location: index.php");
                        die();
                    } else {
                        echo "falha ao realizar o cadastro, tente novamente!";
                         header("Location: cadastro.php");
                        die();  
                    }

                    mysqli_close ($conexao);
                ?>
            </body>
    </html>