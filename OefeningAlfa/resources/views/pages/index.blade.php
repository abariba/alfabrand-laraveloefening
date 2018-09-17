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


<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-4 p-4" style="width: 18rem;">
            <img class="card-img-top" src="img/redshoes.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

        <div class="col-lg-3 p-4" style="width: 18rem;">
            <img class="card-img-top" src="img/accesories.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

        <div class="col-lg-5 p-4" style="width: 18rem;">
          <img class="card-img-top" src="img/sale_woman.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
  </div>



  <div class="container-fluid">


        <div class="banner">
          <a href="#">
            <p class="centered">SNEAKERS</p>
          <img class="card-img-top" src="img/putshoeonheadlol.jpeg" alt="Card image cap">
            <div class="card-body">
            </div>
        </div>

        <div class="row">

          <div class="col-lg-3 p-1">
            <a href="#">
              <img class="card-img" src="img/adidas.jpeg" alt="Card image cap">
                <div class="card-body">
                </div>
              </div>

          <div class="col-lg-3 p-1">
            <a href="#">
              <img class="card-img" src="img/nike.jpeg" alt="Card image cap">
                <div class="card-body">
                </div>
              </div>

          <div class="col-lg-3 p-1">
            <a href="#">
            <img class="card-img" src="img/champion.jpeg" alt="Card image cap">
              <div class="card-body">
              </div>
          </div>

          <div class="col-lg-3 p-1">
            <a href="#">
            <img class="card-img" src="img/umbro.jpeg" alt="Card image cap">
              <div class="card-body">
              </div>
          </div>
      </div>
    </div>
@endsection
