@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
    p{
        font-size:16px;
        color:gray;
    }
    .breadcrumb-item{
        font-size:20px;
    }
    </style>
</head>
<body>
    @section('content')
    <div class="container">
    <br>
    <h2>Gallery</h2>
    <br>
    <br>
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6">
            <div class="card">
  <img src="https://www.volvocars.com/images/v/in/v/-/media/market-assets/india/applications/dotcom/images/homepage/range-car-web-banner_5120x2194-pix-06.jpg?iar=0&w=1366" height="250px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Volvo Cars</h5>
    <a href="cars.blade.php"><button class="btn btn-outline-dark">LEARN MORE</button></a>
  </div>
</div>
            </div>
            <div class="col col-6 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
  <img src="https://www.volvotrucks.in/en-in/_jcr_content/root/responsivegrid/collage/container-5/teaser.coreimg.jpeg/1606540097259/grid-range-of-volvo-trucks-solutions-in-2019.jpeg" height="250px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Volvo Trucks</h5>
    <a href="cars.blade.php"><button class="btn btn-outline-dark">LEARN MORE</button></a>
  </div>
</div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
  <img src="https://www.volvobuses.com/content/dam/volvo/volvo-buses/master/bre/about-us/what-we-do/2326x800-What-we-do-2016-bre.jpg/jcr:content/renditions/2326x800-What-we-do-2016-bre-imgtxt.jpg" height="400px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Volvo Buses</h5>
    <a href="buses.blade.php"><button class="btn btn-outline-dark">LEARN MORE</button></a>
  </div>
</div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="card">
  <img src="https://www.volvoce.com/-/media/volvoce/local/apac/singapore/local-content/world-class-excavators/world_class_excavators2.jpg?mh=403&mw=1176&v=nmEwPw&c=1&cw=1170&ch=403&jq=70&hash=7C9AE69B7C72B4774DA87E72D8CCC78FE092A526" height="250px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Volvo Construction Equipments</h5>
    <a href="cars.blade.php"><button class="btn btn-outline-dark">LEARN MORE</button></a>
  </div>
</div>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card">
  <img src="https://www.volvopenta.com/-/media/volvopenta/about-us/this-is-volvo-penta/dealerlocator-generic-2326x600.jpg?mh=306&mw=1170&v=KBRMPw&c=1&cw=1170&ch=299&jq=70&hash=C1A2373316D9D36C9BCAEBF16ACBF63B" height="250px" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Volvo Penta</h5>
    <a href="cars.blade.php"><button class="btn btn-outline-dark">LEARN MORE</button></a>
  </div>
</div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12">
                <center><h2><b>WHY VOLVO?</b></h2></center>
                <br>
                <img src="https://www.volvocars.com/images/v/in/v/-/media/project/contentplatform/data/media/img/three-callouts/homepage-whyvolvo-desktop-16x9.jpg?iar=0&w=1366" width="1120px" alt="...">
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
        <hr>
        <br>   
    </div>
    @endsection
</body>
</html>