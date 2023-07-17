<?php
session_start();

use App\Model\Model;
use App\Model\Students;
// Cargar el archivo autoload.php generado por Composer
require_once 'vendor/autoload.php';

$data = new Students();

$resultado = $data->GetAll("a");







?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matricula | Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>

<body>
  <main class="container">
    <section class="mt-5">
      <h2 class="text-center mb-5">Listado De Alumnos Matriculados</h2>
      <aside class="mb-4">
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Matricula Nuevo</button>
        <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Matricula Ingresante</button>
        <button class="btn btn-warning type=" button" data-bs-toggle="modal" data-bs-target="#exampleModal3">Matricula Reactificacion</button>
      </aside>
      <!-- modales ///  --->
      <main class="sss">

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="post">
                <div class="modal-body mx-2">
                  <main class="d-flex flex-column gap-2">
                    <div class="input-group">
                      <label for="" class="input-group-text">Nombre</label>
                      <input type="text" name="nombre" id="" class="form-control">
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">Apellido</label>
                      <input type="text" name="Apellido" id="" class="form-control">
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">DNI</label>
                      <input type="text" name="DNI" id="" class="form-control">
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">Correo </label>
                      <input type="text" name="Correo " id="" class="form-control">
                    </div>

                    <div class="input-group">
                      <label for="" class="input-group-text">Genero</label>
                      <select class="form-select" name="genero" aria-label="Default select example">
                        <option value="femenino">Femenino</option>
                        <option value="masculino">Masculino</option>
                      </select>
                    </div>

                    <div class="input-group">
                      <label for="" class="input-group-text">Domicilio</label>
                      <input type="text" name="Domicilio" id="" class="form-control">
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">Apoderado</label>
                      <input type="text" name="Apoderado" id="" class="form-control">
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">DNI Apoderado</label>
                      <input type="text" name="dni_apod" id="" class="form-control">
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">Quien es?</label>
                      <input type="text" name="quienes" id="" class="form-control">
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">Carrera</label>
                      <select class="form-select" name="carrera" aria-label="Default select example">
                        <option value="Desarrollo de sistemas de informacion">Desarrollo de sistemas de informacion</option>
                        <option value="Enfemeria">Enfemeria</option>
                        <option value="Mecatronica">Mecatronica</option>
                      </select>
                    </div>
                    <div class="input-group">
                      <label for="" class="input-group-text">Turno</label>
                      <select class="form-select" name="carrera" aria-label="Default select example">
                        <option value="Dia">Dia</option>
                        <option value="Noche">Noche</option>
                      </select>
                    </div>
                  </main>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Confirmar Matricula</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                ...2
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <section class="modal-content">
              <form action="Student.php" method="post">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="">
                    <label for="" class="form-labelm">DNI del estudiante</label>
                    <input type="number" name="dni" required id="" class="form-control">

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </section>
          </div>
        </div>
      </main>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nombre y Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Ciclo</th>
            <th scope="col">Carrera</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($resultado as $data) {
          ?>
            <tr>
              <td><?php echo $data['nombre'] . " " . $data['apellido'] ?></td>
              <td><?php echo $data['correo'] ?></td>
              <td><?php echo $data['ciclo'] ?></td>
              <td><?php echo $data['carrera'] ?></td>
              <td><button type="button">Ver</button></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>


<?php
if (isset($_POST['borrarbd'])) {
}
if (isset($_POST['reiniciar'])) {
  unset($_SESSION['data']);
}
if (isset($_POST['buscar'])) {
  $dni = $_POST['dni'];
  $connModel = new Students();
  $req = $connModel->Get($dni);
  if ($req) {
    $_SESSION['data'] = $req;
  } else {
    echo "no existe";
  }


  echo $dni;
}
if (isset($_POST['Realizar'])) {
  $tipo = $_POST['tipo'];
  echo $tipo;
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $correo = $_POST['correo'];
  $genero = $_POST['genero'];
  $domicilio = $_POST['domicilio'];
  $apoderado = $_POST['apoderado_nom'];
  $dni_apoderado = $_POST['dni_apoderado'];
  $quienEs = $_POST['apoderado_nom'];

  $datos = array(
    'nombre' => $nombre,
    'apellido' => $apellido,
  );
}

?>