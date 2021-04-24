<?php
require_once("../database/db.php");
require_once("../models/modelo.php");

$services = new Service();

$datos = $services->getServicios();

require_once("../views/home.php");
