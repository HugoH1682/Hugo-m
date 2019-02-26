<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contactos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>
  <div id="divwhole">
  <div class="divcontacto">
    <a class="acontacto" href="editarhtml.php"><?php 
$host="localhost";
$dbusuario="root";
$dbcontrasena="";
$dbnombre="contactos";
//creo la conexión con base de datos
$conn = new mysqli ($host,$dbusuario,$dbcontrasena,$dbnombre);
//Imprimo los elementos de mi base de datos usando la función fecth array
$sql = "SELECT Nombre FROM contactos ";
$resultado = mysqli_query($conn, $sql);
    $arrayresultado = mysqli_fetch_array($resultado);
    $n = $arrayresultado['Nombre'];
    echo '<p style=font-size:2rem;>'.$n.'</p>';
?>

    <a/>
    <a href="añadirhtml.php" class="fboton">
    <i class="fa fa-plus mas"></i>
</a>
  
  </div>
  
