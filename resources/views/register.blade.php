@extends('plantillaGeneral')

@section('contenido')
<div class="contenedor">
    <div class="contenedor-izquierdocrear">
        <img src="/img/LogoDn.png" alt="Imagen" class="logo-crear">
        <p class="titulocrear1">Bienvenido a</p>
        <p class="titulocrear2">!Don't buy here¡</p>
        <p class="mensajecrear">Asegurate de introducir tus datos de forma correcta</p>
        <button class="button_iniciarsesioncrear" type="submit"><a href="login" class="linksSecondary">Iniciar sesion</a></button>
    </div>    
    <div class="contenedor-derechocrear">
        
        <form class="formulariocrear" action="{{route('registro')}}" method="POST">
            @csrf
            <img src="/img/LogoDn.png" alt="Imagen" class="logo-crear1">
            <p class="titulocrear"> Crear Cuenta</p>
            <input type="text" id="nombre" name="name" placeholder="Nombre" class="for" value="{{old('name')}}"><br>
            @error('name')
                {{$message}}
            @enderror
            <input type="text" id="usuario" name="user" placeholder="Usuario" class="for" value="{{old('user')}}">
            @error('user')
                {{$message}}
            @enderror            
            <input type="email" id="correo" name="email" placeholder="Correo Electrónico" class="for" value="{{old('email')}}">
            @error('email')
                {{$message}}
            @enderror
            <input type="password" id="password" name="password" placeholder="Contraseña" class="for" value="{{old('password')}}">
            @error('password')
                {{$message}}
            @enderror
            <input type="password" id="password" name="password_confirmation" placeholder="Confirmar Contraseña" class="for">
            @error('password_confirmation')
                {{$message}}
            @enderror
            <button class="button1" type="submit">Crear Cuenta</button>
        </form>
        
    </div>
</div>
@endsection
