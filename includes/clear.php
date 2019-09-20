<?php
// Função para prevenção de SQL injection e ataque xss
function clear($input){
    global $connect;
    $value = mysqli_escape_string($connect,$input);
    $value = htmlspecialchars($value);

    return $value;
}