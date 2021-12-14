@extends('layouts.app')

@section('title', 'Modificar Usuarios')

@section('sidebar')

    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
       <li> @if(Auth::check())
        <form id="logout-form" action="{{ url('logout') }}" method="POST">
                    {{ csrf_field() }}
            <button class="btn waves-effect waves-light" type="submit" name="action">Salir</button>
        </form>
        @endif
    </li>

  
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">Blogs</a>
    <ul class="right hide-on-med-and-down">
          <li><a href="{{url('home')}}">Ir a home</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Opciones<i class="material-icons right">arrow_drop_down</i></a></li>

    </ul>
  </div>
</nav>

@endsection

@section('content')
   
   <h4>Editar Blog</h4>
        
<br><br>
    <div class="row">
      <form class="col s12" method="POST" action="{{route('producto.update',$producto->id)}}" id="boton2" enctype="multipart/form-data" >
      @csrf

      @method('PUT')
        <div class="row">

          <div class="input-field col s12">
            Codigo:<textarea form="boton2" class="materialize-textarea" name="codigo">
            {{$producto->id}}</textarea>
          </div>

          <div class="input-field col s12">
            Nombre :<textarea form="boton2" class="materialize-textarea"  name="nombre">
            {{$producto->nombre}}</textarea>
          </div>

          <div class="input-field col s12">
            Cantidad :<textarea form="boton2" class="materialize-textarea" name="cantidad">
            {{$producto->cantidad}}</textarea>
          </div>

          <div class="input-field col s12">
          Imagen:<br><input type="file" name="imagen" form="boton2" value={{$producto->foto}}><br>

          </div>

          <div class="input-field col s12">
           <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar</button>
          </div>

        </div>
      </form>
    </div>
    
@endsection

@section('footer')

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/abrahamsahid.reyesrodriguez">Mi facebook</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
@endsection