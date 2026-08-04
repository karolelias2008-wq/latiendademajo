// JavaScript Document
let slideIndex = 0;
let autoPlayTimer;

// Iniciar el carrusel
mostrarSlides();

function mostrarSlides() {
    let i;
    let slides = document.getElementsByClassName("carousel-slide");
    
    // Ocultar todas las imágenes
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
    }
    
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    
    // Mostrar la imagen actual
    slides[slideIndex - 1].classList.add("active");
    
    // Configurar el tiempo automático (3000ms = 3 segundos)
    resetearTemporizador();
}

// Función para los botones Atrás/Adelante
function cambiarSlide(n) {
    let slides = document.getElementsByClassName("carousel-slide");
    
    // Quitar clase activa actual
    slides[slideIndex - 1].classList.remove("active");
    
    slideIndex += n;
    
    if (slideIndex > slides.length) { slideIndex = 1 }
    if (slideIndex < 1) { slideIndex = slides.length }
    
    // Mostrar la nueva imagen
    slides[slideIndex - 1].classList.add("active");
    
    // Reiniciar el contador automático para que no salte de golpe al hacer clic
    resetearTemporizador();
}

function resetearTemporizador() {
    clearInterval(autoPlayTimer);
    autoPlayTimer = setInterval(mostrarSlides, 3000); // Cambia el 3000 por el tiempo que quieras
}


//CARRUSEL NUEVO
