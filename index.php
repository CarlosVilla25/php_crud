<?php include 'template/header.php' ?>

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
              <tr>
                <td scope="row">1</td>
                <td>Charlie Villa</td>
                <td>27</td>
                <td>Aries</td>
                <td>Editar</td>
                <td>Eliminar</td>
              </tr>
              <tr>
                <td scope="row">1</td>
                <td>Charlie Villa</td>
                <td>27</td>
                <td>Aries</td>
                <td>Editar</td>
                <td>Eliminar</td>
              </tr>
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
      </div>
    </div>
  </div>
</div>

<?php include 'template/footer.php' ?>