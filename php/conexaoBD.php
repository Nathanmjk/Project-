<?php

 define("DBLOG", "realmente ontem ouvimos tango");

define("DBPWD", "nunca acordem @esposa, @maridos, 2vezes 0chance 1vez 3dias");

function mycode($hash) {
}

function mydecode($hash) {
    $a_cod = explode(" ", $hash);
    $cod = "";
    foreach ($a_cod as $char) {
        $cod .= $char[0];
    }
    return $cod;
}
    
     $conexao = mysqli_connect("localhost", mydecode(DBLOG), mydecode(DBPWD),"DB_ViraLata");

    if ($conexao->connect_errno) {
        die('mysqli connection error: ' . $conexao->connect_error);
    }

?>