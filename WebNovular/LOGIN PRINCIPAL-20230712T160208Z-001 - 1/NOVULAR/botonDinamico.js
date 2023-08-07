// Obtenemos una referencia al botón y al body del documento
const changeColorBtn = document.getElementById("changeColorBtn");
const body = document.body;

// Función para cambiar el color de fondo
function changeBackgroundColor() {
  // Generamos un color hexadecimal aleatorio
  const randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
  
  // Asignamos el color generado al fondo del body
  body.style.backgroundColor = randomColor;
}

// Asociamos la función al evento click del botón
changeColorBtn.addEventListener("click", changeBackgroundColor);
