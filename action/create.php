<?php
//Conexão com o baco de dados
require_once 'db_connect.php';
//Prevenção de SQL injection e XSS
require_once '../includes/clear.php';
//Sessão
session_start();

if(isset($_POST['btn_cadastrar'])){
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if (mysqli_query($connect, $sql)) {
        header('location: ../index.php');
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        mysqli_close($connect);
    }
    else {
        header('location: ../index.php');
        $_SESSION['mensagem'] = "Falha ao cadastrar!";
        mysqli_close($connect);
    }
}