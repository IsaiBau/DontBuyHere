<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
      <link rel="stylesheet" href="/css/stylePlantillas.css">
      <link rel="stylesheet" href="/css/fontello.css">
      <link rel="stylesheet" href="">
      <title>Don't buy here</title>
   </head>
   <body>
      <header class="header">
         <div class="header__container container">
            <div class="header__toggle" id="header-toggle">
               <h1 id="titulo">Don't buy here</h1>
               <i class="ri-menu-line"></i>
            </div>
            <div>
               <form action="" id="content_search">
                  <input type="text" name="search" id="search" autocomplete="off" placeholder="Buscar...">
                  <button type="submit" id="btnSearch" name="btnSearch"><span class="icon-search"></span></button>
               </form>
            </div>
         </div>
      </header>
      <div class="sidebar" id="sidebar">
         <nav class="sidebar__container">
            <div class="sidebar__list">
               <a href="#" class="sidebar__link active-link">
                  <i class="icon-panel"></i>
                  <span class="sidebar__link-name">Panel de Control</span>
                  <span class="sidebar__link-floating">Panel</span>
               </a>
               
               <a href="#" class="sidebar__link">
                  <i class="icon-shop"></i>
                  <span class="sidebar__link-name">Establecimientos</span>
                  <span class="sidebar__link-floating">Establecimientos</span>
               </a>
               
               <a href="#" class="sidebar__link">
                  <i class="icon-reviws"></i>
                  <span class="sidebar__link-name">Reseñas</span>
                  <span class="sidebar__link-floating">Reseñas</span>
               </a>
               
               <a href="#" class="sidebar__link">
                  <i class="icon-users"></i>
                  <span class="sidebar__link-name">Usuarios</span>
                  <span class="sidebar__link-floating">Usuarios</span>
               </a>
            </div>

               <div class="sidebar__content">
                  <div class="sidebar__list">
                     <a href="#" class="sidebar__link">
                        <i class="ri-logout-box-r-line"></i>
                        <span class="sidebar__link-name">Logout</span>
                        <span class="sidebar__link-floating">Logout</span>
                     </a>
                  </div>
               </div>
         </nav>
      </div>

      <main class="main container" id="main">
         @yield('contenido')
      </main>
      <script src="/js/main.js"></script>
   </body>
</html>