@include('elements.header')
<div class="">
  <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-1"></div>
          <h2>
            <a href="{{route('alquilar.blog')}}">Tres Departamentos Miradores Cabo De Gata</a>
          </h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> Paseo Marítimo, 72 Cabo De Gata
            </p>
            <p>
              Te brindamos total comodidad. Date prisa ahora para alquilar tu apartamento.
            </p>
            <cite><a href="{{route('alquilar.blog')}}" style="color:azure;text-decoration: none;">Ver Detalles</a></cite>
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-2"></div>
          <h2>
            <a href="{{route('alquilar.blog')}}">Tres Departamentos Miradores Cabo De Gata</a>
          </h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> Paseo Marítimo, 72 Cabo De Gata
            </p>
            <p>
              Te brindamos total comodidad. Date prisa ahora para alquilar tu apartamento.
            </p>
            <cite><a href="{{route('alquilar.blog')}}" style="color:azure;text-decoration: none;">Ver Detalles</a></cite>
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-3"></div>
          <h2>
            <a href="{{route('alquilar.blog')}}">Tres Departamentos Miradores Cabo De Gata</a>
          </h2>
          <blockquote>
            <p class="location">
              <span class="glyphicon glyphicon-map-marker"></span> Paseo Marítimo, 72 Cabo De Gata
            </p>
            <p>
              Te brindamos total comodidad. Date prisa ahora para alquilar tu apartamento.
            </p>
            <cite><a href="{{route('alquilar.blog')}}" style="color:azure;text-decoration: none;">Ver Detalles</a></cite>
          </blockquote>
        </div>
      </div>
      <!-- /sl-slider -->
      <nav id="nav-dots" class="nav-dots">
        <span class="nav-dot-current"></span>
        <span></span>
        <span></span>
      </nav>
    </div>
    <!-- /slider-wrapper -->
  </div>
  <div class="container">
    <div class="properties-listing spacer">
      <a href="{{route('alquilar.blog')}}" class="pull-right viewall">Ver todo el listado</a>
      <h2>Propiedades Destacadas</h2>
      <div id="owl-example" class="owl-carousel">
          <div class="properties">
            <div class="image-holder">
              <img src="images/properties/photo1.jpg" class="img-responsive" alt="properties" />
              <!-- <div class="status sold">Sold</div> -->
            </div>
            <h4><a href="{{route('alquilar.blog')}}">Departamento A</a></h4>
            <!-- <p class="price">Precio : 40€ / Día</p> -->

            <a class="btn btn-primary" href="{{route('alquilar.blog')}}">Ver detalles</a>
          </div>
          <div class="properties">
            <div class="image-holder">
              <img src="images/properties/photo2.jpg" class="img-responsive" alt="properties" />
              <!-- <div class="status new">New</div> -->
            </div>
            <h4><a href="{{route('alquilar.blog')}}">Departamento B</a></h4>
            <!-- <p class="price">Precio : 40€ / Día</p> -->

            <a class="btn btn-primary" href="{{route('alquilar.blog')}}">Ver detalles</a>
          </div>
          <div class="properties">
            <div class="image-holder">
              <img src="images/properties/photo3.jpg" class="img-responsive" alt="properties" />
            </div>
            <h4><a href="{{route('alquilar.blog')}}">Departamento C</a></h4>
            <!-- <p class="price">Precio : 40€ / Día</p> -->
            <a class="btn btn-primary" href="{{route('alquilar.blog')}}">Ver detalles</a>
          </div>
      </div>
    </div>
    <div class="spacer">
      <div class="row">
        <div class="col-lg-6 col-sm-9 recent-view">
          <h3>Sobre Nosotros</h3>
          <p style="text-align: justify;">¡Negocio de alquileres vacacionales en Cabo de Gata, España! Me especializo en ofrecer casas acogedoras y totalmente equipadas cerca de la playa, ideales para disfrutar del sol y la brisa marina. Mi misión es proporcionar a mis clientes una experiencia inolvidable, combinando la comodidad del hogar con la belleza natural de esta impresionante región.
            <br />
            <a href="{{route('alquilar.sobrenosotros')}}">Leer más</a>
          </p>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
          <h3>Propiedades recomendadas</h3>
          <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1" class=""></li>
              <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="images/properties/photo1.jpg" class="img-responsive" alt="properties" />
                  </div>
                  <div class="col-lg-8">
                    <h5>
                      <a href="{{route('alquilar.blog')}}">Tres Departamentos Miradores Cabo De Gata</a>
                    </h5>
                    <!-- <p class="price">40€ / Día</p> -->
                    <a href="{{route('alquilar.blog')}}" class="more">Más detalles</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="images/properties/photo2.jpg" class="img-responsive" alt="properties" />
                  </div>
                  <div class="col-lg-8">
                    <h5>
                      <a href="{{route('alquilar.blog')}}">Tres Departamentos Miradores Cabo De Gata</a>
                    </h5>
                    <!-- <p class="price">40€ / Día</p> -->
                    <a href="{{route('alquilar.blog')}}" class="more">Más detalles</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-lg-4">
                    <img src="images/properties/photo3.jpg" class="img-responsive" alt="properties" />
                  </div>
                  <div class="col-lg-8">
                    <h5>
                      <a href="{{route('alquilar.blog')}}">Tres Departamentos Miradores Cabo De Gata</a>
                    </h5>
                    <!-- <p class="price">40€ / Día</p> -->
                    <a href="{{route('alquilar.blog')}}" class="more">Más detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('elements.footer')