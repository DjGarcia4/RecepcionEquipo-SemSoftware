<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario Usuario</title>
</head>
    <body>
        <!--Creacion de usuario-->
        <h1 class="text-center bg-success text-white shadow">Fomulario Usuario</h1>
        @if(session("exito"))
            <div class="alert alert-success">
                {{session("exito")}}
            </div>
        @endif
        <div class="container p-4">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-8 ">
                    <form class="card p-5 shadow" action="{{route('formulariousuario.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label"  for="nombre">Nombre Completo</label>
                <input class="form-control" type="text" name="nombre" required>
                @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label"  for="numero_id">Numero de Identidad</label>
                <input class="form-control" type="text" name="numero_id" required>
                @error('numero_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label"  for="correo">Correo</label>
                <input class="form-control" type="email" name="correo" required>
                @error('correo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label"  for="contraseña">Contraseña</label>
                <input class="form-control" type="password" name="contraseña" required>
                @error('contraseña')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label"  for="rol">Rol</label>
                <select class="form-select" name="rol" id="rol">
                    @foreach(\App\Models\Usuario::$rolesPermitidos as $opcion)
                        <option value="{{ $opcion }}" {{ old('rol') == $opcion ? 'selected' : '' }}>
                            {{ $opcion }}
                        </option>
                    @endforeach
                </select>
                @error('rol')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class=" w-100 d-flex justify-content-center align-content-center">
                    <button type="submit" class="btn btn-success">Guardar Usuario</button>
                </div>

        </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
