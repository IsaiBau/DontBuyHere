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
            <h3>{{$totalEs = App\Models\Establecimiento::count();}}</h3>
            <p>Establecimientos</p>
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
                        <td id="UD"><form action="{{route('es.destroy', $establecimiento)}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este establecimiento?')">
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