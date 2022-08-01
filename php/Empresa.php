<?php

require '../Conexion.php';
session_start();

$correo = $_POST['CORREO'];


$q = "SELECT COUNT(*) as contar FROM empresa WHERE CORREO = '$correo'  ";


$consulta = mysqli_query($Conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0){
 
    echo "<script type=\"text/javascript\">
    alert(\"EL CORREO YA EXISTE EN LA BASE DE DATOS\");
    document.location=('../../Registro/Empresa.html');
    </script>"; 

}else{

 
$con = mysqli_connect('localhost','root','','easy_work') or die ('Error en la conexion del servidor');
$sql = "INSERT INTO empresa VALUES(null,'".$_POST["NIT_EMPRESA"]."','".$_POST["NOMBRE_EMPRESA"]."','".$_POST["DIRECCION_EMPRESA"]."','".$_POST["TELEFONO"]."','".$_POST["PAIS_EMPRESA"]."','".$_POST["CORREO"]."','".$_POST["CONTRASEÑA"]."')";

$resultado = mysqli_query($con,$sql) or die ('error en al consultar la base de datos');

echo 'Nit De La Empresa: ' .$_POST["NIT_EMPRESA"].'<br>';
echo 'Nombre De La Empresa: '.$_POST["NOMBRE_EMPRESA"].'<br>';
echo 'Direccion: ' .$_POST["DIRECCION_EMPRESA"].'<br>';
echo 'Telefono: ' .$_POST["TELEFONO"].'<br>';
echo 'Pais: ' .$_POST["PAIS_EMPRESA"].'<br>';
echo "<a href= '../../Iniciar/Empresa.html'> Iniciar Sesión </a>";
     

}

?>