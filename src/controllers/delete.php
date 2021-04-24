<?php
require_once("../database/db.php");
require_once("../models/modelo.php");

if (!isset($_GET["id"])) {
    exit("No hay id");
}


$id = $_GET["id"];
$services = new Service();
$services->delete($id);
header("Location: ../index.php");
?>
<br>