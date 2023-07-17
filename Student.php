<?php

use App\Model\Students;

session_start();


// Cargar el archivo autoload.php generado por Composer
require_once 'vendor/autoload.php';

function InitialPath()
{
    return header('location: /MATRICULA');
}

if (isset($_POST['dni'])) {
    $dni = $_POST['dni'];
    $student = new Students();
    $result = $student->Get($dni);
    if (!$result) {
        return InitialPath();
    }
} else {
    return InitialPath();
}





?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    <main class="container mt-5">
        <div class="col-md-7 m-auto d-flex flex-column gap-3">
            <section class="row">
                <div class="col-md-8">
                    <h3 class="text-capitalize mb-4"><?php echo $result['nombre'] . " " . $result['apellido'] ?></h3>
                </div>
                <div class="col-md-3">
                    <img width="200" src="<?php echo $result['genero'] == 0 ? 'https://static.vecteezy.com/system/resources/previews/009/098/305/non_2x/people-icon-man-free-vector.jpg' : 'https://cdn.icon-icons.com/icons2/517/PNG/512/girl_icon-icons.com_51109.png' ?>" alt="">
                </div>
            </section>


            <div class="input-group">
                <label for="" class="input-group-text">DNI :</label>
                <input type="number" class="form-control" name="" readonly  id="" value="<?php echo $result['dni'] ?>">
            </div>
            <div class="input-group">
                <label for="" class="input-group-text">Correo</label>
                <input type="email" class="form-control" name="" readonly  id="" value="<?php echo $result['correo'] ?>">
            </div>
            <div class="input-group">
                <label for="" class="input-group-text">Fecha Nac.</label>
                <input type="text" class="form-control" name="" readonly  id="" value="<?php echo $result['dni'] ?>">
            </div>
            <div class="input-group">
                <label for="" class="input-group-text">DNI :</label>
                <input type="number" class="form-control" name="" readonly  id="" value="<?php echo $result['dni'] ?>">
            </div>
            <div class="input-group">
                <label for="" class="input-group-text">Carrera</label>
                <input type="text" class="form-control" value="<?php echo $result['carrera'] ?>"  readonly id="">
            </div>
            <div class="input-group">
                <label for="" class="input-group-text">Turno</label>
                <input type="text" class="form-control" value="<?php echo $result['turno'] ?>" readonly  id="">
            </div>
            <div class="input-group">
                <label for="" class="input-group-text">Ciclo</label>
                <input type="text" class="form-control" value="<?php echo $result['ciclo'] ?>" readonly  id="">
            </div>
            <form action="Reactificacion.php" method="post" enctype="multipart/form-data">
                <div>
                    <input type="number" hidden name="studentid" value="<?php echo $result['dni'] ?>">
                    <label for="" class="form-label">Pago del Nuevo Semestre</label>
                    <input type="file" name="pago" class="form-control mb-4" accept=".pdf, image/*" required id="">
                </div>

                <div class="flex gap-3">
                    <button onclick="REGRESAR()" class="btn btn-dark">Regresar</button>

                    <input  class="btn btn-primary" type="submit" name="Confirmacion" value="Confirmar Reactificacion" />
                </div>
            </form>



        </div>
    </main>

    <script>
        function REGRESAR() {
            window.location.href = './'
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>