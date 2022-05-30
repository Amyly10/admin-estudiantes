@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? 'Show Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Creditos:</strong>
                            {{ $materia->Creditos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $materia->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor:</strong>
                            {{ $materia->Profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $materia->Turno }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $materia->Disponible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
