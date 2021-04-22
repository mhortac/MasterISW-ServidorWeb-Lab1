<?php
require_once("../models/modelo.php");
require_once("../database/db.php");

$services = new Service();

$datos = $services->getServicios();

require_once("../views/home.php");
