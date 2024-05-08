@extends('students.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    students Information
                </div>
                <div class="float-end">
                    <a href="{{ route('students.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="id" class="col-md-4 col-form-label text-md-end text-start"><strong>id:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $students->id }}
                    </div>
                </div>
                <div class="row">
                    <label for="dni" class="col-md-4 col-form-label text-md-end text-start"><strong>dni:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $students->dni }}
                    </div>
                </div>

                <div class="row">
                    <label for="apellido" class="col-md-4 col-form-label text-md-end text-start"><strong>apellido:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $students->apellido }}
                    </div>
                </div>


                <div class="row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end text-start"><strong>nombre:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $students->nombre }}
                    </div>
                </div>

                

                <div class="row">
                    <label for="nacimiento" class="col-md-4 col-form-label text-md-end text-start"><strong>nacimiento:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $students->nacimiento }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection