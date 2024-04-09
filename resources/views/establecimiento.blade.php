@extends('plantillaAdmin')

@section('contenido')
<div class="head-title">
    <div class="left">
        <h1>Panel de control </h1>
        <ul class="breadcrumb">
            <li>
                <a href="/dashboard">Panel de control</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
                <a class="active" href="/establecimiento">Establecimientos</a>
            </li>
        </ul>
    </div>
</div>
<ul class="box-info">
    <li>
        <i class='bx establecimiento bx-buildings' ></i>
        <span class="text">
            <h3>{{$totalusuarios = App\Models\Establecimiento::count();}}</h3>
            <p>Establecimientos</p>
        </span>
    </li>
</ul>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Establecimientos</h3>
            <i class='bx bx-search' ></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Establecimiento</th>
                    <th id="ubi">Ubicacion</th>
                    <th>Tipo de establecimiento</th>
                    <th id="UD">Editar</th>
                    <th id="UD">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($es as $establecimiento)
                    <tr>
                        <td>
                            <img src="{{$establecimiento['url_imagen']}}" id="img_es">
                            <p>{{$establecimiento['name']}}</p>
                        </td>
                        <td id="ubi">{{$establecimiento['direccion']}}</td>
                        <td id="ubi">{{$establecimiento->tipoEstablecimiento->name}}</td>
                        <td id="UD"><a href="{{route('editarEs.index', $establecimiento)}}"><i class='bx bxs-edit-alt'></i></a></td>
                        <td id="UD"><i class='bx bxs-eraser'></td>
                    </tr>
                 @endforeach
                <tr>
                    <td>
                        <img src="/img/pizzeria.jpg" id="img_es">
                        <p>Little Ceaser</p>
                    </td>
                    <td id="ubi">Av. Ruíz Cortines</td>
                    <td><span>4.8</span></td>
                    <td id="UD"><i class='bx bxs-edit-alt'></i></td>
                    <td id="UD"><i class='bx bxs-eraser'></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection