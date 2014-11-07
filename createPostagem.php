<?php
    session_start();

    include "conectaDB.php";

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $curso = $_POST['curso'];
    $preco = $_POST['preco'];
    $comentario = $_POST['comentario'];
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "INSERT INTO post (id_usuario , titulo , autor , editora , curso, preco , comentario) VALUE ('$id_usuario' , '$titulo' , '$autor' , '$editora' , '$curso', '$preco' , '$comentario')";
    $resp = mysqli_query ($conexao , $sql);

    if ($resp){

        header("Location: feed.php");
        die();

    }

    mysqli_close($conexao);
?>