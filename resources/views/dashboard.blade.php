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
            <h3>1020</h3>
            <p>Reseñas</p>
        </span>
    </li>
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
                <tr>
                    <td>
                        <img src="/img/pizzeria.jpg" id="img_es">
                        <p>Mal establecimiento...</p>
                    </td>
                    <td id="date">01-03-2024</td>
                    <td><span class="status completed">Completado</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/restaurante.jpg" id="img_es">
                        <p>Deja mucho que desear...</p>
                    </td>
                    <td id="date">01-03-2024</td>
                    <td><span class="status pending">Pendiente</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/taqueria.jpg" id="img_es">
                        <p>No es lo que buscaba...</p>
                    </td>
                    <td id="date">01-03-2024</td>
                    <td><span class="status process">En proceso</span></td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/taqueria.jpg" id="img_es">
                        <p>Pedi una hamburguesa...</p>
                    </td>
                    <td id="date">01-03-2024</td>
                    <td><span class="status pending">Pendiente</span></td>
                </tr>
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
            <li class="completed">
                <p>Little Caesar</p>
            </li>
            <li class="completed">
                <p>Taquería "El tío Martín"</p>
            </li>
            <li class="completed">
                <p>MC Donald's</p>
            </li>
            <li class="completed">
                <p>Burguer King</p>
            </li>
            <li class="not-completed">
                <p>Soriana guayabal</p>
            </li>
        </ul>
    </div>
</div>
@endsection