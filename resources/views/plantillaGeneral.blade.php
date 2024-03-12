<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
        <link rel="stylesheet" href="css/plantillaGeneral.css">
        <link rel="stylesheet" href="/css/fontello.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Don't buy here</title>
    </head>
    <body>
      <header id="header">
        <nav class="navbar1">
            <div id="branding">
                <form action="" id="content_search">
                    <button type="submit" id="btnSearch" name="btnSearch"><span class="icon-search"></span></button>
                    <input type="text" name="search" id="search" autocomplete="off" placeholder="Buscar...">
                </form>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/restaurant">Restaurantes</a></li>
                    <li><a href="/shop">Tiendas</a></li>
                    <!-- <li><a href="#" class="iconUser"><i class="icon-user"></i></a><a href="#" class="textUser">Perfil</a></li>
                    <li><a href="#" class="btnLogin"><button class="btnLogin">Login</button></a><a href="#" class="textLogin">Login</a></li> -->
                    <?php
                        $usuario_iniciado = false; 
                        if ($usuario_iniciado) {
                            echo '<li><a href="login" class="iconUser"><i class="icon-user"></i></a><a href="#" class="textUser">Perfil</a></li>';
                        } else {
                            echo '<li><a href="login" class="btnLogin"><button class="btnLogin">Login</button></a><a href="#" class="textLogin">Login</a></li>';
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
        {{-- <script src="js/bsbase.js"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/f87e73225e.js" crossorigin="anonymous"></script>
    </body>
    <script src="js/bsbase.js"></script>
</html>