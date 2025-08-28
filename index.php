<?php
include("conexion.php");
$con = conexion();

// Traer todos los registros de persona
$result = pg_query($con, "SELECT * FROM persona ORDER BY id DESC");
?>
<!doctype html>
<html lang="es">
<head>
  <title>Página Principal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar -->
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <img src="index2.png" style="width: 30px; position: absolute;">
      <span style="position: relative; left: 35px;">Index</span>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Registrar</a>
      <a class="p-2 text-dark" href="#">Actualizar</a>
      <a class="p-2 text-dark" href="#">Eliminar</a>
    </nav>
  </div>

  <!-- Header -->
  <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Registrando datos con PostgreSQL + PHP</h1>
    <p class="lead">Proyecto en Render</p>
  </div>

  <div class="container">
    <!-- Formulario -->
    <div class="card mb-4">
      <div class="card-body">
        <form autocomplete="off" action="index-post.php" method="post">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label>Nro Documento</label>
                <input type="text" name="doc" maxlength="8" class="form-control" required>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nom" class="form-control" required>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Apellidos</label>
                <input type="text" name="ape" class="form-control" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label>Dirección</label>
                <input type="text" name="dir" class="form-control">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Celular</label>
                <input type="text" name="cel" class="form-control">
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary float-right" value="Registrar">
        </form>
      </div>
    </div>

    <!-- Tabla con registros -->
    <h3 class="mb-3">Personas registradas</h3>
    <?php if (pg_num_rows($result) > 0) { ?>
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Celular</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = pg_fetch_assoc($result)) { ?>
            <tr>
              <td><?= htmlspecialchars($row['id']) ?></td>
              <td><?= htmlspecialchars($row['dni']) ?></td>
              <td><?= htmlspecialchars($row['nombre']) ?></td>
              <td><?= htmlspecialchars($row['apellido']) ?></td>
              <td><?= htmlspecialchars($row['direccion']) ?></td>
              <td><?= htmlspecialchars($row['celular']) ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <p class="text-muted">No hay registros todavía.</p>
    <?php } ?>

    <!-- Footer -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; 2023-1</small>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>
