// Filtro
getElements = function (id) {
  if (typeof id == "object") {
    return [id];
  } else {
    return document.querySelectorAll(id);
  }
};

filterHTML = function(id, selector, filter) {
  var a, b, c, i, j, k, hit;
  a = getElements(id);
  for (i = 0; i < a.length; i++) {
    b = a[i].querySelectorAll(selector);
    for (j = 0; j < b.length; j++) {
      hit = 0;
      if (b[j].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
        hit = 1;
      }
      c = b[j].getElementsByTagName("*");
      for (k = 0; k < c.length; k++) {
        if (c[k].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
          hit = 1;
        }
      }
      if (hit == 1) {
        b[j].style.display = "";
      } else {
        b[j].style.display = "none";
      }
    }
  }
};

// Validações do formulário de envio de currículo
let form = document.querySelector("#sendCVForm");
let name = document.getElementById("name");
let email = document.getElementById("email");
const nameError = document.querySelector(".nameError");
const emailError = document.querySelector(".emailError");

form.addEventListener("submit", function (event) {
  // Sempre que o usuário clicar em enviar, verifica se os campos nome, e-mail e currículo são válidos
  if (!name.validity.valid) {
    // Se o campo não for válido, mostramos uma mensagem customizada
    nameError.innerHTML = "Preencha com o nome completo";
    nameError.className = "error active";
    // E cancelamos o envio para o servidor
    event.preventDefault();
  }

  if (!email.validity.valid) {
    emailError.innerHTML = "Preencha com um endereço de e-mail válido";
    emailError.className = "error active";
    event.preventDefault();
  }
}, false);

name.addEventListener("input", function(event) {
  if(name.validity.valid) {
    nameError.innerHTML = "";
    nameError.className = "error";
  }
}, false);

email.addEventListener("input", function(event) {
  if(email.validity.valid) {
    emailError.innerHTML = "";
    emailError.className = "error";
  }
}, false);