<?php
namespace Datos;


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$numerodni = $_POST["no"];
$tlf = $_POST["tlf"];
$codigo = $_POST["codigo"];
$numero = $_POST["numerotlf"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$years = $_POST["anio"];
$genero = $_POST["genero"];
   

echo "<h3> Datos recibidos </h3>"; 
echo "<h5> Nombre y apellido </h5>";
echo "$nombre";
echo "";
echo "$apellido";

echo "<h5> Documento de identidad </h5>";
echo "$dni";
echo "$numerodni";

$dia_actual = date('d');
$mes_actual = date('m');
$years_actual = date('Y');

$edad = $years_actual - $years;

echo "<h5> Fecha de nacimiento</h5>";
echo "<h6> Dia $dia </h6>";
echo "<h6> Mes $mes </h6>";
echo "<h5> Edad </h5>";
echo "$edad";

echo "<h5> Genero </h5>";
 
if($_REQUEST['genero'] == "masculino"){
    echo $_REQUEST['genero'];

}

if($_REQUEST['genero'] == "femenino"){
    echo $_REQUEST['genero'];
    
}

if($_REQUEST['genero'] == "nobi"){
    echo $_REQUEST['genero'];
    
}

if($_REQUEST['genero'] == "node"){
    echo $_REQUEST['genero'];
    
}

echo "<h5> telefono </h5>";
echo  "$tlf";
echo "";
echo "$codigo";
echo "$numero";










?>
