<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo MVC con PHP</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <header class="text-center">
            <h1>Registro de Servicios</h1>
        </header>
        <div class="col-lg-12 text-center">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <td><strong>Servicio</strong></td>
                        <td><strong>Cliente</strong></td>
                        <td><strong>Id Cliente</strong></td>
                        <td><strong>Descripción</strong></td>
                        <td><strong>Fecha inicio</strong></td>
                        <td><strong>Fecha fin (planeada)</strong></td>
                        <td><strong>Ppto horas</strong></td>
                        <td><strong>Fecha fin (real)</strong></td>
                        <td><strong>Nom contacto</strong></td>
                        <td><strong>Equipo de trabajo</strong></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                    ?>
                        <tr>
                            <td><?php echo $datos[$i]["nombre"]; ?></td>
                            <td><?php echo $datos[$i]["cliente"]; ?></td>
                            <td><?php echo $datos[$i]["clave_id"]; ?></td>
                            <td><?php echo $datos[$i]["descripcion"]; ?></td>
                            <td><?php echo $datos[$i]["fecha_inicio"]; ?></td>
                            <td><?php echo $datos[$i]["fecha_fin"]; ?></td>
                            <td><?php echo $datos[$i]["ppto_horas"]; ?></td>
                            <td><?php echo $datos[$i]["fecha_fin"]; ?></td>
                            <td><?php echo $datos[$i]["nom_contacto"]; ?></td>
                            <td><?php echo $datos[$i]["equipo"]; ?></td>
                            <td><i class="fa fa-edit"></i></td>
                            <td><i class="fa fa-trash"></i></td>

                        </tr>
                    <?php
                    }
                    ?>
            </table>
            <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
            <hr />
        </div>
    </div>
</body>

</html>