window.onload = function () {
  var inputs = document.querySelectorAll("input");
  inputs.forEach(function (input) {
    input.setAttribute("onfocusout", "checkInput(this)");
  });
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
        console.log("Qui");
        CallingElement.style.borderColor = "red";
        const parentDiv = CallingElement.parentNode;
        parentDiv.appendChild(document.createElement("br"));
        parentDiv.appendChild(document.createTextNode("Inserire parametro valido"));
      } else {
      }
  }

  console.log(inputId);
}
