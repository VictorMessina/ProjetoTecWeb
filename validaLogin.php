<?php

session_start();

include 'conectaDB.php';

 $email = mysql_real_escape_string($_POST['email']);
 $senha = mysql_real_escape_string($_POST['senha']);
 
  $sql = "SELECT * FROM cadastro WHERE(email='$email' && senha='$senha')";
                    $resultado = mysqli_query($conexao, $sql);

                    if ($resultado){
                        $_SESSION["usuario"] = $email;
                        header("Location: perfil.php");
                        die();
                    } else {
                         header("Location: erroLogin.php");
                        die();  
                    }

                    mysqli_close ($conexao);
?>
