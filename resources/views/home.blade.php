@extends('plantillaGeneral')
@section('contenido')

<div class="container-fluid p-5 bg-secondary fondo">
    <h1 class="title"><b>Reseñas destacadas</b></h1>
    <p class="montserrat-regular fs-4">Descubre las últimas y más populares reseñas negativas de nuestra comunidad.</p>
    <button id="reviewButton" class="boton">Añadir reseña</button>
</div>
<script>
  var isAuthenticated = {{ auth()->check() ? 'true' : 'false' }};
</script>
<div class="container-fluid">
<div class="container-fluid p-5">
    <h3><b>Peores establecimientos de la semana</b></h3>
<br>
    <div class="container-fluid p-0">
        <div class="row">
          <div class="col">
            <div class="card mb-3">
              <a href="/vistaReview" class="links-view">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/taqueria.jpg" style="min-height: 250px" width="100%"  class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body" >
                      <h5 class="card-title"><b>Tacos "Los 3 Angelitos"</b></h5>
                      <p class="card-text">Fonda del Mercado de la Sierra. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
                      <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
              <a href="/vistaReview" class="links-view">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/restaurante.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Restaurante Caro</b></h5>
                      <p class="card-text">Restaurante Caro. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
                      <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
          </div>
          <div class="col">
            <div class="card mb-3">
              <a href="/vistaReview" class="links-view">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/pizzeria.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Little Caesar’s</b></h5>
                      <p class="card-text">Pizzería famosa de la ciudad. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
                      <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
          </div>
        </div>
      </div>

  </div>
  <br>
</div>

<div class="container-fluid p-5 bg-secondary fondo">

  <h3 class="d-inline"><b>Opiniones populares</b></h3>
  <i class="fa-solid fa-fire-flame-curved d-inline fa-2xl"></i><br>
<br>

  <div class="container-fluid bg-transparent p-0">
    <div class="row" style="min-height: 300px;">
      <div class="col">
        <div class="card mb-3">
          <a href="/vistaReview" class="links-view">
            <div class="col-md-8" style="min-height: 300px"> 
              <div class="col-md-8">
                <div class="card-body" >
                  <h5 class="card-title"><b>Little Caesar's</b></h5> <br>
                  <div class="d-inline">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>

                    <p class="prom d-inline prom">(4.0 Promedio de calificación)</p> <br>
                </div>
                <br>
                    <i class="fa-regular fa-user fa-lg"></i> 
                    <p class="d-inline">Isaí Bautista • Hace 3 días</p>
                  <p class="card-text review">Ordené una hamburguesa y me trajeron una Pizza. Pesimo Servicio, no volveré a comer aquí no lo recomiendo. Además, la hamburguesa no estaba tan buena.</p>
                  <br>
                  <div>
                    <span class="fa fa-star fa-lg"></span>
                    <span class="fa fa-star  fa-lg"></span>
                    <span class="fa fa-star  fa-lg"></span>
                    <span class="fa-regular fa-star fa-lg"></span>
                    <span class="fa-regular fa-star fa-lg"></span>
                </div>
                </div>
              </div>
            </div>
          </a>
          </div>
      </div>
      <div class="col">
        <div class="card mb-3">
          <a href="/vistaReview" class="links-view">
            <div class="col-md-8">
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><b>Restaurante Caro</b></h5> <br>
                  <div class="d-inline">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>

                    <p class="prom d-inline prom">(5.0 Promedio de calificación)</p> <br>
                </div>
                <br>
                    <i class="fa-regular fa-user fa-lg"></i> 
                    <p class="d-inline">Jesús Ortiz Paz • Hace 4 días</p>
                  <p class="card-text review">La experiencia en ese restaurante fue decepcionante; la comida estaba insípida y el servicio era lento e ineficiente. No lo recomendaría.</p>
                  <br>
                  <div>
                    <span class="fa fa-star fa-lg"></span>
                    <span class="fa fa-star  fa-lg"></span>
                    <span class="fa fa-star  fa-lg"></span>
                    <span class="fa fa-star fa-lg"></span>
                    <span class="fa fa-star fa-lg"></span>
                </div>
                </div>
              </div>
            </div>
          </a>
          </div>
      </div>
  </div>
</div>
@endsection
