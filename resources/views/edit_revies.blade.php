@extends('plantillaGeneral')
@section('contenido')
    <div class="container pt-5">
        <div class="card mb-3 p-2" style="max-width: 77.313rem; max-height: 35rem; overflow: auto;">
            <div class="card-body">
                <div>
                    <h1 class="fs-2 text-black montserrat-semibold">Editar Reseña</h1>               
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex justify-content-center align-items-center mt-4" style="width: 60rem">
                        <form action="{{ route('updateRe', ['resena' => $resena->id]) }}" method="POST" class="row" style="width: 100%">
                            @csrf
                            @method('PUT')
                            <div class="col">
                                <label for="resena" class="text-black montserrat-medium label-font">Reseña</label>
                                <textarea name="resena" class="form-control border-dark border-1 mb-3" style="max-width: 27rem; height: 9rem;" placeholder="Escriba aqui su experiencia..." id="floatingTextarea">{{ $resena->resena }}</textarea>                       
                                <label for="estado" class="text-black montserrat-medium label-font">Estado</label>
                                <select name="estado" class="form-select mb-3 border-dark border-1 form">
                                    <option value="Sin leer" selected>Sin leer</option>
                                    <option value="Completado">Completado</option>
                                    <option value="En proceso">En proceso</option>
                                </select>
                                <label for="calificacion" class="text-black montserrat-medium label-font">Calificacion: {{ $resena->calificacion }}</label><br>
                                    <div class="rating">
                                        @for ($i = 5; $i >= 1; $i--)
                                            @php
                                                $starValue = floor($resena->calificacion);
                                            @endphp
                                            <input type="radio" id="star{{ $i }}" name="calificacion" value="{{ $i }}" {{ $starValue == $i ? 'checked' : '' }}>
                                            <label for="star{{ $i }}"></label>
                                        @endfor
                                    </div>

                            </div>
                            <div class="col">
                                <label for="fecha" class="text-black montserrat-medium label-font">Fecha</label>
                                <input type="text" name="fecha" class="form-control mb-3" value="{{ $resena->fecha }}">
                             
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection