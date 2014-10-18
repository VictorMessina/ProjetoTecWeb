<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
            <title>Criação Cadastro</title>
            <meta charset="utf-8"/>
            <meta name="descripition" content="Formulário"/>
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
                    $data = $_POST['data'];
                    $senha = $_POST ['senha'];

                    include "conectaDB.php";

                    $sql = "INSERT INTO cadastro(nome, tia, sobrenome, email, curso, sexo , data, senha) VALUES('$nome', '$tia', '$sobrenome', '$email', '$curso', '$sexo', '$data', '$senha')";
                    $resultado = mysqli_query($conexao, $sql);

                    if ($resultado){
                        echo "cadastro inserido com sucesso, clique no botão voltar para efetuar o login com seu email e senha cadastrados";
                    } else {
                        echo "FALHA AO INSERIR cadastro, tente novamente!";
                    }

                    mysqli_close ($conexao);
                ?>
                <a href="index.php">voltar</a>
            </body>
    </html>