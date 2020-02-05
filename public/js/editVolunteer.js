$("#volunteerZip").keyup(function(){
    //Início do Comando AJAX
    
    if($(this).val().length >= 8)
          $.ajax({
              url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
              dataType: 'json',
              success: function(resposta){
                 
                  $("#volunteerAddress").val(resposta.logradouro);
                  $("#volunteerState").val(resposta.uf);
                  $("#volunteerCity").val(resposta.localidade);
                  
                  $("#volunteerAddressNo").focus();
              }
          });
});