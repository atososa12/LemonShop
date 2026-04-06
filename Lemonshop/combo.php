<?php
include("conexion.php");

$sql = "SELECT * FROM combos";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lemon Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/combo.css">
  <link rel="stylesheet" href="css/modooscurocombo.css">
</head>

<body>
  <nav class="navbar-custom">
    <div class="logo">
      <img src="img/logo.png" alt="Logo">
    </div>

    <ul class="menu">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="combo.php">Combos</a></li>
      <li><a href="servicios.html">Servicios</a></li>
      <li><a href="carrito.html">Carrito</a></li>
      <i class="bi bi-moon"></i>
    </ul>
  </nav>
<h1>Combos</h1>

<div class="contenedor-productos">

<?php while($row = $resultado->fetch_assoc()): ?>
  
  <div class="card p-3">
    <img src="img/LogoClaro.png" alt="">
    
    <h2><?php echo $row['nombre']; ?></h2>
    <p><?php echo $row['descripcion']; ?></p>

    <a class="btn btn-success"
       href="https://wa.me/598XXXXXXXX?text=Hola, quiero consultar por <?php echo urlencode($row['nombre']); ?>"
       target="_blank">
       Consultar por WhatsApp
    </a>
  </div>

<?php endwhile; ?>

</div>

<footer>
  <p>© 2026 ASG Web Studios</p>
  
  <div class="social-icons">
    <a href="https://instagram.com/" target="_blank">
      <i class="bi bi-instagram"></i>
    </a>

    <a href="https://wa.me/59899999999" target="_blank">
      <i class="bi bi-whatsapp"></i>
    </a>
  </div>
</footer>
<script src="js/modooscuro.js"></script>
</body>
</html>