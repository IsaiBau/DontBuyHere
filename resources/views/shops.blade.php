@extends('plantillaGeneral')

@section('contenido')

<div class="container-fluid p-5 bg-secondary fondo">
    <h1 class="title"><b>Reseñas destacadas</b></h1>
    <p class="montserrat-regular fs-4">Descubre las últimas y más populares reseñas negativas de nuestra comunidad.</p>
    <button class="boton"><a href="/review" class="links">Añadir reseña</a></button>
</div>

<div class="container-fluid">
<div class="container pt-5">
    <h3><b>Peores tiendas de la semana</b></h3>
<br>


    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card mb-3">
              <a href="/vistaReview" class="links-view">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/abarrotes_doña_julia.jpg" width="100%" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Abarrotes Doña Julia</b></h5>
                      <p class="card-text">Abarrote del Mercado de la Sierra. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/liverpool.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Liverpool</b></h5>
                      <p class="card-text">Es parte de tu vida. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/palacio.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Palacio de hierro</b></h5>
                      <p class="card-text">Tienda departamental Villahermosa. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/abarrotes_doña_julia.jpg" width="100%" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Abarrotes Doña Julia</b></h5>
                      <p class="card-text">Abarrote del Mercado de la Sierra. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/liverpool.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Liverpool</b></h5>
                      <p class="card-text">Es parte de tu vida. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/palacio.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Palacio de hierro</b></h5>
                      <p class="card-text">Tienda departamental Villahermosa. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/abarrotes_doña_julia.jpg" width="100%" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Abarrotes Doña Julia</b></h5>
                      <p class="card-text">Abarrote del Mercado de la Sierra. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/liverpool.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Liverpool</b></h5>
                      <p class="card-text">Es parte de tu vida. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
                    <img src="img/palacio.jpg" style="min-height: 250px" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><b>Palacio de hierro</b></h5>
                      <p class="card-text">Tienda departamental Villahermosa. Horario de 8:00 a 19:00, Lunes a Viernes.</p>
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
