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
        
        <form class="formulariocrear">
            <img src="/img/LogoDn.png" alt="Imagen" class="logo-crear1">
            <p class="titulocrear"> Crear Cuenta</p>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="for"><br><br>
            <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido Paterno" class="contenedor-campos1">
            <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Apellido Materno" class="contenedor-campos2">              
            <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" class="for"><br><br>
            <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" class="contenedor-campos1">
            <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" placeholder="Confirmar Contraseña" class="contenedor-campos2"><br><br>
            <button class="button1" type="submit">Crear Cuenta</button>
        </form>
        
    </div>
</div>
@endsection
