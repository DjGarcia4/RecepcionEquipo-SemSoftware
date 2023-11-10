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
        <h1 class="text-center bg-success text-white shadow">Fomulario Equipo</h1>
        @if(session("exito"))
            <div class="alert alert-success">
                {{session("exito")}}
            </div>
        @endif
        <div class="container p-4">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-sm-8 ">
                    <form class="card p-5 shadow"  action="{{route('formularioequipo.store')}}" method="post">
            @csrf
            <div class="mb-3" >
                <label class="form-label"  for="numero_serie">Número de Serie:</label>
            <input class="form-control" type="text" name="numero_serie" required>
            @error('numero_serie')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="mb-3" >
                <label class="form-label"  for="tipo_equipo">Tipo de Equipo:</label>
                <select class="form-select" name="tipo_equipo" id="tipo_equipo">
                    @foreach(\App\Models\Equipo::$equiposPermitidos as $opcion)
                        <option value="{{ $opcion }}" {{ old('tipo_equipo') == $opcion ? 'selected' : '' }}>
                            {{ $opcion }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3" >
                <label class="form-label"  for="fecha_entrega">Fecha de Entrega:</label>
            <input class="form-control" type="date" name="fecha_entrega" value="{{old('fecha_entrega', now()->toDateString())}}" required>
            </div>
            <div class="mb-3" >
                <label class="form-label"  for="estado">Estado:</label>
            <select class="form-select" name="estado" id="estado">
                @foreach(\App\Models\Equipo::$estadosPermitidos as $opcion)
                    <option value="{{ $opcion }}" {{ old('estado') == $opcion ? 'selected' : '' }}>
                        {{ $opcion }}
                    </option>
                @endforeach
            </select>
            </div>

            <div class=" w-100 d-flex justify-content-center align-content-center">
                    <button type="submit" class="btn btn-success">Guardar Equipo</button>
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
