<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lemon Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/modooscuro.css">
</head>

<body>
  <!-- NAV --> 
<nav class="navbar-custom">
  <div class="logo">
    <img src="img/logo.png" alt="Logo">
  </div>

  <ul class="menu">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="combo.php">Combos</a></li>
    <li><a href="servicios.html">Servicios</a></li>
    <li><a href="carrito.html">Carrito</a></li>
   <li id="toggle-dark">
  <i class="bi bi-moon"></i>
</li>
    
  </ul>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="contenido">
    <h1>Venta y reparación de celulares</h1>
    <p>Accesorios y servicio técnico</p>

   <a href="#" class="btn-mini">
      <i class="bi bi-whatsapp"></i> Consultar por WhatsApp
    </a>
  </div>

  <div class="imagen-hero">
    <img src="img/fondoInicial.png" alt="">
  </div>
</section>

<!-- SERVICIOS -->
 <section class="locations container mt-5">
<section class="servicios container text-center">
  <h2>Nuestros <span>Servicios</span></h2>

  <div class="row mt-4">

    <div class="col-12 col-md-4">
      <div class="card-servicio">
        <img src="img/logo-combo.png">
        <h5>Productos</h5>
        <a href="#" class="btn-mini">
          <i class="bi bi-whatsapp"></i> Consultar por WhatsApp
        </a>
      </div>
    </div>

    <div class="col-12 col-md-4">
      <div class="card-servicio">
        <img src="img/logo-accesorios.png">
        <h5>Accesorios para tu Celular</h5>
        <a href="#" class="btn-mini">
          <i class="bi bi-whatsapp"></i> Consultar por WhatsApp
        </a>
      </div>
    </div>

    <div class="col-12 col-md-4">
      <div class="card-servicio">
        <img src="img/logo-servicio.png">
        <h5>Reparación de Celulares</h5>
        <a href="#" class="btn-mini">
          <i class="bi bi-whatsapp"></i> Consultar por WhatsApp
        </a>
      </div>
    </div>

  </div>
</section>

<!-- SUCURSALES -->
 
<section class="locations container mt-5">
<div class="locations-header">
    <h2>Nuestras <span>Sucursales</span></h2>

  </div>

 <div class="row g-4 mt-3">

  <div class="col-12 col-md-6">
    <div class="location">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14623.881125711569!2d-56.02607225964619!3d-33.240518614432666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a73d509d40feb7%3A0x7a9043236b8dac95!2sDoctor%20Ricardo%20J.%20Schunk%20%26%20Francisco%20Sastre%2C%2097000%20Villa%20del%20Carmen%2C%20Departamento%20de%20Durazno!5e0!3m2!1ses-419!2suy!4v1774741733608!5m2!1ses-419!2suy" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
      <div class="location-text">
        <h6>Sucursal Villa del Carmen</h6>
        <p>Dirección: Francisco Sastre esq. Ricardo Schunk</p>
        <p>Horario de Atención:</p>
        <a 
          href="https://www.google.com/maps/place/Doctor+Ricardo+J.+Schunk+%26+Francisco+Sastre,+97000+Villa+del+Carmen,+Departamento+de+Durazno" 
          target="_blank" 
          class="btn-mini">
          <i class="bi bi-geo-alt-fill"></i> Ver en Google Maps
        </a>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-6">
    <div class="location">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3331.7193934194947!2d-56.52815482451366!3d-33.37839117341812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a6ea8e5356eed9%3A0xcca3c09ecdd1fb62!2sBrig.%20Gral.%20Fructuoso%20Rivera%20441%2C%2097000%20Durazno%2C%20Departamento%20de%20Durazno!5e0!3m2!1ses-419!2suy!4v1774741543766!5m2!1ses-419!2suy" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
      <div class="location-text">
        <h6>Sucursal Durazno</h6>
        <p>Dirección: Rivera 441</p>
        <p>Horario de Atención:</p>
        <a 
          href="https://www.google.com/maps/place/Brig.+Gral.+Fructuoso+Rivera+441,+97000+Durazno,+Departamento+de+Durazno" 
          target="_blank" 
          class="btn-mini">
          <i class="bi bi-geo-alt-fill"></i> Ver en Google Maps
        </a>
      </div>
    </div>
  </div>

</div>
</section>
<div class="social-icons">
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-whatsapp"></i></a>
    </div>

<!-- FOOTER -->
<footer>
  <p>© 2026 ASG Web Studios</p>
</footer>

<script src="js/modooscuro.js"></script>
</body>
</html>