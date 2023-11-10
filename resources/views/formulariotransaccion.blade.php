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
    <h1 class="text-center bg-success text-white shadow">Fomulario Transaccion</h1>
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-8 ">
                <form class="card p-5 shadow" action="{{route('formulariotransaccion.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label"  for="usuario_id">ID del Usuario</label>
        <input class="form-control" type="text" name="usuario_id" required>
        </div>
        <div class="mb-3">
<label class="form-label"  for="equipo_id">ID del Equipo</label>
        <input class="form-control" type="text" name="equipo_id" required>
        </div>
        <div class="mb-3">
<label class="form-label"  for="accion">Acción</label>
        <input class="form-control" type="text" name="accion" required>
        </div>
<div class=" w-100 d-flex justify-content-center align-content-center">
                <button type="submit" class="btn btn-success">Guardar Transacción</button>
            </div>
    </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
