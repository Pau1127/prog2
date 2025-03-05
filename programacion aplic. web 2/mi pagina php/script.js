// Definir la función para saludar al usuario
function saludarUsuario() {
    // Mostrar mensaje de bienvenida
    alert("¡Bienvenido a mi hermosa página web!");

    // Solicitar nombre de usuario y mostrar saludo personalizado
    let nombreUsuario = prompt("¿Cuál es tu nombre?");
    alert("¡Que tengas una linda experiencia " + nombreUsuario + "!");
}

// Llamar a la función cuando sea necesario
// Por ejemplo, al cargar la página o mediante un botón
saludarUsuario(); // Puedes quitar esta línea si prefieres llamarla después en otro lugar

$('.dropdown').dropdown();



function toggleBanner() {
    var checkbox = document.getElementById("showBannerCheckbox");
    var banner = document.getElementById("carouselBanner");
    
    if (checkbox.checked) {
        // Mostrar el carrusel con animación fade-in
        banner.style.display = "block"; // Asegura que sea visible antes de la animación
        banner.classList.add("fade-in");
        banner.classList.remove("fade-out");
    } else {
        // Ocultar el carrusel con animación fade-out
        banner.classList.add("fade-out");
        banner.classList.remove("fade-in");
        
        // Esperar a que termine la animación antes de ocultarlo
        setTimeout(function () {
            banner.style.display = "none";
        }, 500); // Duración de la animación en milisegundos
    }
}
