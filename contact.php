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
    body{
      background-color:blue;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TSF BANK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
</body>

<footer>
    <p class="p-3 bg-dark text-white text-center"> &copy the Sparks foundation<br>Made by Mihika Choudhary</p>
    
  </footer>
</html>