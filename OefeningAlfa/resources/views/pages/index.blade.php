@extends('layouts.master')

@section('content')


<!-- Slider -->
<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="/heren"><img class="d-block w-100" src="img/slider-man-blue.jpeg" alt="First slide"></a>
    </div>
    <div class="carousel-item">
      <a href="/dames"><img class="d-block w-100" src="img/slider-woman-yellow.jpeg" alt="Second slide"></a>
    </div>
    <div class="carousel-item">
      <a href="/kinderen"><img class="d-block w-100" src="img/slider-kid-neutral.jpeg" alt="Third slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




  <div class="container-fluid">
<div class="tester">
    <div class="col-lg-4 p-1">
      <a href="#">
        <img src="img/greyshoes.jpeg" alt="Card image cap">
        </div>
        <div class="col-lg-1 p-1">
          <a href="#">
            <img src="img/whiteshoes.jpeg" alt="Card image cap">
            </div>
          </div>

</div>

        <div class="banner">
          <a href="#">
            <p class="centered">SNEAKERS</p>
          <img class="card-img-top" src="img/putshoeonheadlol.jpeg" alt="Card image cap">
        </div>

        <div class="row">

          <div class="col-lg-3 p-1">
            <a href="#">
              <img class="card-img" src="img/adidas.jpeg" alt="Card image cap">
              </div>

          <div class="col-lg-3 p-1">
            <a href="#">
              <img class="card-img" src="img/nike.jpeg" alt="Card image cap">
              </div>

          <div class="col-lg-3 p-1">
            <a href="#">
            <img class="card-img" src="img/champion.jpeg" alt="Card image cap">
          </div>

          <div class="col-lg-3 p-1">
            <a href="#">
            <img class="card-img" src="img/umbro.jpeg" alt="Card image cap">
          </div>
      </div>
    </div>
@endsection
