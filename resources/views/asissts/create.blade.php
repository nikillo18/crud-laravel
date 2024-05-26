<!DOCTYPE html>
<html>
<head>
    <title>laravel</title>
</head>
<body>
    <h1>Registrar Asistencia </h1>
    <h1>Nombre:{{ $student->nombre }} {{ $student->apellido }}</h1>
    <h1> DNI:{{ $student->dni }} Nacimiento:{{ $student->nacimiento}}</h1>
    <form action="{{ route('asissts.store') }}" method="POST">
        @csrf
        <input type="hidden" name="student_id" value="{{ $student->id }}"><br>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <label for="presente">Presente:</label>
        <input type="checkbox" id="presente" name="presente" value="1">
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
