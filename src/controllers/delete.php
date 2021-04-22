<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}

require_once("../models/modelo.php");

$id = $_GET["id"];
$services = new Service();
$services->delete($id);
