@extends('plantillaAdmin')

@section('contenido')
<div class="head-title">
    <div class="left">
        <h1>Panel de control</h1>
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
                    <th>Calificacion</th>
                    <th id="UD">Editar</th>
                    <th id="UD">Eliminar</th>
                </tr>
            </thead>
            <tbody>
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
                <tr>
                    <td>
                        <img src="/img/restaurante.jpg" id="img_es">
                        <p>Rodízio</p>
                    </td>
                    <td id="ubi">Calle Paseo La Choca 126, 86035 Villahermosa, Tabasco</td>
                    <td><span>4.0</span></td>
                    <td id="UD"><i class='bx bxs-edit-alt'></i></td>
                    <td id="UD"><i class='bx bxs-eraser'></td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/taqueria.jpg" id="img_es">
                        <p>Taqueria "El amigo Martin"</p>
                    </td>
                    <td id="ubi">Playas del Rosario</td>
                    <td><span>2.3</span></td>
                    <td id="UD"><i class='bx bxs-edit-alt'></i></td>
                    <td id="UD"><i class='bx bxs-eraser'></td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/taqueria.jpg" id="img_es">
                        <p>Taqueria "J Jimenez"</p>
                    </td>
                    <td id="ubi">Playas del Rosario</td>
                    <td><span>4.9</span></td>
                    <td id="UD"><i class='bx bxs-edit-alt'></i></td>
                    <td id="UD"><i class='bx bxs-eraser'></td>
                </tr>
                <tr>
                    <td>
                        <img src="/img/pizzeria.jpg" id="img_es">
                        <p>Domino´s</p>
                    </td>
                    <td id="ubi">Soriana Guayabal</td>
                    <td><span>5.0</span></td>
                    <td id="UD"><i class='bx bxs-edit-alt'></i></td>
                    <td id="UD"><i class='bx bxs-eraser'></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection