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
            <h3>{{$totalusuarios = App\Models\User::count();}}</h3>
            <p>Usuarios</p>
        </span>
    </li>
    @if (session('success-update'))
        <div class="alert alert-primary text-center">{{session('success-update')}}</div>
    @elseif (session('success-delete'))
        <div class="alert alert-warning text-center">{{session('success-delete')}}</div>
    @endif
    
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
                @foreach ($usu as $usuario)
                    <tr>
                        <td><p>{{$usuario['name']}}</p></td>
                        <td id="LN">{{$usuario['user']}}</td>
                        <td>{{$usuario['email']}}</td>
                        <td id="UD"><a href="{{route('editar.index', $usuario)}}"><i class='bx bxs-edit-alt'></i></a></td>
                        <td id="UD"><form action="{{route('user.destroy', $usuario)}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                            @csrf
                            @method('DELETE')
                             <button type="submit" style="border: none; background-color: transparent; cursor: pointer;"><i class='bx bxs-eraser'></i></button>
                        </form></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection