<?php

include 'conectaDB.php';

 $email = $_POST['email']; 
 $senha = $_POST['senha'];
 
  $sql = "SELECT * FROM cadastro WHERE(email='$email' && senha='$senha')";
                    $resultado = mysqli_query($conexao, $sql);

                    if ($resultado){
                        header("Location: perfil.php");
                        die();
                    } else {
                         header("Location: erroLogin.php");
                        die();  
                    }

                    mysqli_close ($conexao);
?>