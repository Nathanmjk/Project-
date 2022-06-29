<<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
if(!isset($_SESSION)) 
    { 

        session_start(); 
    }
 include_once "conexaoBD.php";

$email = $_SESSION['email'];
$nome = mysqli_query($conexao, "SELECT user_name FROM DB_ViraLata.TB_Users WHERE user_email='$email'");
$tel = mysqli_query($conexao, "SELECT user_phone FROM DB_ViraLata.TB_Users WHERE user_email='$email'");

$contador = 0;
$retorno = "";
$dog = "bob";
while ($row = mysqli_fetch_assoc($nome)){
    $retorno[$contador] = $row["user_name"];
    $contador++;
}
 mysqli_query($conexao,"INSERT INTO DB_ViraLata.TB_solicitacoes(user_name, user_email, user_phone, name_dog) VALUES ('$retorno', '$email', '$tel', '$dog')");
?>
