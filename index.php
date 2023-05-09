<?php

require_once "controllers/inicio.controller.php";
require_once "controllers/usuarios.controller.php";
require_once "models/usuarios.modelo.php";

$inicio = new ControllerInicio();

$inicio->ctrGetInicio();