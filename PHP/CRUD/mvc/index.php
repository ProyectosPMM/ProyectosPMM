<?php
require_once "Controladores/RutasC.php";
require_once "Controladores/adminC.php";
require_once "Controladores/empleadosC.php";

require_once "Modelos/RutasM.php";
require_once "Modelos/adminM.php";
require_once "Modelos/empleadosM.php";

$rutas = new RutasControlador();
$rutas -> Plantilla();

