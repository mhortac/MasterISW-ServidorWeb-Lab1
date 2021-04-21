<!DOCTYPE html>
<?php
if (
    (isset($_POST['cliente'])) && ($_POST['cliente'] != '') &&
    (isset($_POST['nombre'])) && ($_POST['nombre'] != '') &&
    (isset($_POST['fecha_inicio'])) && ($_POST['fecha_inicio'] != '') &&
    (isset($_POST['ppto_horas'])) && ($_POST['ppto_horas'] != '') &&
    (isset($_POST['clave_id'])) && ($_POST['clave_id'] != '') &&
    (isset($_POST['descripcion'])) && ($_POST['descripcion'] != '') &&
    (isset($_POST['fecha_fin'])) && ($_POST['fecha_fin'] != '') &&
    (isset($_POST['fecha_fin_real'])) && ($_POST['fecha_fin_real'] != '') &&
    (isset($_POST['nom_contacto'])) && ($_POST['nom_contacto'] != '') &&
    (isset($_POST['equipo'])) && ($_POST['equipo'] != '')
) {

    include "models/modelo.php";
    $nuevo = new Service();
    $datos = $nuevo->setServicio(
        $_POST['cliente'],
        $_POST['nombre'],
        $_POST['fecha_inicio'],
        $_POST['ppto_horas'],
        $_POST['clave_id'],
        $_POST['descripcion'],
        $_POST['fecha_fin'],
        $_POST['fecha_fin_real'],
        $_POST['nom_contacto'],
        $_POST['equipo']
    );
}
?>


<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo MVC con PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .abs-center {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .form {
            width: 650px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="abs-center">
            <div class="row">
                <div class="col-sm-10">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="controllers/controlador.php">Ver servicios</a></li>
                        </ol>
                    </nav>
                    <form class="border p-3 form" autocomplete="off" name="formulario" method="POST">

                        <h1><small>Datos del Servicio</small></h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="validarNombre">Cliente:<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="cliente" name="cliente" tabindex="1" required="">
                                </div>
                                <div class="form-group">
                                    <label for="validarNombre">Nom Servicio:<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" tabindex="3" required="">
                                </div>
                                <div class="form-group">
                                    <label for="validarNombre">Fecha Inicio:<span class="red">*</span></label>
                                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" tabindex="5" required="">
                                </div>
                                <div class="form-group">
                                    <label for="validarNombre">Ppto horas:<span class="red">*</span></label>

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">T</span></div>
                                        <input type="number" class="form-control" id="ppto_horas" name="ppto_horas" tabindex="7" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="validarNombre">Id Clave:<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="clave_id" name="clave_id" tabindex="2">
                                </div>
                                <div class="form-group">
                                    <label for="validarNombre">Descripción:<span class="red">*</span></label>
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="1" cols="50" tabindex="4" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="validarNombre">Fecha Fin (planeada):<span class="red">*</span></label>
                                    <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" tabindex="6" required="">
                                </div>
                                <div class="form-group">
                                    <label for="validarNombre">Fecha Fin (real):<span class="red">*</span></label>
                                    <input type="date" class="form-control" id="fecha_fin_real" name="fecha_fin_real" tabindex="8" required="">
                                </div>
                            </div>
                        </div>

                        <h1><small>Datos de contacto</small></h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="validarNombre">Nombre:<span class="red">*</span></label>
                                    <input type="text" class="form-control" id="nom_contacto" name="nom_contacto" tabindex="9" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="validarNombre">Equipo de trabajo:<span class="red">*</span></label>
                                    <select class="custom-select" id="equipo" name="equipo">
                                        <option value="Alicante">Alicante</option>
                                        <option value="Barcelona">Barcelona</option>
                                        <option value="Madrid">Madrid</option>
                                        <option value="Sevilla">Sevilla</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="error" id="error"></div>

                        <button class="btn btn-primary" type="submit"> Enviar </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</body>

</html>