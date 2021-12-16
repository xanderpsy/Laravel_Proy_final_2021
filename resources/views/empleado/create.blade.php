@extends('layouts.app')

@section('template_title')
    Create Empleado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
      <form class="col s12" method="POST" action="{{route('empleados.store')}}" id="boton2" enctype="multipart/form-data" >
      @csrf
        <div class="row">

          <div class="input-field col s12">
            Nombre:<textarea form="boton2" class="materialize-textarea" name="nombre"></textarea>
          </div>

          <div class="input-field col s12">
             Apellidos:<textarea form="boton2" class="materialize-textarea"  name="apellidos"></textarea>
          </div>

          <div class="input-field col s12">
            Fecha de nacimiento :<input type="text" class="datepicker">
          </div>

          <div class="input-field col s12">
            Correo:<textarea form="boton2" class="materialize-textarea" name="correo"></textarea>
          </div>

          

        </div>


        <div class="row">

            <div class="input-field col s12">
            RFC:<textarea form="boton2" class="materialize-textarea" name="rfc"></textarea>
            </div>

            <div class="input-field col s12">
            Ingreso:<textarea form="boton2" class="materialize-textarea" name="ingreso"></textarea>
            </div>

            <div class="input-field col s12">
            Horario:<textarea form="boton2" class="materialize-textarea" name="horario"></textarea>
            </div>

            <div class="input-field col s12">
            Curp:<textarea form="boton2" class="materialize-textarea" name="curp"></textarea>
            </div>

            <div class="input-field col s12">
            <button class="btn waves-effect waves-light" type="submit" >Guardar</button>
          </div>
        </row>


      </form>
    </div>
    </section>
@endsection
