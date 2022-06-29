<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

    session_start();
    include_once "conexaoBD.php";
    include_once "cripto.php";

    $message = decrypt($_POST["message"]);

    $nome = $message["nome"];
    $email = $message["email"];
    $tel = $message["tel"];
    $senha = $message["senhaHash"];
    $cpf = $message["cpf"];

    mysqli_query($conexao,"INSERT INTO TB_Users(user_name, user_email, user_phone, user_password, user_cpf) VALUES ('$nome', '$email', '$tel', '$senha', '$cpf')");
    echo json_encode("Success");
?>
