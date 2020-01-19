<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style-in.css">
  <title>AgroEaze Home</title>
  <link rel="shortcut icon"  href="flashcon.png">
</head>

<body data-spy="scroll" data-target="#main-nav" id="home">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="main-nav">
    <div class="container">
    	
      <a href="index.html" class="navbar-brand">AgroEaze</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="http://localhost/ht_manual" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="#explore-head-section" class="nav-link">HOW IT WORKS</a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/ht_manual/accounts/login.php" class="nav-link">LOG IN</a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/ht_manual/accounts/register.php" class="nav-link">REGISTER</a>
          </li>
          <li class="nav-item">
            <a href="#share-head-section" class="nav-link">SHARE</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HOME SECTION -->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner container">
        <div class="row">
          <div class="col-lg-8 d-none d-lg-block">
            <h1 class="display-4 indent"><strong><h1> Why AgroEaze ?</h1></strong>
            </h1>
            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                <h4>Buy fresh vegetables at effective price.</h4>
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
               <h4>Our services are cost-effective and reliable.</h4>
              </div>
            </div>

            <div class="d-flex">
              <div class="p-4 align-self-start">
                <i class="fas fa-check fa-2x"></i>
              </div>
              <div class="p-4 align-self-end">
                <h4>Save yourself from trouble of Transport.</h4>
              </div>
            </div>
          </div>

          <!--<div class="col-lg-4">
            <div class="card bg-danger text-center card-form">
              <div class="card-body">
                <h3>Login Now</h3>
                <p>Please Login to Deliver</p> 
            </br>
                <form>
                   <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Username">
                  </div> 
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" placeholder="Email">

                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" placeholder="Password">
                  </div>
                  </br>
                   <div class="form-group">
                    <input type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                  </div> 
                  <input type="submit" value="Submit" class="btn btn-outline-light btn-block">

                </form>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </header>

  <!-- EXPLORE HEAD -->
  <section id="explore-head-section">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">How it works ?</h1>
          <p class="lead">Deliver within a few clicks.</p>
          <a href="#" class="btn btn-outline-secondary">Find Out More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPLORE SECTION -->
  <section id="explore-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/home3.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>HOW AgroEaze WORKS</h3>
          <p>AgroEaze provides a platform to farmers to upload information about their produce. Customers will get an option to buy grains or vegetables using the platform.   </p>
          <div class="d-flex">
            <div class="p-2 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            
            <div class=" align-self-start">
                Farmers upload produce info. Farmers can also use warehouse services using the platform at a reasonable cost. 
            </dv>
          </div>

          <div class="d-flex">
            <div class="p-2 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class=" align-self-start text1">
              Customers can use the platform to directly buy grains or vegetables at a very reasonable price.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

  <!-- CREATE HEAD 
  <section id="create-head-section" class="bg-danger">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Create Account</h1>
          <p class="lead">FlashEX is a platform which allows you to deliver FOOD, DOCUMENTS, HOUSEHOLD GOODS, FLOWER, CELLPHONE etc.</p>
          <a href="#" class="btn btn-outline-light">Find Out More</a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- CREATE SECTION 
  <section id="create-section" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-2"> -->
          <!-- <img src="img/home2.jpg" alt="" class="img-fluid mb-3 rounded-circle"> 
        </div>
        <div id="asa">
                  <div class="col-lg-4">
            <div class="card bg-danger text-center card-form">
              <div class="card-body">
                <h3>Sign Up Today</h3>
                <p>Please fill out this form to register</p>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                  </div>
                  <input type="submit" value="Submit" class="btn btn-outline-light btn-block">
                </form>
              </div>
            </div>
          </div>
          </div> -->
          <!-- <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end">
              Help your friends with their creation!
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- SHARE HEAD -->
  <section id="share-head-section" class="bg-success">
    <div class="container">
      <div class="row">
        <div class="col text-center py-5">
          <h1 class="display-4">Share</h1>
          <p class="lead">Share about our services!</p>
          <a href="#" class="btn btn-outline-light">Find Out More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SHARE SECTION -->
  <section id="share-section" class="bg-light text-muted py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="img/home4.jpg" alt="" class="img-fluid mb-3 rounded-circle">
        </div>
        <div class="col-md-6">
          <h3>Share with family and friends.</h3>
          <p>SHARE, GIVE REVIEWS, HELP US IMPROVE.</p>
          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end new1">
              Share about our work with your friends.
            </div>
          </div>

          <div class="d-flex">
            <div class="p-4 align-self-start">
              <i class="fas fa-check fa-2x"></i>
            </div>
            <div class="p-4 align-self-end new1">
              Find out what's wrong and help us improve!
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER 
  <footer id="main-footer" class="bg-dark">
    <div class="container">
      <div class="row">
        <div class="col text-center py-4">
          <h3>AgroEaze</h3>
          <p>Copyright &copy;
            <span id="year"></span>
          </p>





          <button class="btn btn-danger" data-toggle="modal" data-target="#contactModal">Contact Us</button>
        </div>
      </div>
    </div>
  </footer> -->

  <!-- CONTACT MODAL -->
  <div class="modal fade text-dark" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contact Us</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger btn-block">Submit</button>
        </div>
      </div>
    </div>
  </div>


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav' });

    // Smooth Scrolling
    $("#main-nav a").on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function () {

          window.location.hash = hash;
        });
      }
    });
  </script>
</body>

</html>
    