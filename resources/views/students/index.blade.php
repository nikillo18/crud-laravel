@extends('students.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">Lista de estudiantes</div>
            <div class="card-body">
                <a href="{{ route('students.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New students</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">dni</th>
                            <th scope="col">apellido</th>
                            <th scope="col">nombre</th>
                             <th scope="col">nacimiento</th>
                             <th scope="col">Action</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $students)
                        <tr>
                        
                            
                            <td>{{$students->id}}</td>
                            <td>{{$students->dni}}</td>
                            <td>{{$students->apellido}}</td>
                            <td>{{$students->nombre}}</td>
                            <td>{{$students->nacimiento}}</td>
                            
                            <td>
                                <form action="{{ route('students.destroy', $students->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('students.show', $students->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>
                                    
                                     <a href="{{ route('students.edit', $students) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> info</a>
                                    
                                    <a href="{{ route('students.edit', $students->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this students?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
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

@endsection