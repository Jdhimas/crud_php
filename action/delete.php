<?php
//Conexão com o baco de dados
require_once 'db_connect.php';
//Sessão
session_start();

if(isset($_POST['btn_deletar'])){
    $id = mysqli_escape_string($connect, $_POST['id']);
    
    $sql = "DELETE FROM clientes WHERE id = '$id'";
    

    if (mysqli_query($connect, $sql)) {
        header('location: ../index.php');
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        mysqli_close($connect);
    }
    else {
        header('location: ../index.php');
        $_SESSION['mensagem'] = "Falha ao deletar!";
        mysqli_close($connect);
    }
}