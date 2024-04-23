@extends('plantillaGeneral')

@section('contenido')
    <br>

    <div class="container">
        <h1>{{ $establecimiento->name }}</h1>
        
        
        <br>
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                    <div class="col-md-4">
                            <img src="{{ $establecimiento->url_imagen }}" width="100%" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><b>{{ $establecimiento->name }}</b></h5>
                                <p class="card-text">{{ $establecimiento->direccion }}</p>
                                <div>
                                    @php
                                        $calificacion = $establecimiento->calificacion;
                                        $estrellas_llenas = floor($calificacion);
                                        $estrellas_medias = ceil($calificacion - $estrellas_llenas);
                                        $estrellas_vacias = 5 - $estrellas_llenas - $estrellas_medias;
                                    @endphp
                                    @for ($i = 0; $i < $estrellas_llenas; $i++)
                                        <span class="fa fa-star checked"></span>
                                    @endfor
                                    @for ($i = 0; $i < $estrellas_medias; $i++)
                                        <span class="fa fa-star-half-alt checked"></span>
                                    @endfor
                                    @for ($i = 0; $i < $estrellas_vacias; $i++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                    <p class="prom d-inline prom">({{ $calificacion }} Promedio de calificación)</p>
                                </div> <br>
                                <!-- Mostrar las reseñas -->
                                @foreach($resenas as $resena)
                                <div class="row">
                                    <div class="col">
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-8">
                                            <div class="card-body">
                                                <i class="fa-regular fa-user fa-lg"></i>
                                                <h5 class="d-inline"><b>{{ $resena->user->name }}</b></h5>
                                                <p class="">{{ $resena->created_at->diffForHumans() }}</p>
                                                <p class="card-text review">{{ $resena->resena }}</p>
                                                
                                                @php
                                                    $calificacion_resena = $resena->calificacion;
                                                    $estrellas_llenas_resena = floor($calificacion_resena);
                                                    $estrellas_medias_resena = ceil($calificacion_resena - $estrellas_llenas_resena);
                                                    $estrellas_vacias_resena = 5 - $estrellas_llenas_resena - $estrellas_medias_resena;
                                                @endphp
                                                @for ($i = 0; $i < $estrellas_llenas_resena; $i++)
                                                    <span class="fa fa-star fa-lg"></span>
                                                @endfor
                                                @for ($i = 0; $i < $estrellas_medias_resena; $i++)
                                                    <span class="fa fa-star-half-alt fa-lg"></span>
                                                @endfor
                                                @for ($i = 0; $i < $estrellas_vacias_resena; $i++)
                                                    <span class="fa-regular fa-star fa-lg"></span>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
