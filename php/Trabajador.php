<?php

require '../Conexion.php';
session_start();

$correo = $_POST['CORREO'];


$q = "SELECT COUNT(*) as contar FROM trabajadores WHERE CORREO = '$correo'";

$consulta = mysqli_query($Conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0){
  

    echo "<script type=\"text/javascript\">
    alert(\"EL CORREO YA EXISTE EN LA BASE DE DATOS\");
    document.location=('../../Registro/Trabajador.html');
    </script>";





}else{

    $con = mysqli_connect('localhost','root','','easy_work') or die ('Error en la conexion del servidor');
    $sql = "INSERT INTO trabajadores VALUES(null,'".$_POST["NOMBRES"]."','".$_POST["APELLIDOS"]."','".$_POST["CEDULA"]."','".$_POST["FECHA_DE_NACIMIENTO"]."','".$_POST["DIRECCION"]."','".$_POST["TELEFONO"]."','".$_POST["CORREO"]."','".$_POST["CONTRASEÑA"]."')";
    
    $resultado = mysqli_query($con,$sql) or die ('Error Al Conectar A La Base De Datos');
    
    
    echo "<title>Datos Registrados</title>";
    
    echo 'Nombre: ' .$_POST["NOMBRES"].'<br>';
    echo 'Apellido: '.$_POST["APELLIDOS"].'<br>';
    echo 'Cedula: ' .$_POST["CEDULA"].'<br>';
    echo 'fecha de nacimiento: ' .$_POST["FECHA_DE_NACIMIENTO"].'<br>';
    echo 'Direccion: ' .$_POST["DIRECCION"].'<br>';
    echo 'Telefono: ' .$_POST["TELEFONO"].'<br>'; 
    echo "<a href= '../../Iniciar/Trabajador.html'> Iniciar Sesión </a>";
    
}
?>