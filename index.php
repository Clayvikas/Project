<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Tooday - Socail Community App</title>
  <link rel="stylesheet" href="./index.css">



</head>
<body>


 


<!-- Navigation Bar -->

  <nav class="navbar  fixed-top d-lg-block  d-none navbar-expand-lg navbar-light pt-4">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./assets/brand.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      <p class="d-inline p-2">Tooday</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end text-uppercase"  id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#about">About us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#features">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#team">Our Team</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#contact">Contact us</a>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>

<!-- Navigation Bar Ends -->

<section class="d-lg-none  d-block"  style="position: fixed; top:20px;right: 20px;  z-index: 66;">
 
  <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="fa fa-1x fa-bars" aria-hidden="true"></i>
  </button>
  
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <a class="navbar-brand" href="#">
        <img src="./assets/brand.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        <p class="d-inline p-2">Tooday</p>
      </a>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        A person can't roam around his city to know what's happening out there. Due to which people miss lot of oppurunities which they can grab so Come join us
      </div>
      <div class="dropdown mt-3">
      
        <ul class="navbar-nav mr-auto" >
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#about">About us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Our Team</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#contact">Contact us</a>
          </li>
         
        </ul>
      </div>
    </div>
  </div>
  </section>



<!-- First Screen --> 

<section id="home" class="Home" >
      <div id="carouselExampleDark" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner vh-100">
          <div class="carousel-item vh-100 active " data-bs-interval="5000">
            <img src="./assets/mitchell-ng-liang-an-j5YwVDEC394-unsplash.jpg" alt="Chicago" style="object-fit: cover;" class="d-block  vh-100 w-100">
            <div class="carousel-caption d-flex flex-column h-100 justify-content-center pt-5 align-items-center">
              <h1 class="display-5 pt-5">Download the Tooday App</h1>
              
                <div class="d-inline-flex align-items-center justify-content-around">
                <img src="./assets/play.png" alt="playstore" width="214px" height="auto" />
                <img src="./assets/App.png" alt="Appstore" width="200px" height="auto"  />
              </div>
                <p class="text-uppercase" >And Stay updated about the thing's Happening in your city</p>
            </div>
          </div>
          <div class="carousel-item vh-100" data-bs-interval="5000">
            <img src="./assets/mahroof-mahr-ke-kdgc4TaQ-unsplash.jpg" alt="Chicago" style="object-fit: cover;" class="d-block vh-100 w-100">
            <div class="carousel-caption d-flex flex-column h-100 justify-content-center pt-5 align-items-center">
              <h1 class="display-5 pt-5">Download the Tooday App</h1>
              
                <div class="d-inline-flex align-items-center justify-content-around">
                <img src="./assets/play.png" alt="playstore" width="214px" height="auto" />
                <img src="./assets/App.png" alt="Appstore" width="200px" height="auto"  />
              </div>
                <p class="text-uppercase" >And Stay updated about the thing's Happening in your city</p>
            </div>
          </div>
          <div class="carousel-item vh-100" data-bs-interval="5000">
            <img  src="./assets/ayesha-parikh-tgIZagjhMtk-unsplash (1).jpg" alt="Chicago" style="object-fit: cover;" class="d-block vh-100  w-100">
            <div class="carousel-caption d-flex flex-column h-100 justify-content-center pt-5 align-items-center">
              <h1 class="display-5 pt-5">Download the Tooday App</h1>
              
                <div class="d-inline-flex align-items-center justify-content-around">
                <img src="./assets/play.png" alt="playstore" width="214px" height="auto" />
                <img src="./assets/App.png" alt="Appstore" width="200px" height="auto"  />
              </div>
                <p class="text-uppercase" >And Stay updated about the thing's Happening in your city</p>
            </div>
          </div>
        </div>
   
    </div>
  
</section>
<div class="alert alert-primary" style="height: 5px !important;" role="alert">
   
</div>

<!--Second Screen-->


