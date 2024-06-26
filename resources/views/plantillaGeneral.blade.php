<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
        <link rel="stylesheet" href="{{ asset('css/plantillaGeneral.css') }}">
        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0W9hmHYlltYS1SoKhoTgpm-nGHWs_jS0&libraries=places"></script>
        <script>
            function initAutocomplete() {
                var input = document.getElementById('autocomplete');
                var options = {
                    types: ['establishment'],
                    componentRestrictions: {country: 'MX'},
                    bounds: new google.maps.LatLngBounds(
                        new google.maps.LatLng(17.986394, -92.930279), 
                        new google.maps.LatLng(18.045222, -92.863198)  
                    )
                };

                var autocomplete = new google.maps.places.Autocomplete(input, options);

                
                autocomplete.addListener('place_changed', function() {
                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        console.log("El lugar seleccionado no tiene geometría");
                        return;
                    }

                    
                    document.getElementById('autocomplete').value = place.name;

                    
                    document.getElementById('direccion').value = place.formatted_address;

                    
                    updatePlaceType(place);
                
                
                showPlaceOnMap(place.geometry.location);
                });
            }

            function updatePlaceType(place) {
            var select = document.getElementById('tipo_local');
            select.innerHTML = ''; 

            var types = place.types;
            if (types && types.length > 0) {
                types.forEach(function(type) {
                    var option = document.createElement('option');
                    option.text = type.charAt(0).toUpperCase() + type.slice(1).replace(/_/g, ' '); // Capitalizar y reemplazar guiones bajos con espacios
                    select.add(option);
                });
            } else {
                var option = document.createElement('option');
                option.text = "No disponible";
                select.add(option);
            }
        }
            
        </script>

        <style>
            #autocomplete {
                width: 300px;
                padding: 10px;
                font-size: 16px;
            }
        </style>

        <style>
            #autocomplete {
                width: 300px;
                padding: 10px;
                font-size: 16px;
                margin-bottom: 10px;
            }
            #map {
                height: 300px; 
                width: 100%; 
            }
        </style>

    
        <title>Don't buy here</title>
    </head>
    <body>
    <header id="header">
        <nav class="navbar1 container-fluid bg-transparent px-5 p-4">
            <div id="branding">
                <form action="" id="content_search">
                    <button type="submit" id="btnSearch" name="btnSearch"><span class="icon-search"></span></button>
                    <input type="text" name="search" id="search" autocomplete="off" placeholder="Buscar...">
                </form>
            </div>
            <div class="nav-links">
                <ul class="m-0">
                    <li class="liNavBar"><a href="/">Inicio</a></li>
                    <li class="liNavBar"><a href="/restaurant">Restaurantes</a></li>
                    <li class="liNavBar"><a href="/shop">Tiendas</a></li>
                    <?php
                        if (Auth::check()) {
                            echo '<li><a href="/profile" class="iconUser"><i class="icon-user"></i></a><a href="/profile" class="textUser">Perfil</a></li>';
                        } else {
                            echo '<li><a href="/login" class="btnLogin"><button class="btnLogin">Login</button></a><a href="/login" class="textLogin">Login</a></li>';
                        }
                    ?>
                </ul>
            </div>
            
            <div class="menu-trigger">
                <div class="menu-icon">
                    <div class="barTop"></div>
                    <div class="barMiddle"></div>
                    <div class="barBottom"></div>
                </div>
            </div>
        </nav>
    </header>
        <main id="main">
            @yield('contenido')
        </main> 
        <footer>
            <section class="socials">
                <ul>
                    <li><a href="#"  class="links"><i class="icon-facebook"></i>Facebook</a></li>
                    <li><a href="#"  class="links"><i class="icon-twitter"></i>Twitter</a></li>
                    <li><a href="#"  class="links"><i class="icon-instagram"></i>Instragram</a></li>
                </ul>
            </section><br>
            <p class="legal">©2024 NoCompresAqui. Todos los derechos reservados</p>
        </footer>
        <script src="js/bsbase.js"></script>
        <script src="js/redirect.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/f87e73225e.js" crossorigin="anonymous"></script>

        <script>
            window.onload = function() {
                initAutocomplete();
                initMap();
            };
        </script>
    </body>
    <script src="js/bsbase.js"></script>
</html>