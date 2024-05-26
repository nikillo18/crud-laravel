<!DOCTYPE html>
<html>
<head>
    <title>laravel</title>
</head>
<body>
    <h1>Buscar Estudiante </h1>
    <form action="{{ route('asissts.search') }}" method="POST">
        @csrf
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br>
        <button type="submit">Buscar</button><br>
    </form>
    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
    <button>
        <a href="{{ route('students.index') }}">volver</a>
    </button>
</body>
</html>
