<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Inspiration&family=Josefin+Sans:wght@100&display=swap"
    rel="stylesheet">

  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" href="/favicon16x16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="/favicon32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon96x96.png" sizes="96x96">
  <style>
    * {
      font-family: 'Courier New', Courier, monospace;
    }
    nav {
      width: 100%;
      white-space: nowrap;
     
      position: absolute;
    }

    .navbar-brand {
      color: white;
    }

    .nav-item>.nav-link {
      color: white;
    }

    #div1 {
      background-color: #79c2d0;
      width: 100%;
      padding-top: 100px;
      padding-bottom: 80px;
      margin-left: 0;
    }

    .container {
      margin-bottom: 0px;
      max-width: 100%;
      padding-left: 30px;
      padding-right: 30px;
    }

    #txt {
      max-width: 100%;
      max-height: 150vh;
      padding-top: 22vh;
      padding-left: 10vh;
      color: black;
      text-align: left;
    }

    #box2 {
      max-width: 50%;
    }

    .my-5 {
      margin-left: 30px;
      margin-right: 30px;
      padding-top: 0;
    }

    #about {
      padding: 0;
      background-color: #e6f2ff;
    }

    #contact {
      background-color: #0086b3;
      height: 80vh;
    }


    #div2 {
      background-color: #79c2d0;
    }

    .carousel-caption {
      font-family: Garamond;
      top: 0;
      bottom: auto;
      color: black;
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg   navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="test.php">TSF BANK </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria- controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="test.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="customerinfo.php">VIEW CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container text-center" id="div2">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators ">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="9.jpeg  " id="img1" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="font-size:60px">WELCOME TO TSF BANK</h5>
            <p style="font-size:30px">A Sparks Foundation initiative.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="   18.png   " class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 style="font-size:50px"> TSF BANK</h5>
            <p style="font-size:20px">Your banking partner.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="  24.jpg " class="d-block w-100" alt="...">
          <div class="carousel-caption  d-none d-md-block ">
            <h5 style="font-size:60px">TSF BANK</h5>
            <p style="font-size:30px">Customer satisfaction is our motto.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div id="div1">
    <section class="my-5" id="about">
      <div class="py-5 ">
        <h3 class="text-center"><b>ABOUT US</b></h3>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12" id="txt">
            <h2 style="font-size:40px"><b>THE SPARKS FOUNDATION BANK</b></h2>
            <p class="w3-xlarge w3-serif">
              <i>"Happiness: a good bank account, a good cook, and a good digestion."<br>
                <p> Jean Jacques Rousseau</p>
              </i>
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque consequatur cupiditate accusamus enim
              corporis ad voluptatibus odit
              quia? Numquam deleniti obcaecati eligendi maxime tempora eos perspiciatis at esse. Quae, tempore.</p>
          </div>
          <div class="col-lg-6 col-md-6 col-12" id="img1">
            <img src="20.webp " alt="img added">
          </div>
        </div>
      </div>
    </section>

    <section class="my-5" id="contact">
      <div class="py-5 ">
        <h3 class="text-center" style="font-size:40px"><b>CONTACT US</b></h3>
      </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="POST"> <!--here we have mentioned userinfo.php-->
          <div class="form-group">
            <label>USERNAME</label>
            <input type="text" name="user" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label> EMAIL</label>
            <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>MOBILE</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>COMMENTS</label>
            <textarea class="form-control" name="comments"></textarea>
          </div>
          <button type="submit" name="submit" class=" btn btn-success">Submit</button>
        </form>
      </div>
    </section>
  </div>

  <footer>
    <p class="p-3 bg-dark text-white text-center"> &copy the sparks foundation <br>Made by Mihika Choudhary </p>
  </footer>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>
</html>





