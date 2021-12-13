<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $empleado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $empleado->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nacimiento') }}
            {{ Form::text('nacimiento', $empleado->nacimiento, ['class' => 'form-control' . ($errors->has('nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Nacimiento']) }}
            {!! $errors->first('nacimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mail') }}
            {{ Form::text('mail', $empleado->mail, ['class' => 'form-control' . ($errors->has('mail') ? ' is-invalid' : ''), 'placeholder' => 'Mail']) }}
            {!! $errors->first('mail', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $empleado->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingreso') }}
            {{ Form::text('ingreso', $empleado->ingreso, ['class' => 'form-control' . ($errors->has('ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Ingreso']) }}
            {!! $errors->first('ingreso', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nomina') }}
            {{ Form::text('nomina', $empleado->nomina, ['class' => 'form-control' . ($errors->has('nomina') ? ' is-invalid' : ''), 'placeholder' => 'Nomina']) }}
            {!! $errors->first('nomina', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario') }}
            {{ Form::text('horario', $empleado->horario, ['class' => 'form-control' . ($errors->has('horario') ? ' is-invalid' : ''), 'placeholder' => 'Horario']) }}
            {!! $errors->first('horario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curp') }}
            {{ Form::text('curp', $empleado->curp, ['class' => 'form-control' . ($errors->has('curp') ? ' is-invalid' : ''), 'placeholder' => 'Curp']) }}
            {!! $errors->first('curp', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>