@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US | Volvo Group</title>
</head>
<body>
    @section('content')
    <br>
    <center><font color="gray"><h4>THIS IS WHO WE ARE</h4></font></center>
    <p><center><font color="black" size="15"><b>About Volvo Group</b></font></center></p>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
                <center><font color="black">Volvo Group drives prosperity through transport and infrastructure solutions, offering trucks, buses, construction equipment, power solutions for marine and industrial applications, financing and services that increase our customers’ uptime and productivity. We are committed to shaping the future landscape of sustainable transport and infrastructure solutions. Our headquarter is located in Gothenburg, Sweden, and our shares are listed on Nasdaq in Stockholm, Sweden.</font></center>
            </div>
            <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
        </div>
        <br>
        <br>
        <div class="row">
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
            <center><font color="gray" size="6">QUICK FACTS ABOUT US</font></center>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2"></div>
        </div>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                <center><font size="5" color="black"><b>100,000</b></font></center>
                <p><center><font size="4" color="gray">Number of Volvo Group employees.</font></center></p>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                <center><font size="5" color="black"><b>18</b></font></center>
                <p><center><font size="4" color="gray">Countries we have production in</font></center></p>
            </div>
            <div class="col col-12 col-sm-4 col-md-4 col-lg-4">
                <center><font size="5" color="black"><b>190</b></font></center>
                <p><center><font size="4" color="gray">Markets we sell our products in.</font></center></p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-3 col-md-3 col-ld-3"></div>
            <div class="col col-12 col-sm-3 col-md-3 col-ld-3">
                <font size="5" color="black"><b>SEK 338 billion</b></font><br><p></p>
                <p><font size="4" color="gray">Net sales in 2020.</font></p>
            </div>
            <div class="col col-12 col-sm-3 col-md-3 col-ld-3">
                <center><font size="5" color="black"><b>1927</b></font></center>
                <p><center><font size="4" color="gray">Year Volvo Group was founded.</font></center></p>
            </div>
            <div class="col col-12 col-sm-3 col-md-3 col-ld-3">
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
                <h3><b><font color="black">Strong positions globally</font></b></h3>
                <br>
                <p><font color="black">Thanks to competitive product programs, strong dealers with extensive service networks and increasingly more complete offerings, the Volvo Group has established leading positions on a global market. The Group is one of the world’s largest manufacturers of heavy-duty trucks, construction equipment, buses and heavy-duty diesel engines as well as a leading supplier of marine and industrial engines. These positions provide for economies of scale in product development, production, purchasing and financial services.</font></p>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.volvogroup.com/content/dam/volvo-group/markets/master/about-us/1860x1050-net-sales-per-market-2020-eng.jpg/jcr:content/renditions/1860x1050-net-sales-per-market-2020-eng-teaser2.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.volvogroup.com/content/dam/volvo/volvo-group/markets/global/en-en/about-us/1860x1050-volvo-group-all-logos.jpg/jcr:content/renditions/1860x1050-volvo-group-all-logos-teaser2.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
    </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
                <h3><b><font color="black">Strong brands</font></b></h3>
                <br>
                <p><font color="black">The Volvo Group’s brand portfolio consists of Volvo, Volvo Penta, Terex Trucks, Renault Trucks, Prevost, Nova Bus, Mack and Arquus. We partner in alliances and joint ventures with the SDLG, Eicher and Dongfeng brands. By offering products and services under different brands, the Group addresses many different ­customer and market segments in both mature markets and growth markets.</font></p>
                <br>
                <a href="brands.blade.php" class="button btn btn-outline-primary">Read more about our brands</a>
            </div>
        </div>
        <br>
        <hr>
        <br>
    </div>
    @endsection
</body>
</html>