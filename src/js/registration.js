window.onload = function () {
  var inputs = document.querySelectorAll("input");
  inputs.forEach(function (input) {
    input.setAttribute("onfocusout", "checkInput(this)");
  });
  const selects = document.querySelectorAll("select");

  selects.forEach((select) => {
    select.setAttribute("onclick", "checkInput(this)");
  });
  insertNations();
};

function checkInput(CallingElement) {
  const inputId = CallingElement.id;
  switch (inputId) {
    case "nome":
    case "cognome":
    case "ragione-sociale":
    case "indirizzo":
    case "civico":
    case "cap":
      if (CallingElement.value == 0) {
        CallingElement.style.borderColor = "red";
        const parentDiv = CallingElement.parentNode;
        parentDiv.appendChild(document.createElement("br"));
        parentDiv.appendChild(document.createTextNode("Inserire parametro valido"));
      } else {
      }
    case "codice-fiscale":
      checkCodiceFiscale(CallingElement.value, CallingElement);
  }

  console.log(inputId);
}
function checkCodiceFiscale(codice, elemento) {
  if (elemento.value.length < 16) {
    elemento.style.borderColor = "red";
    const parentDiv = elemento.parentNode;
    parentDiv.appendChild(document.createTextNode("Inserisci il tuo codice fiscale completo"));
  } else {
    var alfabeto = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    var numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    var mesi_nascita = ["A", "B", "C", "D", "E", "H", "L", "M", "P", "R", "S", "T"];
    regole_codice = {
      0: alfabeto,
      1: alfabeto,
      2: alfabeto,
      3: alfabeto,
      4: alfabeto,
      5: alfabeto,
      6: numeri,
      7: numeri,
      8: mesi_nascita,
    };
    for (let index = 0; index < codice.length; index++) {
      const element = array[index];
    }
  }
}
function insertNations() {
  select = document.getElementById("nazione");
  var opt = document.createElement("option");
  fetch("../../data/nations.json")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      const paesi = data["paesi"];
      paesi.forEach((country) => {
        var opt = document.createElement("option");
        opt.value = country;
        opt.innerHTML = country;
        select.appendChild(opt);
      });
    })
    .catch((error) => {
      console.error("Error fetching JSON:", error);
    });
}
