@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $empleado->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nacimiento:</strong>
                            {{ $empleado->nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $empleado->mail }}
                        </div>
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $empleado->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Ingreso:</strong>
                            {{ $empleado->ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Nomina:</strong>
                            {{ $empleado->nomina }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $empleado->horario }}
                        </div>
                        <div class="form-group">
                            <strong>Curp:</strong>
                            {{ $empleado->curp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
