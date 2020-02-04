// Validações do formulário de cadastro de novo usuário
let button = document.querySelector("#createUser");
let username = document.getElementById("newUserFullName");
let useremail = document.getElementById("newUserEmail");
let userpass = document.getElementById("newUserPass");
let usercountry = document.getElementById("newUserCountry");
let spanName = document.querySelector(".nameError");
let spanEmail = document.querySelector(".emailError");
let spanPass = document.querySelector(".passError");
let spanCountry = document.querySelector(".countryError");

button.addEventListener('click',function() {
  if (!username.validity.valid) {
    // Se o campo não for válido, mostramos uma mensagem customizada
    spanName.innerHTML = "Preencha com o nome completo";
    spanName.className = "error active";
    // E cancelamos o envio para o servidor
    event.preventDefault();
  }

  if (!useremail.validity.valid) {
    spanEmail.innerHTML = "Preencha com um endereço de e-mail válido";
    spanEmail.className = "error active";
    event.preventDefault();
  }

  if (!userpass.validity.valid) {
    spanPass.innerHTML = "Preencha com uma senha válida (Mín.: 8 caracteres)";
    spanPass.className = "error active";
    event.preventDefault();
  }

  if (!usercountry.validity.valid) {
    spanCountry.innerHTML = "Este campo é obrigatório";
    spanCountry.className = "error active";
    event.preventDefault();
  }
}, false);

  username.addEventListener("input", function(event) {
    if(username.validity.valid) {
      spanName.innerHTML = "";
      spanName.className = "error";
    }
  }, false);

  useremail.addEventListener("input", function(event) {
    if(useremail.validity.valid) {
      spanEmail.innerHTML = "";
      spanEmail.className = "error";
    }
  }, false);

  userpass.addEventListener("input", function(event) {
    if(userpass.validity.valid) {
      spanPass.innerHTML = "";
      spanPass.className = "error";
    }
  }, false);

  usercountry.addEventListener("input", function(event) {
    if(usercountry.validity.valid) {
      spanCountry.innerHTML = "";
      spanCountry.className = "error";
    }
  }, false);