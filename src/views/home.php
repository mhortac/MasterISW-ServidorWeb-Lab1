<?php include_once "header.php"; ?>

<div class="my-5 outline-shadow">
    <table class="table table-borderless">
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
                    <td><a class="btn btn-outline-primary" href="../views/update.php?id=<?php echo $datos[$i]["id"] ?>"><i class="fa fa-edit"></i></a></td>
                    <td><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $datos[$i]["id"] ?>"><i class="fa fa-trash"></i></a></td>

                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include_once "footer.php"; ?>