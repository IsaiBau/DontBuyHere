@extends('plantillaGeneral')
@section('contenido')
<body>
{{-- Primer formulario --}}
    <div class="container pt-5">
        <div class="card mb-3 p-2" style="max-width: 77.313rem; max-height: 45rem; overflow: auto;">
            <div class="card-body">
                <div>
                    <h1 class="fs-2 text-black montserrat-semibold">Escribe una reseña de un Local Verificado</h1>
                    <h2 class="label-font text-body-secondary montserrat-regular" >Recuerda ser sincero y decir la verdad, no solo hagas quedar mal al establecimiento. ¡Gracias!</h2>                
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex justify-content-center align-items-center mt-4" style="width: 60rem">
                        <form action="{{ route('guardar.resena') }}" method="POST" class="row" style="width: 100%">
                            @csrf
                            <div class="col">
                                <label for="localName" class="text-black montserrat-medium label-font">Nombre del establecimiento</label>
                                <div id="searchBoxContainer">
                                    <input type='text' id='autocomplete' class="border-dark border-1 form-control mb-3 form"/>
                                </div>
                                <label for="localName" class="text-black montserrat-medium label-font">Dirección</label>
                                <div id="searchBoxContainer">
                                    <input type='text' id='direccion' name="address" class="border-dark border-1 form-control mb-3 form" placeholder="Calle, Código Postal, Villahermosa, Tab."/>
                                </div>
                                <label for="localType" class="text-black montserrat-medium label-font mt-3">Tipo de local</label>
                                <select name="localTypeAdd" class="form-select mb-3 border-dark border-1 form">
                                    <option value="" selected>Selecciona un tipo de establecimiento</option>
                                    @foreach($tiposEstablecimientos as $tipoEstablecimiento)
                                        <option value="{{ $tipoEstablecimiento->id }}">{{ $tipoEstablecimiento->name }}</option>
                                    @endforeach
                                </select>
                                @error ('localTypeAdd')
                                    {{$message}}
                                @enderror
                                <br>
                                <label for="review" class="text-black montserrat-medium label-font">Reseña</label>
                                <textarea name="review" class="form-control border-dark border-1 mb-3" style="max-width: 27rem; height: 9rem;" placeholder="Escriba aqui su experiencia..." id="floatingTextarea"></textarea>
                                @error ('review')
                                    {{$message}}
                                @enderror
                            </div>
                                <div class="col">  
                                    @error ('address')
                                        {{$message}}
                                    @enderror
                                    <br>
                                    <label for="calificacion" class="text-black montserrat-medium label-font">Calificacion</label><br>
                                    <div class="rating">
                                        <input type="radio" id="star5" name="calificacion" value="5">
                                        <label for="star5"></label>
                                        <input type="radio" id="star4" name="calificacion" value="4">
                                        <label for="star4"></label>
                                        <input type="radio" id="star3" name="calificacion" value="3">
                                        <label for="star3"></label>
                                        <input type="radio" id="star2" name="calificacion" value="2">
                                        <label for="star2"></label>
                                        <input type="radio" id="star1" name="calificacion" value="1">
                                        <label for="star1"></label>
                                    </div>
                                    @error ('radio')
                                        {{$message}}
                                    @enderror
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <input type="text" name="user_id" value="{{ auth()->user()->id }}" class="form-control mb-3" hidden>
                                    @error ('user_id')
                                        {{$message}}
                                    @enderror
                                    <input type="date" name="fecha" value="{{ date('Y-m-d') }}" class="form-control mb-3" hidden>
                                    @error ('fecha')
                                        {{$message}}
                                    @enderror
                                    <div class="d-flex position-relative" style="width: 95%">
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
        <script>
            const stars = document.querySelectorAll('.rating input');
            stars.forEach(star => {
                star.addEventListener('change', function() {
                    const ratingValue = this.value;
                    document.getElementById('calificacion-value').textContent = ratingValue;
                });
            });

            function validarFormulario() {
            var localName = document.querySelector('select[name="localName"]').value;
            var localTypeAdd = document.querySelector('select[name="localTypeAdd"]').value;
            var address = document.querySelector('input[name="address"]').value;
            var review = document.querySelector('textarea[name="review"]').value;
            var calificacion = document.querySelector('input[name="calificacion"]:checked');
            var photo = document.querySelector('input[name="photo"]');

            if (localName === '' || localTypeAdd === '' || address === '' || review === '') {
                alert('Por favor completa todos los campos obligatorios.');
                return false; // Detiene el envío del formulario
            }

            if (!calificacion) {
                alert('Por favor selecciona una calificación.');
                return false;
            }

            if (!photo || !photo.files[0]) {
                alert('Por favor selecciona una foto.');
                return false;
            }

            return true; // Envía el formulario si todos los campos están llenos
        }
        </script>

    {{-- Segundo formulario --}}
    <a id="formularioAnchor"></a>
        <div class="container pt-2 mb-5">
            <div class="card mb-3 p-2" style="max-width: 77.313rem; max-height: 35rem; overflow: auto;">
                <div class="card-body">
                    <div>
                        <h1 class="fs-2 text-black montserrat-semibold">Añada un Local</h1>             
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="d-flex justify-content-center align-items-center mt-4" style="width: 60rem">
                            <form action="/guardar-establecimiento" method="POST" class="row" style="width: 100%" enctype="multipart/form-data">
                                @csrf
                                <div class="col">
                                    <label for="localNameAdd" class="text-black montserrat-medium label-font">Nombre del establecimiento</label>
                                    <input type="text" name="localNameAdd" placeholder="Escriba aquí el nombre del local..." class="border-dark border-1 form-control mb-3 form">
                                    @error ('localNameAdd')
                                        {{$message}}
                                    @enderror
                                    <label for="localTypeAdd" class="text-black montserrat-medium label-font">Tipo de Establecimiento</label>
                                    <select name="localTypeAdd" class="form-select mb-3 border-dark border-1 form">
                                        <option value="" selected>Selecciona un tipo de establecimiento</option>
                                        @foreach($tiposEstablecimientos as $tipoEstablecimiento)
                                            <option value="{{ $tipoEstablecimiento->id }}">{{ $tipoEstablecimiento->name }}</option>
                                        @endforeach
                                    </select>
                                    @error ('localTypeAdd')
                                        {{$message}}
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="addres" class="text-black montserrat-medium label-font">Dirección</label><br>
                                    <input type="text" name="address" placeholder="Calle, Código Postal, Villahermosa, Tab." class="border-dark border-1 form-control mb-3 form">
                                    @error ('addres')
                                        {{$message}}
                                    @enderror
                                    <label for="buttonPicture" class="text-black montserrat-medium label-font">Foto</label><br>
                                    <img src="/img/FotoIcon.png" alt="Foto">
                                    <input class="inputFile" type="file" name="photo" placeholder="foto" size="500" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    @error ('photo')
                                        {{$message}}
                                    @enderror
                                    <div class="d-flex position-relative" style="width: 95%">
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
