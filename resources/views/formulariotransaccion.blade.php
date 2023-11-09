<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario Transaccion</title>
</head>
<body>
    <!--Creacion de transaccion-->
    <form action="{{route('formulariotransaccion.store')}}" method="post">
        @csrf
        <label for="usuario_id">ID del Usuario:</label>
        <input type="text" name="usuario_id" required>
        <label for="equipo_id">ID del Equipo:</label>
        <input type="text" name="equipo_id" required>
        <label for="accion">Acción:</label>
        <input type="text" name="accion" required>
        <button type="submit">Guardar Transacción</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>