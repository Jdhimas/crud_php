<?php
//Conexão com o banco de dados
$servername = "127.0.0.1";
$user = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $user, $password, $db_name);
mysqli_set_charset($connect, "utf8");    

if (mysqli_connect_error()) {
    echo "Falha ao conectar com o banco de dados."."<br>";
    echo "Erro: ".mysqli_connect_error();
}