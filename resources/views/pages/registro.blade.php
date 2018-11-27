@extends('layouts.default')
@section('title','WCSearch Landing Page')
@section('content')
<div id="container">
  <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Registro</h2>
      DNI: <input type="text" class="form-control" name="dni" placeholder="DNI" required="" autofocus="" />
      NOMBRE: <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="" autofocus="" />
      APELLIDOS: <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required="" autofocus="" />
      SEXO: Masculino<input type="radio" name="sexo" value="masculino"> Femenino<input type="radio" name="sexo" value="femenino"> Otro<input type="radio" name="sexo" value="otro">
      EMAIL: <input type="text" class="form-control" name="email" oninput="validar()" id="email" placeholder="Email" required="">
      TELEFONO: <input type="text" class="form-control" name="telefono" placeholder="Telefono" required="" autofocus="" />
      CALLE: <input type="text" class="form-control" name="calle" placeholder="Calle" required="" autofocus="" />
      CODIGO POSTAL: <input type="text" class="form-control" name="codigopostal" placeholder="Codigo Postal" required="" autofocus="" />
      CIUDAD: <select name="ciudad" id="ciudad">
        <option value="Donosti">Donosti</option>
        <option value="Errenteria">Errenteria</option>
        <option value="Oiartzun">Oiartzun</option>
      </select><br/>
      NEWSLETTER: <input type="checkbox" value="newsletter" id="newsletter" name="newsletter">
      <button class="btn btn-lg btn-primary btn-block" type="button">Registrarse</button>   
    </form>
  </div>
  <script type="text/javascript" src="js/comprobarEmail.js">
  </script>
</div>
@stop