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
                        <form action="{{ route('updateEs', ['establecimiento' => $establecimiento->id]) }}" method="POST" class="row" style="width: 100%">
                            @csrf
                            @method('PUT')
                            <div class="col">
                                <label for="localType" class="text-black montserrat-medium label-font">Nombre del local</label>
                                <input type="text" name="name" class="form-control mb-3" value="{{ $establecimiento->name }}">                        
                                <label for="localType" class="text-black montserrat-medium label-font">Tipo de local</label>
                                <select name="localType" class="form-select mb-3 border-dark border-1 form">
                                    <option value="{{$establecimiento->tipoEstablecimiento->id}}" selected>{{$establecimiento->tipoEstablecimiento->name}}</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="addres" class="text-black montserrat-medium label-font">Dirección</label><br>
                                    <input type="text" name="addres" placeholder="Calle, Código Postal, Villahermosa, Tab." class="border-dark border-1 form-control mb-3 form" value="{{$establecimiento->direccion}}">
                                <label for="buttonPicture" class="text-black montserrat-medium label-font">Foto</label><br>
                                <div class="d-flex position-relative" style="width: 95%">
                                    <img src="{{ asset($establecimiento->url_imagen) }}" alt="Foto" height="200px" >
                                    <input class="inputFile" type="file" name="FOTO" placeholder="foto" size="50" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <div class="position-absolute bottom-0 end-0">
                                        <button type="submit" class="mt-4 form-control bg-black text-white ml-2" style="width: 10rem">Actualizar</button>                                                                                 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>        
    </div>
@endsection