@extends('layouts.app')

@section('title', 'Ver Usuarios')

@section('sidebar')

<!-- Dropdown Structure -->

  
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
   
    <h2 style="text-align: center">Details user</h2>
    <p style="text-align: center">
        Name user:  {{$usuario->name}} <br>
        Date :  {{$usuario->created_at}} <br>
        
        <br>    
        
 
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