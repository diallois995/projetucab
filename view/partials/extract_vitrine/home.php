 <!-- ======= Home Section ======= -->
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top " style=" font-family: 'Merriweather',serif;background-color: #096D1F; ">
    <div class="container d-flex align-items-center" >

      <h1 class="logo me-auto"><a href="public/templates/templateVitrine/index.html"><img src="public/images/Logo.png" width="50vh"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="public/templates/templateVitrine/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>  
                 
          <li><a class="nav-link scrollto active" href="#accu">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li> 
          <li class="dropdown"><a href="#services"><span>Université</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
        <ul>
          <li class="dropdown"><a href="#" style="background-color: #096D1F; color: #fff"><span>Nos Centres</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul style="background-color: #096D1F; color: #fff">
            <li><a href="public/templates/templateVitrine/centredk.html">Centre de Dakar</a></li>
              <li><a href="public/templates/templateVitrine/centreTouba.html">Centre de Touba</a></li>
              <li><a href="public/templates/templateVitrine/centreStL.html">Centre Saint-Louis</a></li>
              <li><a href="public/templates/templateVitrine/centreBam.html">Centre Bambeye</a></li>
            </ul>
          </li>
         
        </ul>
          <li><a href="#portfolio">Filiére</a></li>
           
          <!--<li><a class="nav-link scrollto" href="#team">Administration</a></li>-->
          <li><a href="#clients">Partenaire</a></li>
          <!--<li><a href="Public/Templates/templateVitrine/album/index.html.php">Blog</a></li>-->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
                <i class="bi bi-Search"></i>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
        <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->

    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
 <link rel=" https://github.com/animate-css/animate.css.git">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  </header><!-- End Header -->

  <style type="text/css">
   
   *{
    font-family: montserrat;
   

}
.bg-light{
    background-color: #096D1F;

}
.carousel-item{
  
    height: 60%;
    height: 600px;
  }
   .carousel-item img{
    
           width:100%;
           height:100%;
           animation: zoom 3s linear infinite;

}

.carousel-caption p{
    width: 100%;
    margin-left: top;
    margin: auto;
    font-size: 18px;
    line-height: 1.9;
    color:maroon;
}
.carousel-caption h1{
    color:maroon;
}
.carousel-caption a{
    text-transform: uppercase;
    text-decoration: none;
    background: darkgreen;
    padding: 10px 30px;
    color: white;
    margin-top: 15px,
}
        
           </style>
  </header>
  <section >
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/ucab.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h1 class="animated bounceInRight" style="animation-delay: 1s ">CENTRE DE DAKAR</h1>
        <p  class="animated bounceInRight d-none d-md-block" style="animation-delay: 2s">UFR des Sciences Islamique et 
        Technologies.</p>
        <p  class="animated bounceInRight" style="animation-delay: 3s">
        <a href="public/templates/templateVitrine/centredk.html"> DAKAR</a></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="public/images/touba/bactou.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
       <h1 class="animated bounceInRight" style="animation-delay: 1s ">CENTRE DE TOUBA</h1>
        <p  class="animated bounceInRight d-none d-md-block" style="animation-delay: 2s">UFR des Sciences Islamique</p>
        <p  class="animated bounceInRight" style="animation-delay: 3s">
        <a href="public/templates/templateVitrine/centreTouba.html">TOUBA</a></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="public/images/Bacstl(1).jpg" class="d-block w-100" alt="...">
      
      <div class="carousel-caption ">
        <h1 class="animated bounceInRight" style="animation-delay: 1s ">UCAB DE SAIN-LOUIS
</h1>
        <p  class="animated bounceInRight d-none d-md-block" style="animation-delay: 2s">Faculté des Technologies Agroalimentaires &
         Sciences Economiques et Sociales</p>
        <p  class="animated bounceInRight" style="animation-delay: 3s">
        <a href="public/templates/templateVitrine/centreStL.html">SAIN-LOUIS</a></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="public/images/Bambeye/ucabb.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h1 class="animated bounceInRight" style="animation-delay: 1s ;">UCAB DE BAMBEY</h1>
        <p  class="animated bounceInRight d-none d-md-block" style="animation-delay: 2s">Le CESSEFP de Bambey développe des filières
         dans les secteurs l’élevage et l’agriculture..</p>
        <p  class="animated bounceInRight" style="animation-delay: 3s">
        <a href="public/templates/templateVitrine/centreBam.html">BAMBEY</a></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </section>
    <!-- ======= Home Section ======= -->