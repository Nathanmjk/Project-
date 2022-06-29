/*function validando(){
    let value = document.getElementById("codigo").value;

    let regexEmail =  /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    
    if (!regexEmail.test(value)) {
      // campo inválido, retorna false para o formulário não ser submetido
      alert('Código incorreto');
      return false;
    }

    return true;
}*/


window.onload = function(){
  $.ajax({
    dataType: "json",
    type: "POST",
    url: "../php/envia-email.php",
    success: function (retorno) {
      document.getElementById("divTeste").style.backgroundColor = "white";
      document.getElementById("divTeste").innerHTML =
        "<div class='teste'>Email sent to " + retorno + "</div>";
    },
 
    });
}


function confirm() {
  
  var dados = $("#recebe-cod").serialize();
  document.getElementById("legenda").innerHTML = "";
  $.ajax({
    dataType: "json",
    type: "POST",
    url: "../php/confirma-codigo.php",
    data: dados,
    success: function (retorno){
      if(retorno == "Success"){
        location.href = "../php/confidencial.php";
      }else{
        document.getElementById("legenda").innerHTML = "<div id='legenda'> CODIGO INVALIDO </div>"
      }
    }
  });
  
}