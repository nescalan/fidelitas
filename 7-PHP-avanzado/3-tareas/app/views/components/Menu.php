<?php


$sessionVar = [
  'id' => $_SESSION["identificacion"],
  'name' => $_SESSION["Nombre"],
  'rol' => $_SESSION['Rol'],
];


if ($sessionVar['rol'] != 1) {
  echo "No es administrador";
} else {
  echo "Bienvenido super usuario ";
}


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">PHP Avanzado</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <?php if ($sessionVar['rol'] != 1): ?>
          echo "No es administrador";
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="clientes.php">Clientes</a>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link" href="#">Funciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" tabindex="-1">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>