<?php
// Se importa la clase Database para utilizarla en el modelo
require_once("./database/db.php");
// Se importa el modelo
require_once("./models/modelo.php");
// Creamos una instancia del Service
$services = new Service();
// Extraemos los datos desde base de datos
$datos = $services->getServicios();
// Mostramos la vista del inicio
require_once("./views/home.php");
