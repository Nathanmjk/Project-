<?php
    session_start();
    if( $_SESSION['data_criacao']> ($_SESSION['data_exp'])){
        echo json_encode("Session expired");
        header("Location: ../paginas/Telalogin.html");
        exit;
    
    }

    
?>
<!DOCTYPE html>
<html lang="pr-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo-conf.css">

    <title>Vira-Latas</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js"
    integrity="sha512-hAJgR+pK6+s492clbGlnrRnt2J1CJK6kZ82FZy08tm6XG2Xl/ex9oVZLE6Krz+W+Iv4Gsr8U2mGMdh0ckRH61Q=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"
    integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jsencrypt/3.2.1/jsencrypt.min.js"
    integrity="sha512-hI8jEOQLtyzkIiWVygLAcKPradIhgXQUl8I3lk2FUmZ8sZNbSSdHHrWo5mrmsW1Aex+oFZ+UUK7EJTVwyjiFLA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
    <script src="../js/js-confidencial.js"></script>

</head>

<body class="body">
    <div class="topo" id="barra-menu">
       
    </div>

    <div class="area-banner">
        <div class="area-img">
                <img class="imagem" src="../img/Banner viralatas.png">
        </div>
    </div>

    <div class="area-botoes">
        <button class="botao"> ADOTAR</button>
        <Button class="botao"> DOAR</Button>
    </div>

    <div class="titulo-bicho">
        <h2> Animais para adoção</h2>
    </div>

    <div class="area-bichos" id="bichos">    
    </div>

    <div class="area-contato">
        <li>Contatos</li>
        <br>
        <li>Email: Viralatas@gmail.com</li>
        <br>
        <li>Telefone/PIX: 4002 - 8922</li>
        <br>
        <li> R. de Asfalto, 1322 - Bairro da Banuina, Curitiba - PR </li>
    </div>

   

</body>

</html>
