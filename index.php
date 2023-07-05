<?php
// Cargar el archivo autoload.php generado por Composer
require_once 'vendor/autoload.php';

use App\Config\Config;

$data = new Config();

$data->getConnect();
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<style>
  * {
    font-family: 'Open Sans', sans-serif;
  }

  input[type=number]::-webkit-inner-spin-button,
  input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type=number] {
    -moz-appearance: textfield;
  }

  input:focus {
    background-color: #ffffff;
    border: 1px solid #cccccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
</style>
<style type="text/tailwindcss">
  @layer utilities {
     .from-control{
      text-indent: 0.375rem;
      border: none;
      border-radius: 10px;
      width: 100%;
     }
     .from-control:focus{
      outline: black;
     }
     .form-file-in{
      width: 100%;
      background-color: white;
      padding: 10px 10px;
      border-radius: 14px;
     }
    }
</style>

<body class="">
  <main class="w-screen xl:h-screen p-10 overflow-hidden xl:overflow-x-hidden">
    <section class="bg-[#D2D6FF] w-full h-full rounded-xl	p-14">
      <section class=" grid grid-cols-1 xl:grid xl:grid-cols-[380px_1fr] gap-10 h-full">
        <aside class="">
          <div class="border border-black/30 relative h-full rounded-xl px-8">

            <div class="absolute -top-4 left-5">
              <h2 class="bg-[#D2D6FF] px-2 text-xl font-medium	">Datos Personales</h2>
            </div>
            <form method="post" enctype="multipart/form-data">


              <div class="pt-6 grid gap-2" id="content-datePersonal">
                <!-- comienzo del componente vacio--->
                <div class="w-full h-full grid place-content-center cursor-none" id="content-vacio">
                  <h2 class="text-center mt-40 p-2 font-semibold	 bg-black text-white">Seleccione el tipo de matricula</h2>
                  <img src="./public/Images/60ff976d13ce3feda2040bb5_Empty_state-p-500-removebg-preview.png" class="w-[300px] " alt="">
                </div>`
              </div>
              <!-- fin del componente vacio--->
          </div>
          </div>
        </aside>
        <aside class="grid xl:grid-rows-2 gap-5 p-3">
          <section class="grid xl:grid-cols-[300px_300px_1fr] gap-5">
            <div class="border border-black/30 rounded-xl p-4 h-full relative">
              <div class="absolute -top-4 left-8 ">
                <h2 class="bg-[#D2D6FF] px-3 text-xl font-medium">Detalles</h2>
              </div>
              <div class="h-full p-4 grid">
                <div>
                  <label for="">Tipo :</label>
                  <select name="" id="typedocs" onchange="typeFunct()" class="from-control" required>
                    <option selected>Seleccionar</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Reactificacion">Reactificacion</option>
                    <option value="Ingresante">Ingresante</option>
                  </select>
                </div>
                <div>
                  <label for="">Ciclo</label>
                  <select name="" id="" class="from-control" required>
                    <option selected>Seleccionar</option>
                    <option value="">I</option>
                    <option value="">II</option>
                    <option value="">III</option>
                    <option value="">IV</option>
                    <option value="">V</option>
                    <option value="">VI</option>
                  </select>
                </div>
                <div>
                  <label for="">Turno</label>
                  <select name="" id="" class="from-control" required>
                    <option selected>Seleccionar</option>
                    <option value="">Dia</option>
                    <option value="">Noche</option>
                  </select>
                </div>
                <div>
                  <label for="">Carrera</label>
                  <select name="" id="" class="from-control" required>
                    <option selected>Seleccionar</option>
                    <option name="" id="" value>Desarrollo De S. Informacion</option>
                    <option name="" id="">Enfermeria</option>
                    <option name="" id="">Mecatronica</option>
                  </select>
                </div>
              </div>

            </div>
            <div class="border border-black/30 rounded-xl p-4 h-full relative">
              <div class="absolute -top-4 left-8  ">
                <h2 class="bg-[#D2D6FF] px-3 text-xl font-medium">Archivos</h2>
              </div>
              <div class="grid gap-3" id="content-file-alum">

                <div class="w-full grid place-content-center cursor-none" id="content-vacio">
                  <h2 class="text-center mt-5 p-2 font-semibold	 bg-black text-white">Seleccione el tipo de matricula</h2>
                  <img src="./public/Images/60ff976d13ce3feda2040bb5_Empty_state-p-500-removebg-preview.png" class="w-[300px] " alt="">
                </div>

              </div>
            </div>
            <div class="border border-black/30 rounded-xl px-10 py-7 h-full relative">
              <div class="absolute -top-4 left-5 ">
                <h2 class="bg-[#D2D6FF] px-3 text-xl font-medium ">Cursos Reprobados</h2>
              </div>
              <section class="flex flex-col gap-4" id="content_repro">

                <div class="w-full bg-black rounded-md text-white py-1 px-3 flex justify-between  items-center">
                  <aside>
                    <div class="pl-5 font-semibold ">
                      <p>- Matematica </p>
                      <p>Ciclo: II</p>
                    </div>
                  </aside>
                  <aside>
                    <p>$20.00</p>
                  </aside>
                </div>

              </section>
            </div>
          </section>
          <div class=" w-full border border-black/30 rounded-xl p-10 ">
            <input type="submit" value="Validar">
          </div>
        </aside>
        </form>
      </section>
    </section>
  </main>


  </div>


  <script>
    const datainput = () => {
      console.log("buscando ....")
    }


    const typeFunct = () => {
      const ContentInput = document.getElementById("content-file-alum");
      const ContentDatepersonal = document.getElementById('content-datePersonal');
      const ContentHide = document.getElementById("content-vacio");
      const typeD = document.getElementById("typedocs").value;

      switch (typeD) {
        case "Nuevo":
          ContentInput.innerHTML = `
                <div>
                  <label for="">Baucher</label>
                  <input type="file" name="" id="" class="form-file-in">
                </div>
                <div >
                  <label for="">Boleta de Nota</label>
                  <input type="file" name="" id="" class="form-file-in">
                </div>
                <div>
                  <label for="">Acta de Nac</label>
                  <input type="file" name="" id="" class="form-file-in">
                </div>
          `;
          ContentDatepersonal.innerHTML = `
              <div class="w-full">
                <label for="">Nombre</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div class="">
                <label for="">Apellido</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div class="">
                <label for="">DNI</label>
                <input type="number" id="dni_val" class="from-control" name="" id="">
              </div>
              <div>
                <label for="">Correo </label>
                <input type="email" name="" class="from-control" id="">
              </div>
              
              <div class="">
                <label for="">Genero</label>
                <select name="" id="" class="from-control">
                  <option value="" class="p-4">Masculino</option>
                  <option value="" class="p-4">Femenino</option>
                </select>
              </div>
              <div class="">
                <label for="">Domicilio</label>
                <input class="from-control" type="text" name="" id="">
              </div>
              <div>
                <label for="">Apoderado</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div>
                <label for="">DNI</label>
                <input type="number" class="from-control" name="" id="">
              </div>
              <div>
                <label for="">Quien es?</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div>
          `;
          break

        case "Reactificacion":
          ContentInput.innerHTML = `
                <div>
                  <label for="">Baucher</label>
                  <input type="file" name="" id="" class="form-file-in">
                </div>
          `;
          ContentDatepersonal.innerHTML = `
              <div class="w-full">
                <label for="">Nombre</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div class="">
                <label for="">Apellido</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div class="">
                <label for="">DNI</label>
                <input type="number" id="dni_val" class="from-control" name="" id="">
              </div>
              <div>
                <label for="">Correo </label>
                <input type="email" name="" class="from-control" id="">
              </div>
              <div class="block">
                <button type="button" onclick='datainput()' class="bg-black/100 py-2 px-6 text-white rounded-xl font-medium text-right">Buscar Alumno</button>
              </div>
          `
          break
        case "Ingresante":
          ContentInput.innerHTML = `
                 <div>
                  <label for="">Baucher</label>
                  <input type="file" name="" id="" class="form-file-in">
                </div>
          `;
          ContentDatepersonal.innerHTML = `
              <div class="w-full">
                <label for="">Nombre</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div class="">
                <label for="">Apellido</label>
                <input type="text" class="from-control" name="" id="">
              </div>
              <div class="">
                <label for="">DNI</label>
                <input type="number" id="dni_val" class="from-control" name="" id="">
              </div>
              <div>
                <label for="">Correo </label>
                <input type="email" name="" class="from-control" id="">
              </div>
              <div class="block">
                <button type="button" onclick="datainput()" class="bg-black/100 py-2 px-6 text-white rounded-xl font-medium text-right">Buscar Alumno</button>
              </div>
          `;
          break
        default:
          ContentInput.innerHTML = `
                <div class="w-full grid place-content-center cursor-none" id="content-vacio">
                  <h2 class="text-center mt-5 p-2 font-semibold	 bg-black text-white">Seleccione el tipo de matricula</h2>
                  <img src="./public/Images/60ff976d13ce3feda2040bb5_Empty_state-p-500-removebg-preview.png" class="w-[300px] " alt="">
                </div>
            `;
          ContentDatepersonal.innerHTML = `
               <div class="w-full h-full grid place-content-center cursor-none" id="content-vacio">
                  <h2 class="text-center mt-40 p-2 font-semibold	 bg-black text-white">Seleccione el tipo de matricula</h2>
                  <img src="./public/Images/60ff976d13ce3feda2040bb5_Empty_state-p-500-removebg-preview.png" class="w-[300px] " alt="">
                </div>`
          break
      }
    };
  </script>
</body>

</html>
