<?php
require 'includes/funciones.php';

$servicios = obtenerServicios();

// var_dump(json_encode($servicios));

echo json_encode($servicios);