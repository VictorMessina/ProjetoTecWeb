<?php
    $conexao = mysqli_connect("127.0.0.1:3308","root","","birds");
    if (mysqli_connect_errno()){
    echo "Não foi possível se conectar ao banco de dados: " . mysqli_connect_error();
    }
?>