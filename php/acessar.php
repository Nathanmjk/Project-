<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');


if(!isset($_SESSION)) 
    { 

        session_start(); 
    }
include_once "conexaoBD.php";
include_once "cripto.php";

$message = decrypt($_POST["message"]);
$email = $message["email"];
$senha = $message["senhaHash"];

$sql_code = mysqli_query($conexao, "SELECT * FROM TB_Users WHERE user_email='$email' AND user_password='$senha'");



if(mysqli_num_rows($sql_code)<=0){
  echo json_encode("Login Ou senha incorreto");
 
}
else{
  $_SESSION['email'] = $email;
  $_SESSION['session_id'] = session_id();
  $_SESSION['session_name'] = session_name();
  $_SESSION['data_criacao'] = time();
  $_SESSION['data_exp'] = $_SESSION['data_criacao'] + 3600;
  
  echo json_encode("Success");
  

  
  
}

  

   

?>