<?php
session_start();

session_destroy();

header("location: ../../Iniciar/Empresa.html");

exit();
?>