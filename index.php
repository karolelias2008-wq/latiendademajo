<?php include("conexion.php"); ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Majo</title>
    <!-- Favicon -->
    <link rel="icon" href="IMAGENES/logo.02 AM.r觐ᗎ桂耀Ҁ얣翽">
    <link href="menuypie.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">
</head>
<body>

<header class="tienda-header">
  <div class="top-bar">
    <div class="left-section">
      <button id="menu-toggle" class="menu-btn">☰</button>
    
      <nav id="dropdown-menu" class="main-menu">
        <ul>
            <li><a href="blusas.html">Blusas</a></li>
            <li><a href="vestidos.html">Vestidos</a></li>
            <li><a href="carteras.html">Carteras</a></li>
            <li><a href="conjuntos.html">Conjuntos</a></li>
            <li><a href="accesorios.html">Accesorios</a></li>
            <li><a href="sandalias.html">Sandalias</a></li>
            <li><a href="skincare.html">Skincare</a></li>
            <li><a href="perfumes.html">Perfumes</a></li>
            <li><a href="Acercadenosotros.html">Acerca de nosotros</a></li>
            <li><a href="contactos.html">Contactos</a></li>
        </ul>
      </nav>

      <div class="logo-circle">
         <a href="index.php" class="logo-link">
          <img src="IMAGENES/logo.02 AM.r觐ᗎ桂耀Ҁ얣翽" alt="M" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
         </a>
      </div>
      <h1 class="brand-title">Tienda de Majo</h1>
    </div>

    <div class="search-container">
        <img src="IMAGENES/lupa.jpeg" class="search-icon-img" alt="Lupa">
        <input type="text" class="search-input" id="search-input" list="productos-sugeridos" placeholder="Buscar productos...">
        
        <datalist id="productos-sugeridos">
          <option value="Blusas de temporada"></option>
          <option value="Vestidos elegantes"></option>
          <option value="Carteras Coach"></option>
          <option value="Conjuntos elegantes"></option>
          <option value="Accesorios y Joyería"></option>
          <option value="Sandalias y zapatillas"></option>
          <option value="Skincare facial"></option>
          <option value="Perfumes de marcas originales"></option>
        </datalist>
    </div>

    <div class="cart-container" id="cart-trigger" style="cursor: pointer;">
      <svg class="cart-icon-svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 3h3.5l2.5 11h11l2-8H6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <circle cx="8.5" cy="19.5" r="1.5" fill="currentColor"/>
        <circle cx="17.5" cy="19.5" r="1.5" fill="currentColor"/>
      </svg>
      <span class="cart-badge" id="cart-count">0</span>
    </div>
  </div>

  <nav class="categories-nav">
    <a href="blusas.html" class="nav-item">Blusas</a>
    <a href="vestidos.html" class="nav-item">Vestidos</a>
    <a href="carteras.html" class="nav-item">Carteras</a>
    <a href="conjuntos.html" class="nav-item">Conjuntos</a>
    <a href="accesorios.html" class="nav-item">Accesorios</a>
    <a href="sandalias.html" class="nav-item">Sandalias</a>
    <a href="skincare.html" class="nav-item">Skincare</a>
    <a href="perfumes.html" class="nav-item">Perfumes</a>
    <a href="Acercadenosotros.html" class="nav-item">Acerca de nosotros</a>
    <a href="contactos.html" class="nav-item">Contactos</a>
  </nav>
</header>
<br><br>

<div class="carousel">
    <button class="arrow left">&#10094;</button>
    <div class="carousel-track">
      <div class="carousel-item active"><img src="pagina inicio/accesorio.carru.ini.jpeg" alt="Imagen 1"></div>
      <div class="carousel-item"><img src="pagina inicio/blusa.carru.ini.jpeg" alt="Imagen 2"></div>
      <div class="carousel-item"><img src="pagina inicio/conjunto.carru.ini.jpeg" alt="Imagen 3"></div>
      <div class="carousel-item"><img src="pagina inicio/perfume.carru.ini.jpeg" alt="Imagen 4"></div>
      <div class="carousel-item"><img src="pagina inicio/sandalias.carru.ini.jpeg" alt="Imagen 5"></div>
      <div class="carousel-item"><img src="pagina inicio/vestido.carru.ini.jpeg" alt="Imagen 6"></div>
    </div>
    <button class="arrow right">&#10095;</button>
    <button class="extra-btn">&#10095;</button>
