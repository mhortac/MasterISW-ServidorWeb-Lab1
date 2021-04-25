<?php
// Se importa la clase Database para utilizarla en el modelo
require_once("../database/db.php");
// Se importa el modelo
require_once("../models/modelo.php");
// Teniendo en cuenta que los campos son requeridos, se valida que el contenido sea distinto de vacío
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
    // Creamos una instancia del Service
    $services = new Service();
    // Creamos un nuevo registro en base de datos de acuerdo a los parámetros
    $services->create(
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
// Se re-direcciona a la vista principal
header("Location: ../index.php");

?>
<br>