@extends('plantillaGeneral')

@section('contenido')

<div class="contenedor">
    <div class="contenedor-izquierdo">
        <a href="">
            <img src="/img/LogoDn.png" alt="Imagen" class="logo-principal">
        </a>            
        <p class="titulo">Bienvenido a</p>
        <p class="mensaje">¡Don't buy here!</p>
        <form class="formulario" action="{{route('login.log')}}" method="POST">
            @csrf
            <input type="text" id="email" name="email" placeholder="CORREO"><br>
            @error('email')
                {{$message}}
            @enderror
            <input type="password" id="password" name="password" placeholder="CONTRASEÑA"><br>
            @error('password')
                {{$message}}
            @enderror
            <button class="button" type="submit">INICIAR SESION</button>
        </form>
        <p class="referencia">¿No tienes cuenta? <a class="aaa" href="Crear"><a href="register" class="linksSecondary">Crea una aquí</a></a></p>
    </div>    
    <div class="contenedor-derecho">
        <img src="/img/imagen.jpg" alt="Imagen" class="imagen-principal">
    </div>
</div>
@endsection
