<?php
    include_once "conexaoBD.php";
    include_once "acessar.php";

    $select_user = mysqli_query($conexao, "SELECT user_name FROM db_viralata.TB_Users WHERE user_email='$email'");
   
?>
