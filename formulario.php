<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $anfitrion = 'sql5.freesqldatabase.com';
    $usuario = 'sql5497973';
    $contraseña = 'Qj56h2CqlC';
    $database = 'sql5497973';
    $puerto = '3306';

    $conexion = mysqli_connect ($anfitrion, $usuario, $contraseña, $database, $puerto);
    if(!$conexion){
        echo"error al conectar a la base de datos";
    }
    else{
    echo"conectado a la base de datos";
    }   
?>
</body>
</html>

