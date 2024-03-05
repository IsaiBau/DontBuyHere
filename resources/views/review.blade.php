@extends('plantillaGeneral')
<title>Reseña</title>
@section('contenido')
<body>
{{-- Primer formulario --}}
    <div class="container pt-5">
        <div class="card mb-3 p-2" style="max-width: 77.313rem; max-height: 35rem; overflow: auto;">
            <div class="card-body">
                <div>
                    <h1 class="fs-2 text-black montserrat-semibold">Escribe una reseña de un Local Verificado</h1>
                    <h2 class="label-font text-body-secondary montserrat-regular" >Recuerda ser sincero y decir la verdad, no solo hagas quedar mal al establecimiento. ¡Gracias!</h2>                
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex justify-content-center align-items-center mt-4" style="width: 60rem">
                        <form action="#" class="row" style="width: 100%">
                            <div class="col">
                                <label for="localName" class="text-black montserrat-medium label-font">Nombre del establecimiento</label>
                                <select name="localName" class="form-select mb-3 border-dark border-1 form" style="max-width: 27rem;">
                                    <option selected>Elija el local...</option>
                                    <option value="1">Little Caesars</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="localType" class="text-black montserrat-medium label-font">Tipo de local</label>
                                <select name="localType" class="form-select mb-3 border-dark border-1 form">
                                    <option selected>Tienda, Restaurante, Fonda...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label for="review" class="text-black montserrat-medium label-font">Reseña</label>
                                <textarea name="review" class="form-control border-dark border-1 mb-3" style="max-width: 27rem; height: 9rem;" placeholder="Escriba aqui su experiencia..." id="floatingTextarea"></textarea>
                            </div>
                            <div class="col">
                                <label for="addres" class="text-black montserrat-medium label-font">Dirección</label><br>
                                    <input type="text" name="addres" placeholder="Calle, Código Postal, Villahermosa, Tab." class="border-dark border-1 form-control mb-3 form">
                                <label for="calificacion" class="text-black montserrat-medium label-font">Calificacion</label>
                                    <div><img id="calificacion" src="/img/Calificacion.png" alt="calificacion"></div>
                                <label for="buttonPicture" class="text-black montserrat-medium label-font">Foto</label><br>
                                <div class="d-flex position-relative" style="width: 95%">
                                    <img src="/img/FotoIcon.png" alt="Foto">
                                    <input class="inputFile" type="file" name="FOTO" placeholder="foto" size="50" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <div class="position-absolute bottom-0 end-0">
                                        <button type="submit" class="mt-4 form-control bg-black text-white ml-2" style="width: 5rem">Enviar</button>                                                                                 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>        
    </div>
    
    <div class="d-flex justify-content-center align-items-center">
    <h1>O</h1>        
    </div>

{{-- Segundo formulario --}}
    <div class="container pt-2 mb-5">
        <div class="card mb-3 p-2" style="max-width: 77.313rem; max-height: 35rem; overflow: auto;">
            <div class="card-body">
                <div>
                    <h1 class="fs-2 text-black montserrat-semibold">Escribe una reseña y Añada el Local</h1>
                    <h2 class="label-font text-body-secondary montserrat-regular" >Recuerda ser sincero y decir la verdad, no solo hagas quedar mal al establecimiento. ¡Gracias!</h2>                
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex justify-content-center align-items-center mt-4" style="width: 60rem">
                        <form action="#" class="row" style="width: 100%">
                            <div class="col">
                                <label for="localNameAdd" class="text-black montserrat-medium label-font">Nombre del establecimiento</label>
                                    <input type="text" name="localNameAdd" placeholder="Escriba aquí el nombre del local..." class="border-dark border-1 form-control mb-3 form">
                                <label for="localTypeAdd" class="text-black montserrat-medium label-font">Tipo de local</label>
                                    <select name="localTypeAdd" class="form-select mb-3 border-dark border-1 form">
                                        <option selected>Tienda, Restaurante, Fonda...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                <label for="reviewAdd" class="text-black montserrat-medium label-font">Reseña</label>
                                <textarea name="reviewAdd" class="form-control border-dark border-1 mb-3" style="max-width: 27rem; height: 9rem;" placeholder="Escriba aqui su experiencia..." id="floatingTextarea"></textarea>
                            </div>
                            <div class="col">
                                <label for="addres" class="text-black montserrat-medium label-font">Dirección</label><br>
                                <input type="text" name="addres" placeholder="Calle, Código Postal, Villahermosa, Tab." class="border-dark border-1 form-control mb-3 form">
                                <label for="calificacion" class="text-black montserrat-medium label-font">Calificacion</label>
                                <div><img id="calificacion" src="/img/Calificacion.png" alt="calificacion"></div>
                                <label for="buttonPicture" class="text-black montserrat-medium label-font">Foto</label><br>
                                <div class="d-flex position-relative" style="width: 95%">
                                    <img src="/img/FotoIcon.png" alt="Foto">
                                    <input class="inputFile" type="file" name="FOTO" placeholder="foto" size="50" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <div class="position-absolute bottom-0 end-0">
                                        <button type="submit" class="mt-4 form-control bg-black text-white ml-2" style="width: 5rem">Enviar</button>                                                                                 
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