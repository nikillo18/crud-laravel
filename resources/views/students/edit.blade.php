@extends('students.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Edit students
                </div>
                
                    <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('students.update', $students) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">id</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ $students->id }}">
                            @if ($errors->has('id'))
                            <span class="text-danger">{{ $errors->first('id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="dni" class="col-md-4 col-form-label text-md-end text-start">dni</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control @error('dni') is-invalid @enderror" id="dni" name="dni" value="{{ old('dni') }}">
                            @if ($errors->has('dni'))
                            <span class="text-danger">{{ $errors->first('dni') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="apellido" class="col-md-4 col-form-label text-md-end text-start">apellido</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{ $students->apellido }}">
                            @if ($errors->has('apellido'))
                            <span class="text-danger">{{ $errors->first('apellido') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-end text-start">nombre</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ $students->nombre }}">
                            @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre') }}</span>
                            @endif
                        </div>
                    </div>

                  
                    </div>
                    <div class="mb-3 row">
                        <label for="nacimiento" class="col-md-4 col-form-label text-md-end text-start">nacimiento</label>
                        <div class="col-md-6">
                            <input type="date" step="0.01" class="form-control @error('nacimiento') is-invalid @enderror" id="nacimiento" name="nacimiento" value="{{ $students->nacimiento}}">
                            @if ($errors->has('nacimiento'))
                            <span class="text-danger">{{ $errors->first('nacimiento') }}</span>
                            @endif
                        </div>
                    </div>

                

                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>

                </form>
           
        </div>
    </div>
</div>

@endsection