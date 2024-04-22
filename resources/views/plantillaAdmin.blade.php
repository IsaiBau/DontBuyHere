<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
      <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/stylePlantillas.css">
      <link rel="stylesheet" href="/css/fontello.css">
      <title>Don't buy here</title>
   </head>
   <body>
      <header class="header">
         <div class="header__container container">
            <div class="header__toggle" id="header-toggle">
               <h1 id="titulo"><a href="/" class="sidebar__link">Don't Buy Here</a></h1>
               <i class="ri-menu-line"></i>
            </div>
            <div>
               <form action="#">
                  <div class="form-input">
                     <input type="search" placeholder="Search..." id="search">
                     <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                  </div>
               </form>
            </div>
            <a href="#" class="profile">
               <img src="/img/LogoDn.png">
            </a>
         </div>
      </header>
      <div class="sidebar" id="sidebar">
         <nav class="sidebar__container">
            <div class="sidebar__list">
               <a href="/dashboard" class="sidebar__link {{ Request::is('dashboard') ? 'active-link' : '' }}">
                  <i class="icon-panel"></i>
                  <span class="sidebar__link-name">Panel de Control</span>
                  <span class="sidebar__link-floating">Panel</span>
               </a>
               <a href="/establecimiento" class="sidebar__link {{ Request::is('establecimiento') ? 'active-link' : '' }}">
                  <i class="icon-shop"></i>
                  <span class="sidebar__link-name">Establecimientos</span>
                  <span class="sidebar__link-floating">Establecimientos</span>
               </a>
               
               <a href="/reviews" class="sidebar__link {{ Request::is('reviews') ? 'active-link' : '' }}">
                  <i class="icon-reviws"></i>
                  <span class="sidebar__link-name">Reseñas</span>
                  <span class="sidebar__link-floating">Reseñas</span>
               </a>
               
               <a href="/users" class="sidebar__link {{ Request::is('users') ? 'active-link' : '' }}">
                  <i class="icon-users"></i>
                  <span class="sidebar__link-name">Usuarios</span>
                  <span class="sidebar__link-floating">Usuarios</span>
               </a>
            </div>

               <div class="sidebar__content">
                  <div class="sidebar__list">
                     <a href="/logout" class="sidebar__link">
                        <i class="ri-logout-box-r-line"></i>
                        <span class="sidebar__link-name">Cerrar sesión</span>
                        <span class="sidebar__link-floating">Cerrar sesión</span>
                     </a>
                  </div>
               </div>
               
         </nav>
      </div>
      <section id="content">
         <main class="main container" id="main">
            @yield('contenido')
         </main>
      </section>
      <script src="/js/script.js"></script>
      <script src="/js/main.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>