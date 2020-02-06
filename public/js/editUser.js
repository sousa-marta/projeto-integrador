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

// Validações no formulário de edição do usuário
let editForm = document.querySelector('.user-info-main');
let editButton = document.querySelector('#editUser');
let editName = document.getElementById('userFullName');
let editEmail = document.getElementById('userEmail');
let editCountry = document.getElementById('userCountry');
let editPhone = document.getElementById('userPhone');
let editZIP = document.getElementById('userAddressPC');
let editAddress = document.getElementById('userAddressStr');
let editAddressNo = document.getElementById('userAddressNo');
let editAddressComp = document.getElementById('userAddressComp');
let spanName = document.querySelector('.nameError');
let spanEmail = document.querySelector('.emailError');
let spanPhone = document.querySelector('.phoneError');
let spanZIP = document.querySelector('.zipError');
let spanAddress = document.querySelector('.addressError');
let spanAddressNo = document.querySelector('.addressNoError');
let spanAddressComp = document.querySelector('.addressCompError');

editName.addEventListener("change", function(event){
     if(editName.change){
        spanName.innerHTML = "Preencha o nome completo";
        spanName.className = "error active";
     }
 });

editEmail.addEventListener("change", function(event){
    if(editEmail.change){
        spanEmail.innerHTML = "Preencha o nome válido";
        spanEmail.className = "error active";
    }
});

editPhone.addEventListener("change", function(event){
    if(editPhone.change){
        spanPhone.innerHTML = "Indique um número de telefone";
        spanPhone.className = "error active";
    }
});

editZIP.addEventListener("change", function(event){
    if(!editZIP){
        spanZIP.innerHTML = "Indique um CEP válido";
        spanZIP.className = "error active";
    }

    if(editZIP < 8){
        spanZIP.innerHTML = "Indique um CEP válido";
        spanZIP.className = "error active";
    }

    if(editZIP.change){
        spanZIP.innerHTML = "Indique um CEP válido";
        spanZIP.className = "error active";
    }
});

editAddress.addEventListener("change", function(event){
    spanAddress.innerHTML = "Indique o seu endereço (Rua, avenida, logradouro)";
    spanAddress.className = "error active";
})

editAddressNo.addEventListener("change", function(event){
    spanAddressNo.innerHTML = "Indique o número do seu endereço";
    spanAddressNo.className = "error active";
})

editAddressComp.addEventListener("change", function(event){
    spanAddressComp.innerHTML = "Indique o complemento do seu endereço";
    spanAddressComp.className = "error active";
})

editForm.addEventListener("submit", function(event){
    let errors = [];

	if (editName.value < 3) {
			errors.push({
					input: editName,
					msg: "Preencha o nome válido. Deve conter pelo menos 3 caracteres"
			})
	}

	if (editEmail.value != email) {
			errors.push({
					input: editEmail,
					msg: "Preencha um email válido"
			})
	}

	if (!editCountry.value) {
			errors.push({
					input: editCountry,
					msg: "Ensira um país de residencia"
			})
	}

	if (!editPhone.value) {
			errors.push({
					input: editPhone,
					msg: "Ensira um nome de telefone (Formato: 11 12345-6789)"
			})
	}

	if (!editZIP.value){
			errors.push({
					input: editZIP,
					msg: "Ensira um CEP válido. (8 números)"
			})
	}

	if (!editAddress){
			errors.push({
					input: editAddress,
					msg: "Ensira o seu endereço"
			})
	}

	if (!editAddressNo){
			errors.push({
					input: editAddressNo,
					msg: "Ensira o número do seu endereço"
			})
	}

	if (!editAddressComp){
			errors.push({
					input: editAddressComp,
					msg: "Ensira o complemento do seu endereço"
			})
	}

	if (errors.length) {
			event.preventDefault()
			errors.forEach(error => {
					let span = error.input.parentChild.querySelector('span');

					//codigo de exibicao
			})
	}
})
