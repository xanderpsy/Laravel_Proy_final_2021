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
    <li><a href="{{url('home')}}">Home</a></li>
      <!-- Dropdown Trigger -->
      <li>
    <form action="/logout" method="POST">
                    @csrf 
                    <a href="#"onclick="this.closest('form').submit()">Logout </a> 
                    </form>
                    </li>
    </ul>
  </div>
</nav>
@endsection



@section('content')
   
    <form action="{{route('user.update', $usuario->id)}}" method="POST">
        @csrf 
        @method('PUT')
        Escribe el nuevo nombre: <input type="text" name="name" value="{{$usuario->name}}"><br>
        Rol: <input type="text" name="role" value="{{$usuario->role}}"><br>
        <input type="submit" value="Guardar">
    </form><br>
    
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
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
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