</div>
<br><br>

<main class="columns-container">
  <article class="column">
    <span style="position: absolute; margin: 10px;">
      <mark style="background-color: #e946bd; color: white; padding: 3px 8px; border-radius: 3px; font-size: 12px; font-weight: bold;">¡NUEVO!</mark>
    </span>
    <img src="pagina inicio/vestido.Pag2.jpeg" alt="Vestidos Azul">
    <h3>Vestidos Azul</h3>
    <p>Precio: <del style="color: #999; font-size: 14px;">L.400</del> <strong>L.320.</strong></p>
    <!-- data-id debe coincidir con el ProductoID en tu tabla SQL -->
    <button class="btn-add-cart" data-id="1" data-name="Vestidos Azul" data-price="320">Añadir al carrito</button>
  </article>

  <article class="column"> 
    <img src="pagina inicio/Accesorio.Pag7.png" alt="Aritos de corazon">
    <h3>Aritos de corazon</h3>
    <p>Precio: <strong>L.450.</strong></p>
    <button class="btn-add-cart" data-id="2" data-name="Aritos de corazon" data-price="450">Añadir al carrito</button>
  </article>

  <article class="column">
    <img src="pagina inicio/Sandalias.Pag5.jpeg" alt="Sandalias blancas">
    <h3>Sandalias blancas</h3>
    <p>Precio: <strong>L.1,000</strong></p>
    <button class="btn-add-cart" data-id="3" data-name="Sandalias blancas" data-price="1000">Añadir al carrito</button>
  </article>
</main>
<br><br>

<div class="contenedor-columnas">
    <div class="columna-izq">
        <img src="pagina inicio/copia.jpeg" alt="Cadena de Plata Pandora">
    </div>
    <div class="columna-der">
        <h2>Cadena de Plata Pandora</h2>
        <p>Precio: <strong>L.1000</strong></p>
        <button class="btn-add-cart" data-id="4" data-name="Cadena de Plata Pandora" data-price="1000">Añadir al carrito</button>
    </div>
</div>
  
<main class="columns-container">
  <article class="column">
    <img src="pagina inicio/Conjunto.Pag4.jpeg" alt="Conjunto color negro">
    <h3>Conjunto color negro</h3>
    <p>Precio: <strong>L.700.</strong></p>
    <button class="btn-add-cart" data-id="5" data-name="Conjunto color negro" data-price="700">Añadir al carrito</button>
  </article>

  <article class="column"> 
    <img src="pagina inicio/Carteras.Pag3.jpeg" alt="Carteras coach color café">
    <h3>Carteras coach color café</h3>
    <p>Precio: <strong>L.3500</strong></p>
    <button class="btn-add-cart" data-id="6" data-name="Carteras coach color café" data-price="3500">Añadir al carrito</button>
  </article>
</main>
<br><br>

<section style="max-width: 800px; margin: 20px auto; padding: 0 20px; font-family: sans-serif;">
  <h2 style="text-align: center; color: #333;">Preguntas Frecuentes</h2>
  
  <details style="background: #f9f9f9; padding: 15px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ddd;">
    <summary style="font-weight: bold; cursor: pointer; color: #555;">¿Cuáles son los métodos de envío disponibles?</summary>
    <p style="margin-top: 10px; color: #666;">Realizamos envíos nacionales de forma segura a través de empresas locales de transporte directo a tu domicilio o sucursal de entrega.</p>
  </details>

  <details style="background: #f9f9f9; padding: 15px; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ddd;">
    <summary style="font-weight: bold; cursor: pointer; color: #555;">¿Cómo puedo realizar un cambio de prenda o talla?</summary>
    <p style="margin-top: 10px; color: #666;">Tienes hasta 7 días hábiles después de recibir tu compra para gestionar cambios comunicándote de forma directa por nuestro WhatsApp.</p>
  </details>