<section id="about" class="container text-center  d-flex flex-column justify-content-evenly align-items-center w-100 vh-100 ">

  <div class="row align-items-center">

    <div class="col-sm-6 col-12 align-items-center" ">
      <h1>What we do  ?</h1>
      <p>A person can't roam around his city to know what's happening out there.
        Due to which people miss lot of oppurunities which they can grab so Come join us 
      </p>
    </div>

    <div class="col-sm-6 col-12 align-items-center" >
    <img src="./assets/Daco_3711925 (1).png" alt="team"  width="100%" height="100%" style="object-fit: contain;" >
    </div>
  </div>


  <div class="row align-items-center">

    <div class="col-sm-6 col-12 order-2 order-md-1 align-items-center" >
      <img src="./assets/pngegg (2).png" alt="team"  width="100%" height="100%" style="object-fit: contain;" >
    </div>

    <div class="col-sm-6 col-12 order-1 order-md-2 align-items-center " >
      <h1>Why you should join Us ?</h1>
      <p>A person can't roam around his city to know what's happening out there.
        Due to which people miss lot of oppurunities which they can grab so Come join us 
      </p>
    </div>
  </div>

</section>

<!--Second Screen Ends-->


<!--Third Screen-->

  
<div>
 
  </div>


  <div class="alert alert-warning" style="height: 5px !important;" role="alert">
   
  </div>

<section id="features" class="container d-flex flex-column justify-content-evenly align-items-center w-100 min-vh-100">



  <div class="row  justify-content-around text-center mt-5">

    <div class="col-12 col-md-3 mb-5 mb-md-0 align-items-center">
      <div class="card border-0" >
        <i class="fa fa-4x fa-compress" aria-hidden="true"></i>
        <div class="card-body">
          <p class="card-text">Automatically connects people to their <strong>City</strong> on login.</p>
        </div>
      </div>
   
    </div>

    <div class="col-12 col-md-3  mb-5 mb-md-0 align-items-center">
      <div class="card border-0" >
        <i class="fa fa-4x fa-newspaper-o" aria-hidden="true"></i>
        <div class="card-body">
          <p class="card-text">Automatically connects people to their <strong>City</strong> on login.</p>
        </div>
      </div>
   
    </div>
 

    <div class="col-12 col-md-3  mb-5 mb-md-0 align-items-center">
      <div class="card border-0" >
        <i class="fa fa-4x fa-camera" aria-hidden="true"></i>
        <div class="card-body">
          <p class="card-text">Share Latest Updates <strong>Photos,videos, text & Opinions</strong>with your city .</p>
        </div>
      </div>
   
    </div>


  </div>



  <div class="row  justify-content-around text-center mt-0 mt-md-5">

    <div class="col-12 col-md-3   mb-5 mb-md-0 align-items-center">
      <div class="card border-0" >
        <i class="fa  fa-4x fa-user" aria-hidden="true"></i>
        <div class="card-body">
          <p class="card-text">Let's be friendly with your <strong>City</strong> Share your profile </p>
        </div>
      </div>
   
    </div>

    <div class="col-12 col-md-3  mb-5 mb-md-0 align-items-center">
      <div class="card border-0" >
        <i class="fa fa-4x fa-map-marker" aria-hidden="true"></i>
        <div class="card-body">
          <p class="card-text">Change your City when you move to other <strong>Destination</strong>.</p>
        </div>
      </div>
   
    </div>
 

    <div class="col-12 col-md-3  mb-5 mb-md-0 align-items-center">
      <div class="card border-0" >
        <i class="fa fa-4x fa-lock" aria-hidden="true"></i>
        <div class="card-body">
          <p class="card-text">Share your profile <strong>With your City</strong>To maintain privacy.</p>
        </div>
      </div>
   
    </div>


  </div>


  <div class="row  d-none d-md-flex text-center ">
    <p style="margin-bottom: 100px;">Our Top 6 <strong>Features</strong></p>
    <nav aria-label="Page navigation example ">
  
      <ul class="pagination  justify-content-center">
      
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
      </ul>
    </nav>
   
  </div>


</section>




<!--Third Screen Ends-->


<div  class="d-flex flex-row  mt-5 mb-5 vw-90 border-2 border-dark justify-content-between align-items-center">
<div  >
   <img src='./assets/leaves-transparent-png-18.png' height="100px">
