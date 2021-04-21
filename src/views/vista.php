<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo MVC con PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="text-center">
            <h1>Registro de Servicios</h1>
        </header>
        <div class="col-lg-12 text-center">


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> Servicio </th>
                        <th scope="col"> Cliente </th>
                        <th scope="col"> Id Cliente </th>
                        <th scope="col"> Descripción </th>
                        <th scope="col"> Fecha inicio </th>
                        <th scope="col"> Fecha fin (planeada) </th>
                        <th scope="col"> Ppto horas </th>
                        <th scope="col"> Fecha fin (real) </th>
                        <th scope="col"> Nom contacto </th>
                        <th scope="col"> Equipo de trabajo </th>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>


            <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
            <hr />
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