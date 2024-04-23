@extends('plantillaGeneral')

@section('contenido')

<div class="container-fluid p-5 bg-secondary fondo">
    <h1 class="title"><b>Reseñas destacadas</b></h1>
    <p class="montserrat-regular fs-4">Descubre las últimas y más populares reseñas negativas de nuestra comunidad.</p>
    <button class="boton"><a href="/review" class="links">Añadir reseña</a></button>
</div>

<div class="container-fluid">
<<<<<<< Updated upstream
<div class="container pt-5">
    <h3><b>Peores establecimientos de la semana</b></h3>
<br>
    <div class="container">
        <div class="row">
                @foreach($establecimientos->where('id_tipo_establecimiento', 2) as $establecimiento)
                    <div class="col">
                    <div class="card mb-3">
                        <a href="/vistaReview" class="links-view">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $establecimiento->url_imagen }}" style="min-height: 250px" width="100%" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>{{ $establecimiento->name }}</b></h5>
                                        <p class="card-text">{{ $establecimiento->direccion }}</p>
                                        <div>
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $establecimiento->calificacion)
                                                    <span class="fa fa-star checked"></span>
                                                @else
                                                    <span class="fa fa-star" aria-hidden="true"></span>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                    @endforeach
=======
    <div class="container pt-5">
        <h3><b>Peores establecimientos de la semana</b></h3>
        <br>
            <div class="container">
                <div class="row">
                    @foreach($establecimientos as $establecimiento)
                    <div class="col">
                        <div class="card mb-3">
                            <form action="/vistaReview" method="POST">
                                @csrf
                                <input type="hidden" name="establecimiento_id" value="{{ $establecimiento->id }}">
                                <a href="#" onclick="this.parentNode.submit()" class="links-view">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{ $establecimiento->url_imagen }}" style="min-height: 250px" width="100%" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title"><b>{{ $establecimiento->name }}</b></h5>
                                                <p class="card-text">{{ $establecimiento->direccion }}</p>
                                                <div>
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $establecimiento->calificacion)
                                                            <span class="fa fa-star checked"></span>
                                                        @else
                                                            <span class="fa fa-star" aria-hidden="true"></span>
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </form>
                        </div>
                    </div>
                @endforeach                
>>>>>>> Stashed changes
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
