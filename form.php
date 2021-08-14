<?php
namespace Datos;


$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$dni = $_GET["dni"];
$numerodni = $_GET["no"];
$tlf = $_GET["tlf"];
$codigo = $_GET["codigo"];
$numero = $_GET["numerotlf"];
$dia = $_GET["dia"];
$mes = $_GET["mes"];
$years = $_GET["anio"];
$genero = $_GET["genero"];

$Empresa = $_GET["nombreempresa"];
$fechadeiniciomes = $_GET["month"];
$fechadeinicioanio = $_GET["year"];
$fechadesalidames = $_GET["monthh"];
$fechadesalidaanio = $_GET["yearr"];
$cargo = $_GET["puestoocupado"];
$des = $_GET["descripcion"];

$institucion = $_GET["institucion"];
$ingr = $_GET["luis"];
$ingre = $_GET["felipe"];
$egr = $_GET["maria"];
$egre = $_GET ["fernanda"];
$nivel =$_GET["nivel"];



   

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
$file = file_get_contents('persona.json');
$file = json_decode($file);

$registro = [
    'nombre' => $_GET['nombre'].' '.$_GET['apellido'],
    'dni' => $_GET['dni'].' '.$_GET['no'],
    'fecha_nacimiento' => $_GET['dia'].'  '.$_GET['mes'],
    'genero' => $_GET['genero'],
    'telefono' => [
        'tipo' => $_GET['tlf'],
        'codigo' => $_GET['codigo'],
        'numero' => $_GET['numerotlf']
    ],
];
$file[] = $registro;

$file = json_encode($file);

file_put_contents('persona.json',$file);
?>
<?php


echo "<h3> Curriculum </h3>";

echo "$Empresa";

echo "<h5> Fecha de inicio</h5>";

echo "$fechadeiniciomes";
echo "-";
echo "$fechadeinicioanio";

echo "<h5> Fecha de salida </h5>";
echo "$fechadesalidames";
echo "-";
echo "$fechadesalidaanio";

echo "<h5> Puesto ocupado </h5>";
echo "$cargo";

echo "<h5> Descripcion </h5>";
echo "$des";

$file = file_get_contents('experiencia.json');
$file = json_decode($file);

$registro = [
    'nombreempresa' => $_GET['nombreempresa'],
    'fecha de inicio' => $_GET['month'].' '.$_GET['year'],
    'fecha de salida' => $_GET['monthh'].'  '.$_GET['yearr'],
    'puesto ocupado' => $_GET['puestoocupado'],
    'descripcion' => $_GET['descripcion'],
        
];
$file[] = $registro;

$file = json_encode($file);

file_put_contents('experiencia.json',$file);
?>



<?php
echo "<h3> Educacion</h3>";

echo "<h5> Institucion </h5>"; 
echo "$institucion";

echo "<h5> Fecha de ingreso </h5>";
echo "$ingr";
echo "-";
echo "$ingre";

echo "<h5> Fecha de egreso </h5>";
echo "$egr";
echo "-";
echo "$egre";

echo "<h5> Nivel educativo </h5>";
echo "$nivel";

$file = file_get_contents('educacion.json');
$file = json_decode($file);

$registro = [
    'Institucion' => $_GET['institucion'],
    'fecha de ingreso' => $_GET['luis'].' '.$_GET['felipe'],
    'fecha de egreso' => $_GET['maria'].'  '.$_GET['fernanda'],
    'Nivel educativo' => $_GET['nivel'],
    ];
$file[] = $registro;

$file = json_encode($file);

file_put_contents('educacion.json',$file);







?>











