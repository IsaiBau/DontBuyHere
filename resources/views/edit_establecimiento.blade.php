@extends('plantillaGeneral')
@section('contenido')
    
<div class="container pt-5">
    <div class="card mb-3 p-2" style="max-width: 77.313rem; max-height: 35rem; overflow: auto;">
        <div class="card-body">
            <div>
                <h1 class="fs-2 text-black montserrat-semibold">Editar Establecimiento</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex justify-content-center align-items-center mt-4" style="width: 60rem">
                    <form action="{{ route('updateEs', ['establecimiento' => $establecimiento->id]) }}" method="POST" enctype="multipart/form-data" class="row" style="width: 100%">
                        @csrf
                        @method('PUT')
                        <div class="col">
                            <label for="name" class="text-black montserrat-medium label-font">Nombre del local</label>
                            <input type="text" name="name" class="form-control mb-3" value="{{ $establecimiento->name }}">
                                                      
                            <label for="localType" class="text-black montserrat-medium label-font">Tipo de local</label>
                                <select name="localType" class="form-select mb-3 border-dark border-1 form">
                                    <option value="{{$establecimiento->tipoEstablecimiento->id}}" selected>{{$establecimiento->tipoEstablecimiento->name}}</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="direccion" class="text-black montserrat-medium label-font">Dirección</label>
                                <input type="text" name="direccion" class="form-control mb-3" value="{{ $establecimiento->direccion }}">
                                
                                <label for="url_imagen" class="text-black montserrat-medium label-font">Foto</label><br>
                                <input type="file" name="url_imagen" class="form-control mb-3">
                                
                                @if($establecimiento->url_imagen)
                                    <img src="{{ asset($establecimiento->url_imagen) }}" alt="Foto del establecimiento" height="100px" class="mb-3">
                                @endif<br>

                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
@endsection