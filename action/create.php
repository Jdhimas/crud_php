<?php
//Conexão com o baco de dados
require_once 'db_connect.php';
//Sessão
session_start();

if(isset($_POST['btn_cadastrar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

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