
// Validações no evento: Edição dos inputs do formulário

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
	let min_length = 3;
	let length = document.getElementById("userFullName").value.length;
     if(length < min_length){
        spanName.innerHTML = "O nome do usuário deve ter pelo menos 3 caracteres";
        spanName.className = "error active";
     }
 });

editName.addEventListener("change", function(event){
	if(!editName.change){
		spanName.innerHTML = "Nome modificado";
		spanName.className = "error active";
	}
});

editEmail.addEventListener("change", function(event){
	if(!editEmail.change){
		spanEmail.innerHTML = "Email do usuario modificado";
		spanEmail.className = "error active";
	}
});''

editPhone.addEventListener("change", function(event){
	if(!editPhone.change){
		spanPhone.innerHTML = "Phone do usuario modificado";
		spanPhone.className = "error active";
	}
})

editZIP.addEventListener("change", function(event){
		let min_length = 8;
		let length = document.getElementById("userAddressPC").value.length; 
    if(length < min_length){
        spanZIP.innerHTML = "O CEP deve ter pelo menos 8 caracteres";
        spanZIP.className = "error active";
    }
});

editAddress.addEventListener("change", function(event){
    spanAddress.innerHTML = "Endereço modificado";
    spanAddress.className = "error active";
});
