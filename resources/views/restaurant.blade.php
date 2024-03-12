@extends('plantillaGeneral')

@section('contenido')

<div class="container-fluid p-5 bg-secondary fondo">
    <h1 class="title"><b>Reseñas destacadas</b></h1>
    <p class="montserrat-regular fs-4">Descubre las últimas y más populares reseñas negativas de nuestra comunidad.</p>
    <button class="boton"><a href="/review" class="links">Añadir reseña</a></button>
</div>

<div class="container-fluid">
<div class="container pt-5">
    <h3><b>Peores establecimientos de la semana</b></h3>
<br>
    <div class="container">
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
@endsection
