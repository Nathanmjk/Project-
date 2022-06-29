<?php

if(!isset($_SESSION)) 
{ 
  
    session_start(); 
}
    $token = random_int(10000, 99999);
    $_SESSION['code'] = $token;
?>