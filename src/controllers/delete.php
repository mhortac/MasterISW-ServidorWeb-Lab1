<?php
// Se importa la clase Database para utilizarla en el modelo
require_once("../database/db.php");
// Se importa el modelo
require_once("../models/modelo.php");
// Se valida el identificador del registro que se desea eliminar
if (!isset($_GET["id"])) {
    exit("Un error inesperado ha ocurrido. Inténtelo nuevamente.");
}
// Creamos una instancia del Service
$services = new Service();
// Se procede a eliminar el registro 
$services->delete($_GET["id"]);
// Se re-direcciona a la vista principal
header("Location: ../index.php");
?>
<br>