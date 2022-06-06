<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilosform.css">
</head>
<body>
    <form action="validacion.php" method="post" id="form">
        <div class="form">
            <h1>Ingresa tus datos:</h1>

            <div class="grupo">
              <label for="nombre">Nombre: <br></label>
              <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre completo"><span class="barra"></span><br>
            </div>

            <div class="grupo" >
                <Label>Género: <br><br></Label>
                Masculino<input type="radio" name="genero"><br>
                Femenino<input type="radio" name="genero"><br><br>
            </div>

            <div class="grupo">
                <label for="telefono">Teléfono: </label><br>
                <input type="text" name="telefono" id="telefono" placeholder="Ingresa solo 10 dígitos"><span class="barra"></span><br><br>
            </div>

            <div class="grupo">
                <label for="contraseña">Contraseña: </label><br>
                <input type="password" name="contraseña" id="contraseña"><span class="barra"></span><br><br>
            </div>

            <div class="grupo">
                <label>Selecciona tus intereses: </label><br>
                Libros<input type="checkbox" name="intereses"><br>
                Peliculas<input type="checkbox" name="intereses"><br>
                Videojuegos<input type="checkbox" name="intereses"><br><br>
            </div>
        </div>
        
        <button type="submit">Registrarte</button>
    </form>
    <a href="index.html"><button type="menu">Regresar</button></a>
    <script src="validacion.js"></script>
</body>
</html>