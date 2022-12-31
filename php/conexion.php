<?php
$hostname_ = "localhost";
$database_ = "c1351312_web";
$username_ = "c1351312_web";
$password_ = "gepevoGE92";
$conexion  = mysqli_connect($hostname_, $username_, $password_, $database_) or trigger_error(mysqli_error(), E_USER_ERROR);
mysqli_set_charset($conexion, 'utf8');
