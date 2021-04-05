@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Volvo Cabs</title>
</head>
<body>
@section('content')
<br>
    <center><img src="https://www.volvo.com/content/dam/volvo/volvo-gateway/Volvo_iron_mark_RGB_140x140px.png/jcr:content/renditions/Volvo_iron_mark_RGB_140x140px-logo.png" alt=""></center>
    <br>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.volvo.com/content/dam/volvo/volvo-gateway/hero-carousel/2326x800-Cars-new-hero.jpg/jcr:content/renditions/2326x800-Cars-new-hero-imgtxt.jpg" height="400px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>VOLVO CARS</h4>
        <h4><b>DESIGNED AROUND PEOPLES</b></h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.volvo.com/content/dam/volvo/volvo-gateway/hero-carousel/2326x800-hero-trucks-new.jpg/jcr:content/renditions/2326x800-hero-trucks-new-imgtxt.jpg" height="400px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>VOLVO TRUCKS</h4>
        <h4><b>DRIVING PROGRESS</b></h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.volvo.com/content/dam/volvo/volvo-gateway/hero-carousel/VCE-hero-2326x800.jpg/jcr:content/renditions/VCE-hero-2326x800-imgtxt.jpg" height="400px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>VOLVO CUSTRUCTION EQUIPMENTS</h4>
        <h4><b>A PASSION GFOR PERFOMANCE</b></h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.volvo.com/content/dam/volvo/volvo-gateway/hero-carousel/Buses-hero-2326x800.jpg/jcr:content/renditions/Buses-hero-2326x800-imgtxt.jpg" height="400px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>VOLVO BUSES</h4>
        <h4><b>DRIVING QUALITY OF LIFE</b></h4>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.volvo.com/content/dam/volvo/volvo-gateway/hero-carousel/2326x800-Volvo-Penta-Hero.jpg/jcr:content/renditions/2326x800-Volvo-Penta-Hero-imgtxt.jpg" height="400px class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>VOLVO PENTA</h4>
        <h4><b>POWER SOLUTIONS ON LAND AND AT SEA</b></h4>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
        <div class="container">
          <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <center><a href="cars.blade.php"><button class="btn btn-outline-dark">Get to know about our Cabs</button></a></center>
            </div>
            <br>
            <br>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <center><a href="vid.blade.php"><button class="btn btn-outline-dark">Get a Volvo ID</button></a></center>
            </div>
          </div>
        </div>
        <br>
        <center><p><font color="gray">Since 1927, our philosophy has been to deliver pioneering innovations that put people first. Welcome to our world built on quality, safety and care for the environment.</font></p></center>
        <br>
        <br>
        </div>
        </div>
        <br>
        </div>
          <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <div class="container">
            <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <br><br>
                <center><h2><b>WHY VOLVO?</b></h2></center>
                <br>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.volvocars.com/images/v/in/v/-/media/project/contentplatform/data/media/img/three-callouts/homepage-whyvolvo-desktop-16x9.jpg?iar=0&w=1366" class="d-block w-100" alt="...">
    </div>
    </div>
    </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
            <br>
                <center><h4>Making your life easier</h4></center><br>
                <p >Our new take on getting from A to B. Get access to a Volvo when you want it, how you want it.</p>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                <br>
                <center><h4>Our future is electric</h4></center><br>
                <p>All our cars are available with electrified power. We help you reduce 
                the environmental impact of daily life.</p>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                <br>
                <center><h4>Protecting what’s important</h4></center><br>
                <p>We’re proud of our safety heritage. We’ll keep innovating new ways to help you protect what's important.</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>
            <div class="col">
                <center><a href="aboutus.blade.php"><button class="btn btn-outline-primary">Learn More About Volvo</button></a></center>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4"></div>
        </div>
        <br>
        <br>
            </div>
          </div>
</nav>
<br>
<hr>
<br>
    @endsection
</body>
</html>