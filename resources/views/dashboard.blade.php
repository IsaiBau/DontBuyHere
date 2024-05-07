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
                <a class="active" href="/dashboard">Inicio</a>
            </li>
        </ul>
    </div>
</div>
<ul class="box-info">
    <li>
        <i class='bx review bxs-calendar-check' ></i>
        <span class="text">
            <h3>{{$totalResenas = App\Models\Resena::count();}}</h3>
            <p>Reseñas</p>
        </span>
    </li>
    <li>
        <i class='bx user bxs-group' ></i>
        <span class="text">
            <h3>{{$totalEs = App\Models\Establecimiento::count();}}</h3>
            <p>Usuarios</p>
        </span>
    </li>
    <li>
        <i class='bx establecimiento bx-buildings' ></i>
        <span class="text">
            <h3>{{$totalEs = App\Models\Establecimiento::count();}}</h3>
            <p>Establecimientos</p>
        </span>
    </li>
</ul>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Reseñas recientes</h3>
            <i class='bx bx-search' ></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Reseña</th>
                    <th id="date">Fecha</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resena as $resena)
                    <tr>
                        <td>
                            <img src="{{$resena->establecimiento->url_imagen}}" id="img_es">
                            <p>{{$resena['resena']}}</p>
                        </td>
                        <td id="date">{{$resena['fecha']}}</td>
                        @if ($resena['estado'] == "Sin leer")
                            <td><span class="status pending">{{$resena['estado']}}</span></td>
                        @elseif ($resena['estado'] == "Completado")
                            <td><span class="status completed">{{$resena['estado']}}</span></td>
                        @elseif ($resena['estado'] == "En proceso")
                            <td><span class="status process">{{$resena['estado']}}</span></td>
                        @endif
                    </tr>
             @endforeach
                <tr>
                    <td>
                        <img src="/img/pizzeria.jpg" id="img_es">
                        <p>No es lo que promete...</p>
                    </td>
                    <td id="date">01-03-2024</td>
                    <td><span class="status completed">Completado</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="todo">
        <div class="head">
            <h3>Establecimientos</h3>
        </div>
        <ul class="todo-list">
            @foreach ($establecimiento as $establecimiento)
            <li @if ($establecimiento->tipoEstablecimiento->name == "Restaurante")
                class="completed"
            @elseif ($establecimiento->tipoEstablecimiento->name == "Tienda")
                class="not-completed"
            @endif >
                <p>{{$establecimiento['name']}}</p>
            </li>
         @endforeach
            <li  class="completed">
                <p>Taquería "El tío Martín"</p>
            </li>
            <li class="not-completed">
                <p>Soriana guayabal</p>
            </li>
        </ul>
    </div>
</div>
@endsection
