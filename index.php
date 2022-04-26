<?php include 'template/header.php' ?>

<?php
include_once('model/conexion.php');
$sentencia = $db->query("select * from persons");
$persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
// print_r($persona);
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      <div class="card">
        <div class="card-header">
          Lista de Personas
        </div>
        <div class="p-4">
          <table class="table align-middle">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Signo</th>
                <th scope="col" colspan="2">Opciones</th>
              </tr>
            </thead>
            <tbody>

              <?php
              foreach ($persona as $dato) {
              ?>

                <tr>
                  <td scope="row"><?php echo $dato->PersonID ?></td>
                  <td><?php echo $dato->name ?></td>
                  <td><?php echo $dato->age ?></td>
                  <td><?php echo $dato->sign ?></td>
                  <td>Editar</td>
                  <td>Eliminar</td>
                </tr>

              <?php
              }
              ?>

            </tbody>
          </table>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Ingresar Datos
        </div>
        <form action="registrar.php" class="p-4" method="post">
          <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" name="txtNombre" class="form-control" autofocus>
          </div>
          <div class="mb-3">
            <label class="form-label">Edad:</label>
            <input type="number" name="txtEdad" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Signo:</label>
            <input type="text" name="txtSigno" class="form-control">
          </div>
          <div class="d-grid">
            <input type="hidden" name="oculto" value="1">
            <input type="submit" class="btn-primary" value="Registrar">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'template/footer.php' ?>