// Filtro
// getElements = function (id) {
//   if (typeof id == "object") {
//     return [id];
//   } else {
//     return document.querySelectorAll(id);
//   }
// };

// filterHTML = function(id, selector, filter) {
//   var a, b, c, i, j, k, hit;
//   a = getElements(id);
//   for (i = 0; i < a.length; i++) {
//     b = a[i].querySelectorAll(selector);
//     for (j = 0; j < b.length; j++) {
//       hit = 0;
//       if (b[j].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
//         hit = 1;
//       }
//       c = b[j].getElementsByTagName("*");
//       for (k = 0; k < c.length; k++) {
//         if (c[k].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
//           hit = 1;
//         }
//       }
//       if (hit == 1) {
//         b[j].style.display = "";
//       } else {
//         b[j].style.display = "none";
//       }
//     }
//   }
// };

//Filtro Novo
function listen() {
  var filterWord = document.getElementById("word-search");

  var vacancies = document.querySelectorAll(".vacancy");
  
  if (filterWord.value.length > 0) {
    vacancies.forEach(vacancy => {
      var vacancyName = vacancy.querySelector(".vacancy-name");
      var name = vacancyName.textContent;
      var expression = new RegExp(filterWord.value, "i");
  
      if (!expression.test(name)) {
        vacancy.classList.add("d-none");
      } else {
        vacancy.classList.remove("d-none");
      }
    });
  } else {
    vacancies.forEach(vacancy => {
      vacancy.classList.remove("d-none");
    });
  }
}

function select(event) {
  event.preventDefault();
  var selectLocation = document.getElementById('inlineFormLocationSelect').value;
  var selectCategory = document.getElementById('inlineFormCategorySelect').value;
  var selectOccupation = document.getElementById('inlineFormOccupationSelect').value;

  if(selectLocation == 'Cidade') {
    selectLocation = '';
  }
  
  if (selectCategory == 'Nome da área') {
    selectCategory = '';
  }
  
  if (selectOccupation == 'Nome do cargo') {
    selectOccupation = '';
  }

  // console.log(selectLocation + selectCategory + selectOccupation);
  var vacancies = document.querySelectorAll(".vacancy");
  
  if (selectOccupation.length > 0 || selectLocation.length > 0 || selectCategory.length > 0) {
    vacancies.forEach(vacancy => {
      var vacancyOccupation = vacancy.querySelector(".vacancy-name");
      var occupation = vacancyOccupation.textContent;
      var vacancyLocation = vacancy.querySelector(".vacancy-city");
      var location = vacancyLocation.textContent;
      var vacancyCategory = vacancy.querySelector(".vacancy-category");
      var category = vacancyCategory.textContent;
      var expressionLocation = new RegExp(selectLocation, "i");
      var expressionCategory = new RegExp(selectCategory, "i");
      var expressionOccupation = new RegExp(selectOccupation, "i");
  
      if (expressionLocation.test(location) && expressionOccupation.test(occupation) && expressionCategory.test(category)) {
        vacancy.classList.remove("d-none");
      } else {
        vacancy.classList.add("d-none");
      }
    });
  } else {
    vacancies.forEach(vacancy => {
      vacancy.classList.remove("d-none");
    });
  }

  return false;

}


// Validações do formulário de envio de currículo
let form = document.querySelector("#sendCVForm");
if(form) {
  let name = document.getElementById("fullNameForVacancy");
  let email = document.getElementById("emailForVacancy");
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
}