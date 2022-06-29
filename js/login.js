function acessar() {
  var hash = CryptoJS.SHA256($("#senha").val());
  $("#senhaHash").val(hash);
  const dados = {
    email: $('#email').val(),
    senhaHash: $('#senhaHash').val()
  };
  
  const encryptedData = encrypt(JSON.stringify(dados))
  document.getElementById("teste").innerHTML = "";

  $.ajax({
    dataType: "json",
    type: "POST",
    url: "../php/acessar.php",
    data:{
      message: encryptedData,
    },
    async: true,
    success: function (retorno){
      if(retorno == "Success"){
        location.href = "../paginas/2-FA.html";

      }else{
        document.getElementById("teste").innerHTML = "<div id='teste' class='teste'>Incorrect email or password.</div>";
      }
    }
  });





 



  
  
}
