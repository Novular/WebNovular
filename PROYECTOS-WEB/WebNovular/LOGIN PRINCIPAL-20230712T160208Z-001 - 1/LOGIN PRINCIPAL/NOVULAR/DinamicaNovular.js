var button = document.createElement("btn-2");
button.innerHTML = "click Me";
document.body.appendChild(button);
button.addEventListener("click", myFunction);
var button = document.createElement("btn-1");
button.innerHTML = "click Me";
document.body.appendChild(button);
button.addEventListener("click", myFunction);
function toggleMenu() {
    var menu = document.getElementById("menu");
    if (menu.style.display === "block") {
      menu.style.display = "none";
    } else {
      menu.style.display = "block";
    }
  }
