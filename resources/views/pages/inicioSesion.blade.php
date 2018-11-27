@extends('layouts.default')
@section('title','WCSearch Landing Page')
@section('content')
<div id="container">
  <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Inicio de Sesion</h2>
      <div><i class="sprite sprite-usuario"></i> Usuario:</div><input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" />
      <i class="fa fa-envelope" aria-hidden="true"> Email:</i><input type="text" class="form-control" name="email" oninput="validar()" id="email" placeholder="Email" required="">
      <i class="fa fa-unlock-alt" aria-hidden="true"> Contraseña:</i><input type="password" class="form-control" name="password" placeholder="Contraseña" required=""/>   
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe">Recordar Usuario
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="button">Iniciar Sesion</button>
      <p>Para registrarte haz click en el siguiente boton</p>
      <a href="/registro"><button class="btn btn-lg btn-primary btn-block" type="button">Registrarse</button>   
    </form>
  </div>
  <script type="text/javascript" src="js/comprobarEmail.js">
  </script>
</div>
@stop