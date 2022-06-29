<?php
  function decrypt($data) {
    $privk = openssl_pkey_get_private(file_get_contents("chave.pem"));

    $key="";
    $iv="";
    
    openssl_private_decrypt(base64_decode($data["key"]), $key, $privk);
    openssl_private_decrypt(base64_decode($data["iv"]), $iv, $privk);

    $key = trim($key, '"');
    $iv = trim($iv, '"');

    return json_decode(trim(openssl_decrypt($data["message"], "aes-128-cbc", $key, OPENSSL_ZERO_PADDING, $iv)), true);

  }
?>