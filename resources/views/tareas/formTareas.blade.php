<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Agregar Tarea</h1>

    <!-- Forma floja :v/global -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    @endif

    <form action="/tarea" method="POST">
        @csrf
        <label for="tarea">Nombre de la tarea:</label><br>
        <input type="text" name="tarea" value="{{ old( 'tarea' ) }}"><br><br>
        <!-- Específica para cada campo -->
        @error('tarea')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="descripcion">Descripción:</label><br>
        <textarea name="descripcion" id="descripcion" cols="10" rows="5">
            {{ old('descripcion') }}
        </textarea><br><br>
        <label for="tipo">Tipo:</label><br>
        <select name="tipo" id="tipo">
            <option value="Escuela">Escuela</option>
            <option value="Trabajo">Trabajo</option>
        </select>
        <br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
