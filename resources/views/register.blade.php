@extends('plantillaGeneral')

@section('contenido')
<div class="contenedor">
    <div class="contenedor-izquierdocrear">
        <img src="/img/LogoDn.png" alt="Imagen" class="logo-crear">
        <p class="titulocrear1">Bienvenido a</p>
        <p class="titulocrear2">Don't buy here!</p>
        <p class="mensajecrear">Asegurate de introducir tus datos de forma correcta</p>
        <button id="loginButton" class="button_iniciarsesioncrear" type="submit">Iniciar sesion</button>
    </div>
    <script>
      var a = true;
      document.getElementById("loginButton").addEventListener("click", function() {
              window.location.href = "/login";
      })
    </script>
    <div class="contenedor-derechocrear">
        
        <form class="formulariocrear" action="{{route('registro')}}" method="POST">
            @csrf
            <img src="/img/LogoDn.png" alt="Imagen" class="logo-crear1">
            <p class="titulocrear"> Crear Cuenta</p>
            <input type="text" id="nombre" name="name" placeholder="Nombre" class="for" value="{{old('name')}}">
            <div class="errores"> @error ('name')
                    {{$message}}
                  @enderror
            </div>
            <input type="text" id="usuario" name="user" placeholder="Usuario" class="for" value="{{old('user')}}">
            <div class="errores"> @error ('user')
                {{$message}}
              @enderror
             </div>            
            <input type="email" id="correo" name="email" placeholder="Correo Electrónico" class="for" value="{{old('email')}}">
            <div class="errores"> @error ('email')
                {{$message}}
              @enderror
            </div>
            <input type="password" id="password" name="password" placeholder="Contraseña" class="for" value="{{old('password')}}">
            <div class="errores"> @error ('password')
                {{$message}}
              @enderror
            </div>
            <input type="password" id="password" name="password_confirmation" placeholder="Confirmar Contraseña" class="for">
            <div class="errores"> @error ('password_confirmation')
                {{$message}}
              @enderror
            </div>
            <button class="button1" type="submit">Crear Cuenta</button>
        </form>
        
    </div>
</div>
@endsection
