<?php
    $conexao = mysqli_connect("localhost","root","","birds");
    if (mysqli_connect_errno()){
    echo "Não foi possível se conectar ao banco de dados: " . mysqli_connect_error();
    }
?>