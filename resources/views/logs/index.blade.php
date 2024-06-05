@section('content')
<div class="container">
    <h1>Registro de Actividades</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Fecha</th>
                <th>Acción</th>
                <th>IP</th>
                <th>Navegador</th>
            </tr>
        </thead>
        <tbody>
           
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->user->name }}</td>
                    <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $log->action }}</td>
                    <td>{{ $log->ip }}</td>
                    <td>{{ $log->browser }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection



