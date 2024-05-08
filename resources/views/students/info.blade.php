  <div class="card">
            <div class="card-header">Lista de estudiantes</div>
            <div class="card-body">
                <a href="{{ route('student.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New students</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">estudiante id</th>
                            <th scope="col">asistencias</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $students)
                        <tr>
                            <td>{{$students->id}}</td>
                            <th scope="col">estudiante id</th>
                            <th scope="col">asistencias</th>
                        </tr>
                        @empty
                        <td colspan="6">
                            <span class="text-danger">
                                <strong>No students Found!</strong>
                            </span>
                        </td>
                        @endforelse
                    </tbody>
                </table>

              

            </div>
        </div>
    </div>
</div>