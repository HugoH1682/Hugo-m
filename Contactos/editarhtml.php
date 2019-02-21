<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="editar.css">
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>
    <div id="divform">
        <form id="form" action="php/añadir.php">
            Nombre<input type="text" name="Nombre" value="<?php echo $nombre?>"><br>
            Telefono <input type="text" name="Telefono" value=""><br>
            <input type="submit" value="Listo">
            <input id="inputEliminar" type="submit" value="Eliminar">
            </form>
        </div>
    
</body>
</html>