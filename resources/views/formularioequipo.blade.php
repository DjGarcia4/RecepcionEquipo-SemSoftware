<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario Equipo</title>
</head>
<body>
    <!--Creacion de equipo-->
    <form action="{{route('formularioequipo.store')}}" method="post">
        @csrf
        <label for="numero_serie">Número de Serie:</label>
        <input type="text" name="numero_serie" required>
    
        <label for="tipo_equipo">Tipo de Equipo:</label>
        <input type="text" name="tipo_equipo" required>
    
        <label for="fecha_entrega">Fecha de Entrega:</label>
        <input type="date" name="fecha_entrega" required>
    
        <label for="estado">Estado:</label>
        <input type="text" name="estado" required>
    
        <button type="submit">Guardar Equipo</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>