</div>

<h5 class="">Our Responsible Team</h5>
<div  >
  <img src='./assets/leaves-transparent-png-18.png' height="100px" style="transform:rotateY(180deg);">
</div>

</div>
<!--Forth Screen-->

<section  id="team" class="container w-100  ">



  </div>


   <div class="row  justify-content-around text-center ">

    <div class="col-12 col-md-3 ">
      <div class="card border-0" >
       
        <img class="card-img-top img-fluid"  src="./assets/michael-dam-mEZ3PoFGs_k-unsplash.jpg"  alt="Card image" 
        
        style="object-fit:cover;width:100%;height: 300px;border-radius: 20px;">
        <h4 class="card-title mt-5">Michael Dam</h4>
        <div class="card-body">
         
          <p class="card-text">Founder and Ceo of Tooday, She is also an active investor of Byjus . Tooday was established on 2017</p>
       
        </div>
      </div>
   
    </div>

    <div class="col-12 col-md-3 align-items-center">
      <div class="card border-0" >
       
        <img class="card-img-top img-fluid"  src="./assets/sajad-nori-53eIf0k7l0E-unsplash.jpg"  alt="Card image" 
        
        style="object-fit: cover;width:100%;height: 300px; border-radius: 10px;">
        <h4 class="card-title mt-5">Rahul Negi</h4>
        <div class="card-body">
         
          <p class="card-text">Rahul is working as a digital marketer since 2018 and handle all the seo's and Socail Media Channels.</p>
       
        </div>
      </div>
   
   
    </div>
 

    <div class="col-12 col-md-3 align-items-center">
      <div class="card border-0" >
       
        <img class="card-img-top img-fluid"  src="./assets/ayo-ogunseinde-6W4F62sN_yI-unsplash.jpg"  alt="Card image" 
        
        style="object-fit: cover;width:100%;height: 300px;border-radius: 10px;">
        <h4 class="card-title mt-5">Monica Dahiya</h4>
        <div class="card-body">
         
          <p class="card-text">Monica is working as a UI/UX designer  since 2019 and handle's  all the designing Stuff.</p>
       
        </div>
      </div>
   
   
    </div>


  </div>



</section>

<!--Forth Screen Ends  -->

<div class="alert alert-dark mt-5" style="height: 5px !important;" role="alert">
   
</div>



<!-- Fitth section-->

  <section id="contact" class="container d-flex flex-column justify-content-evenly align-items-center w-100 vh-md-100 mb-5 mb-md-0 ">



    <div class="row  justify-content-around align-items-center  mt-5">
  
      <div class="col-6 align-items-center d-none d-md-block">
        <img src="./assets/customer.png" alt="team"  width="100%" height="100%" style="object-fit: contain;" >
     
      </div>
       
      <div class="col-md-6 col-12 ">
        <form class="row g-3">
          <div class="col-md-6">
            <label for="inputName" class="form-label">Name</label>
            <input type="Name" class="form-control" id="inputName">
          </div>
          <div class="col-md-6">
            <label for="inputemail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputemail">
          </div>
          <div class="col-12">
            <label for="Problem" class="form-label">What problem you are facing ?</label>
            <select id="Problem" class="form-select">
              <option selected>App Crashing on Startup</option>
              <option>Not able to select your City</option>
              <option>App takes time's to Load</option>
              <option>Other issuse</option>
            </select>
           
          </div>
          <div class="col-12">
           
            <input type="text" class="form-control" id="Description" placeholder="Describe your problem in brief">
          </div>
        
          <div class="col-md-4">
            <label for="inputState" class="form-label">City</label>
            <select id="inputState" class="form-select">
              <option selected>Dehradun</option>
              <option>Delhi</option>
              <option>Chandigarh</option>
              <option>Mumbai</option>
              <option>Pune</option>
            </select>
          </div>
          <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              I Understand it will take some time.
            </label>
          </div>
        </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit your Query</button>
          </div>
        </form>
     
      </div>

      </div>

  
</section>


<!-- Fitth section Ends-->


</body>
</html>