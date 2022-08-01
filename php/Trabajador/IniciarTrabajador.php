<?php
require '../Conexion.php';
session_start();

$correo = $_POST['CORREO'];
$clave = $_POST['CONTRASEÑA'];

$q = "SELECT COUNT(*) as contar FROM trabajadores WHERE CORREO = '$correo' AND PASSWORD = '$clave' ";

$consulta = mysqli_query($Conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0){
    $_SESSION['Auntentificar'] = "$correo";

    header('Location:../inicio/Principal.php');

}else{

    echo "<script type=\"text/javascript\">
    alert(\"Correo o Contraseña incorrectas\");
    document.location = ('../../Iniciar/Trabajador.html');
    </script>";

}


?>