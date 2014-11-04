<?php

session_start();

include 'conectaDB.php';

 $email = mysql_escape_string($_POST['email']);
 $senha =  mysql_escape_string($_POST['senha']);
 
  $sql = "SELECT * FROM cadastro WHERE email='$email'";
                    $resultado = mysqli_query($conexao, $sql);
                    if ($resultado){
                        while($registro= mysqli_fetch_array($resultado)){
                            $nome=$registro['nome'];
                            $foto=$registro['foto'];
                            if($senha==$registro['senha'] && $email==$registro['email']){
                                header("location: perfil.php?nome=$nome&foto=$foto");
                                die();
                            }
                            else if($senha!=$registro['senha'] || $email!=$registro['email']){
                                header("location: erroLogin.php");
                                die();
                            }
                        }
                    }
                    

                    mysqli_close ($conexao);
?>