</section>
<br>

<!-- MODAL DEL CARRITO DE COMPRAS -->
<dialog id="cart-modal" style="border: none; border-radius: 8px; padding: 25px; width: 90%; max-width: 400px; box-shadow: 0 4px 20px rgba(0,0,0,0.2); font-family: sans-serif;">
  <h3 style="margin-top: 0; color: #333;">Tu Carrito de Compras</h3>
  <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 15px;">
  
  <div id="cart-items-container">
    <p style="color: #666; text-align: center; margin: 20px 0;">Tu carrito está actualmente vacío.</p>
  </div>

  <div id="cart-summary" style="display: none; margin-top: 15px; border-top: 2px solid #f0f0f0; padding-top: 10px;">
    <p style="font-weight: bold; font-size: 16px; display: flex; justify-content: space-between;">
      <span>Total:</span>
      <span id="cart-total">L. 0.00</span>
    </p>
    <button id="buy-btn" class="btn-checkout">Comprar</button>
  </div>

  <div style="text-align: right; margin-top: 15px;">
    <button id="close-cart-btn" style="background: #666; color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer;">Cerrar</button>
  </div>
</dialog>

<footer class="tienda-footer">
  <div class="footer-top">
    <a href="Acercadenosotros.html" class="footer-link">Acerca de nosotros</a>
    <a href="contactos.html" class="footer-link">Contactos</a>
  </div>

  <div class="footer-bottom">
    <div class="social-icons">
      <a href="https://wa.me/50487971474" target="_blank" class="icon-link"><img src="IMAGENES/WhatsApp.webp" style="width:35px; height:35px;" alt="WhatsApp"></a>
      <a href="https://www.instagram.com/latiendademajo14" class="icon-link"><img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" style="width: 35px; height: 35px;" alt="Instagram"></a>
      <a href="https://www.facebook.com/share/1EgkGR1aCU/" class="icon-link"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/2023_Facebook_icon.svg" style="width: 35px; height: 35px;" alt="Facebook"></a>
      <a href="https://www.tiktok.com/@tucaritabeauty" class="icon-link"><img src="https://upload.wikimedia.org/wikipedia/commons/3/34/Ionicons_logo-tiktok.svg" style="width: 35px; height: 35px;" alt="TikTok"></a>
    </div>

    <div class="footer-container">
      <p class="footer-text">@2026Tiendademajo | Desarrollado por Kimberly Ramos y Karol Elias</p>
      <div class="logo-circle"><img src="IMAGENES/k-k.jpeg" alt="KK Logo"></div>
    </div>
  </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Redirección Buscador
        const searchInput = document.getElementById("search-input");
        if (searchInput) {
            searchInput.addEventListener("change", function() {
                if (this.value === "Blusas de temporada") window.location.href = "blusas.html";
                else if (this.value === "Vestidos elegantes") window.location.href = "vestidos.html";
                else if (this.value === "Carteras Coach") window.location.href = "carteras.html";
                else if (this.value === "Conjuntos elegantes") window.location.href = "conjuntos.html";
                else if (this.value === "Accesorios y Joyería") window.location.href = "accesorios.html";
                else if (this.value === "Sandalias blancas" || this.value === "Sandalias y zapatillas") window.location.href = "sandalias.html";
                else if (this.value === "Skincare facial") window.location.href = "skincare.html";
                else if (this.value === "Perfumes de marcas originales") window.location.href = "perfumes.html";
            });
        }

        // Menú Desplegable
        const menuToggle = document.getElementById('menu-toggle');
        const dropdownMenu = document.getElementById('dropdown-menu');
        if (menuToggle && dropdownMenu) {
            menuToggle.addEventListener('click', (e) => {
                e.stopPropagation(); 
                dropdownMenu.classList.toggle('active');
            });

            document.addEventListener('click', (event) => {
                if (!menuToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.remove('active');
                }
            });
        }

        // CARRITO DE COMPRAS CONECTADO A BASE DE DATOS
        let cart = JSON.parse(localStorage.getItem('carritoCompras')) || [];

        const cartModal = document.getElementById('cart-modal');
        const cartTrigger = document.getElementById('cart-trigger');
        const closeCartBtn = document.getElementById('close-cart-btn');
        const cartCount = document.getElementById('cart-count');
        const cartItemsContainer = document.getElementById('cart-items-container');
        const cartSummary = document.getElementById('cart-summary');
        const cartTotal = document.getElementById('cart-total');
        const buyBtn = document.getElementById('buy-btn');

        updateCartUI();

        // Leer data-id, data-name y data-price al presionar un botón
        document.querySelectorAll('.btn-add-cart').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const price = parseFloat(button.getAttribute('data-price'));
                
                cart.push({ id, name, price });
                saveAndRefreshCart();
            });
        });

        window.removeFromCart = (index) => {
            cart.splice(index, 1);
            saveAndRefreshCart();
        };

        function saveAndRefreshCart() {
            localStorage.setItem('carritoCompras', JSON.stringify(cart));
            updateCartUI();
        }

        function updateCartUI() {
            if (cartCount) cartCount.textContent = cart.length;

            if (cart.length === 0) {
                if (cartItemsContainer) cartItemsContainer.innerHTML = '<p style="color: #666; text-align: center; margin: 20px 0;">Tu carrito está actualmente vacío.</p>';
                if (cartSummary) cartSummary.style.display = 'none';
            } else {
                let itemsHTML = '';
                let total = 0;

                cart.forEach((item, index) => {
                    total += item.price;
                    itemsHTML += `
                      <div class="cart-item" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; border-bottom: 1px solid #eee; padding-bottom: 8px;">
                        <div>
                          <strong>${item.name}</strong><br>
                          <small style="color: #666;">L. ${item.price.toLocaleString()}</small>
                        </div>
                        <button class="cart-item-remove" onclick="removeFromCart(${index})" style="background: none; border: none; color: red; font-weight: bold; cursor: pointer; font-size: 16px;">✕</button>
                      </div>
                    `;
                });

                if (cartItemsContainer) cartItemsContainer.innerHTML = itemsHTML;
                if (cartTotal) cartTotal.textContent = `L. ${total.toLocaleString()}`;
                if (cartSummary) cartSummary.style.display = 'block';
            }
        }

        if (cartTrigger && cartModal) {
            cartTrigger.addEventListener('click', (e) => {
                e.preventDefault();
                cartModal.showModal();
            });
        }

        if (closeCartBtn && cartModal) {
            closeCartBtn.addEventListener('click', () => {
                cartModal.close();
            });
        }

        // ACCIÓN DEL BOTÓN COMPRAR: Envía datos a PHP para restar stock
        if (buyBtn) {
            buyBtn.addEventListener('click', () => {
                if (cart.length === 0) return;

                buyBtn.disabled = true;
                buyBtn.textContent = "Procesando...";

                fetch('procesar_compra.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(cart)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        localStorage.setItem('facturaCliente', JSON.stringify(cart));
                        cart = [];
                        localStorage.setItem('carritoCompras', JSON.stringify(cart));
                        window.location.href = "factura.html"; 
                    } else {
                        alert("Error al procesar la compra: " + data.message);
                        buyBtn.disabled = false;
                        buyBtn.textContent = "Comprar";
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Ocurrió un error de conexión al actualizar el inventario.");
                    buyBtn.disabled = false;
                    buyBtn.textContent = "Comprar";
                });
            });
        }
    });
</script>
<script src="scriptcarruselnuevo.js"></script>
</body>
</html>