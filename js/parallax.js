//Cambia estilo de barra de navigacion al navegar por la pagina
window.onscroll = function () {
    miFuncion;
}

function miFuncion() {
    var navbar = document.getElementById("miNavBar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + "w3-card" + "w3-animate-top" + "w3-theme-l4";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-theme", "");
    }
}

//Usado para alternar el menu en dispositivos pequeños cuando se hace clic en el botón del menú
function alternarFuncion() {
    var x = document.getElementById("navPeq");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    }else {
        x.className = x.className.replace(" w3-show", "");
    }
}