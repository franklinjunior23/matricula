<?php

use App\Model\Students;

require_once 'vendor/autoload.php';

function InitialPath()
{
    return header('location: /MATRICULA');
}
function getNextCiclo($ciclo)
{
    $ciclos = ['I', 'II', 'III', 'IV', 'V', 'VI','Egresado'];
    $index = array_search($ciclo, $ciclos);
    if ($index !== false && isset($ciclos[$index + 1])) {
        return $ciclos[$index + 1];
    }
    return $ciclo;
}

if (!isset($_POST['Confirmacion'])) {
    return InitialPath();
} else {
    $estudiante = $_POST['studentid'];
    $data = new Students();
    $res = $data->Get($estudiante);
    if (!$res) {
        InitialPath();
    }

    $idata = $res['id'];
    $ciclo = $res['ciclo'];
}
$val = getNextCiclo($ciclo);
$condition = "id = $idata";
$datos = array(
    'ciclo' => $val
);
$data->UpdateC($datos, $condition);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<?php if ($data == 1) {
        echo "
        <script>
                Swal.fire({
                    title: 'Reactificacion Exitosa',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                })

                setTimeout(function() { window.location.href = './'; }, 2500)
        </script>";
    } ?>
</body>

</html>