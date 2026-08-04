const track = document.querySelector('.carousel-track');
const items = Array.from(track.children);

const prevButton = document.querySelector('.left');
const nextButton = document.querySelector('.right');
const extraButton = document.querySelector('.extra-btn');

let currentIndex = 0;
let itemWidth = items[0].offsetWidth;

// Clonar elementos para efecto circular
items.forEach(item => {
  const clone = item.cloneNode(true);
  track.appendChild(clone);
});

function updateCarousel() {
  Array.from(track.children).forEach(item => item.classList.remove('active'));
  const activeItem = track.children[currentIndex % items.length];
  activeItem.classList.add('active');

  // Calcula el ancho total del track
  const totalWidth = track.scrollWidth;
  const visibleWidth = document.querySelector('.carousel').offsetWidth;

  // Centra el track en base al índice
  const offset = -(currentIndex * itemWidth) + (visibleWidth - totalWidth) / 2;
  track.style.transform = `translateX(${offset}px)`;
}

function moveNext() {
  currentIndex++;
  updateCarousel();

  // Reinicio suave al llegar al final
  if (currentIndex >= track.children.length - items.length) {
    setTimeout(() => {
      track.style.transition = "none";
      currentIndex = 0;
      updateCarousel();
      track.offsetHeight; // forzar reflow
      track.style.transition = "transform 0.3s ease";
    }, 600);
  }
}

function movePrev() {
  if (currentIndex > 0) {
    currentIndex--;
    updateCarousel();
  }
}

prevButton.addEventListener('click', movePrev);
nextButton.addEventListener('click', moveNext);

// Movimiento automático cada 3 segundos
setInterval(moveNext, 3000);

// Inicializar
updateCarousel();

// Acción del botón extra
extraButton.addEventListener('click', () => {
  alert("Botón extra presionado");
});