$("#userAddressPC").keyup(function(){
    //Início do Comando AJAX
    
    if($(this).val().length >= 8)
          $.ajax({
              url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
              dataType: 'json',
              success: function(resposta){
                 
                  $("#userAddressStr").val(resposta.logradouro);
                  
                  $("#userAddressNo").focus();
              }
          });
});