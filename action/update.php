<?php
//Conexão com o baco de dados
require_once 'db_connect.php';
//Sessão
session_start();

if(isset($_POST['btn_editar'])){
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";
    

    if (mysqli_query($connect, $sql)) {
        header('location: ../index.php');
        $_SESSION['mensagem'] = "Editado com sucesso!";
        mysqli_close($connect);
    }
    else {
        header('location: ../index.php');
        $_SESSION['mensagem'] = "Falha ao editar!";
        mysqli_close($connect);
    }
}