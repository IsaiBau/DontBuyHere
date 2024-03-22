@extends('plantillaAdmin')

@section('contenido')
<div class="head-title">
    <div class="left">
        <h1>Panel de control</h1>
        <ul class="breadcrumb">
            <li>
                <a href="#">Panel de control</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="/users">Usuarios</a>
            </li>
        </ul>
    </div>
</div>
<ul class="box-info">
    <li>
        <i class='bx user bxs-group' ></i>
        <span class="text">
            <h3>2834</h3>
            <p>Usuarios</p>
        </span>
    </li>
    
</ul>


<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Usuarios</h3>
            <i class='bx bx-search' ></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th id="LN">Nombre de usuario</th>
                    <th>Correo</th>
                    <th id="UD">Editar</th>
                    <th id="UD">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usu as $u)
                    <tr>
                        <td><p>{{$u['name']}}</p></td>
                        <td id="LN">{{$u['user']}}</td>
                        <td>{{$u['email']}}</td>
                        <td id="UD"><i class='bx bxs-edit-alt'></i></td>
                        <td id="UD"><i class='bx bxs-eraser'></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection