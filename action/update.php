<?php
//Conexão com o baco de dados
require_once 'db_connect.php';
//Prevenção de SQL injection e XSS
require_once '../includes/clear.php';
//Sessão
session_start();

if(isset($_POST['btn_editar'])){
    $id = clear($_POST['id']);
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

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