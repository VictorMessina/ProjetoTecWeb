<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <link rel="shortcut icon" type="image/x-icon" href="imagensSite/logo.png"/>
            <title>Cadastro</title>
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
                    $data = $ano = $_POST['ano']."-".$mes = $_POST['mes']."-".$_POST['dia'];
                    $senha = $_POST ['senha']; 
                    $senha2= md5($senha);
                    $arquivo = $_FILES['arquivo'];
					
                    $tamanho_maximo = $_POST['MAX_SIZE_FILE'];
                    $tipos_aceitos = array("image/x-png", "image/jpeg", "image/gif", "image/bmp");

                    if($arquivo['error'] != 0)
                    {
                            switch($arquivo['error'])
                            {
                                    case UPLOAD_ERR_INI_SIZE:
                                            echo "ERRO! O Arquivo excede o tamanho máximo permitido.";
                                            exit;
                                            break;

                                    case UPLOAD_ERR_FORM_SIZE:
                                            echo "ERRO! Arquivo muito grande.";
                                            exit;
                                            break;

                                    case UPLOAD_ERR_PARTIAL:
                                            echo "ERRO! Envio não concluído.";
                                            exit;
                                            break;

                                    case UPLOAD_ERR_NO_FILE:
                                            echo "ERRO! Você não enviou o arquivo.";
                                            exit;
                                            break;
                            }
                            exit;
                    }			
                    else{
                            if(array_search($arquivo['type'], $tipos_aceitos)=== FALSE)
                            {
                                    echo "ERRO! Tipo de dados não permitidos.<br/>Utilize apenas JPG, PNG, BMP ou GIF.";
                                    exit;
                            }

                            if($arquivo['size']==0 || $arquivo['tmp_name']==NULL)
                            {
                                    echo "ERRO! Arquivo vazio.";
                                    exit;
                            }

                            if($arquivo['size']>$tamanho_maximo)
                            {
                                    echo "ERRO! Arquivo maior que o permitido.";
                                    exit;
                            }

                            if(!file_exists("img/users/$nome"))
                            {
                                    mkdir("img/users/$nome", 0777, true);
                            }

                            $destino = "img/users/$nome/".$arquivo['name'];

                            if (move_uploaded_file ($arquivo['tmp_name'] , $destino))
                            {
                                    echo "<p>Foto de perfil válida!</p>";
                            }
                            else{
                                    echo "<p>Erro ao salvar arquivo.</p>";
                            }
                    }
                    
                    include "conectaDB.php";

                    $sql = "INSERT INTO usuarios(nome, tia, sobrenome, email, curso, sexo , data, senha, foto) VALUES('$nome', '$tia', '$sobrenome', '$email', '$curso', '$sexo', '$data', '$senha2', '$destino')";
                    $resultado = mysqli_query($conexao, $sql);

                    if($resultado)
                    {
                            echo "<p>Cadastro realizado com sucesso!</p>";
                            header("Location: index2.php");
                            die();
                    }

                    mysqli_close($conexao);
                ?>
            </body>
    </html>