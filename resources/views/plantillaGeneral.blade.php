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
        <meta name="description" content="This sample shows how to include business listings in the autosuggestion module." />
        <meta name="keywords" content="Microsoft maps, map, gis, API, SDK, Bing, Bing Maps" />
        <meta name="author" content="Microsoft Bing Maps" />
        <meta name="screenshot" content="screenshot.jpg" />
    
    <script>
    var map;

    function GetMap() {
        map = new Microsoft.Maps.Map('#myMap', {});

        Microsoft.Maps.loadModule('Microsoft.Maps.AutoSuggest', function () {
            var manager = new Microsoft.Maps.AutosuggestManager({
                map: map,
                businessSuggestions: true //Enable business suggestions
            });
            manager.attachAutosuggest('#searchBox', '#searchBoxContainer', suggestionSelected);
        });
    }

    function suggestionSelected(result) {
        //Remove previously selected suggestions from the map.
        map.entities.clear();

        //Show the suggestion as a pushpin and center map over it.
        var pin = new Microsoft.Maps.Pushpin(result.location);
        map.entities.push(pin);

        map.setView({ bounds: result.bestView });
    }
    </script>
        <title>Don't buy here</title>
    </head>
    <body>
    <header id="header">
        <nav class="navbar1 container-fluid bg-transparent px-5 pt-4">
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
            // Dynamic load the Bing Maps Key and Script
            // Get your own Bing Maps key at https://www.microsoft.com/maps
            (async () => {
                let script = document.createElement("script");
                let bingKey = "Aks0rcFXlkmB6ZN8_W3imZn5IShEX7-ANGYIQyqffrdBsjz9-wH4Hh5EmUCDHakL";
                script.setAttribute("src", `https://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=${bingKey}&branch=experimental`);
                document.body.appendChild(script);
            })();
        </script>
    </body>
    <script src="js/bsbase.js"></script>
</html>