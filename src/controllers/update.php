<?php
require_once("../models/modelo.php");
require_once("../database/db.php");

if (!isset($_GET["id"])) {
    exit("No hay id");
}



if (!$_GET["id"]) {
    exit("Algo inesperado ha sucedido. Inténtelo nuevamente.");
}

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
    $service = new Service();
    $service->update(
        $_POST['cliente'],
        $_POST['nombre'],
        $_POST['fecha_inicio'],
        $_POST['ppto_horas'],
        $_POST['clave_id'],
        $_POST['descripcion'],
        $_POST['fecha_fin'],
        $_POST['fecha_fin_real'],
        $_POST['nom_contacto'],
        $_POST['equipo'],
        $_GET["id"]
    );
}
?>
<br>