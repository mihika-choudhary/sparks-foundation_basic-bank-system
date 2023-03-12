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
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .main_div {
      width: 100%;
      height: 100%;
    }

    .display_table {
      width: 100vw;
      height: 120vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
    }

    .center_div {
      width: 90vw;
      height: 100vh;
      background-repeat: no-repeat;
      background-size: 100%;
      padding: 20px 0 0 0;
      box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
      margin-left: 30px;
    }

    h1 {
      font-size: 38px;
      color: #000;
      text-align: center;
      margin-top: -20px;
      margin-bottom: 20px;
    }

    table {
      border-collapse: collapse;
      background-color: #cccccc;
      box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.03);
      border-radius: 10px;
      border-collapse: collapse;
      table-layout: fixed;
      color: white;
      font-weight: bold;
      margin: auto;
    }

    th,
    td {
      border: 1px solid #f2f2f2;
      padding: 8px 30px;
      text-align: center;
      color: white;
    }

    th {
      text-transform: uppercase;
      font-weight: 50;
    }

    td {
      font-size: 25px;

    }
    body{
      background-image: url('7.jpg');
    }
  </style>
</head>

<body style="background-color:aqua">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="test.php">TSF BANK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="test.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="customerinfo.php">VIEW CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--start of customer table-->

  <div class="display_table">
    <h1 style="color: black"> Customer Details</h1>
    <div class="center_div">
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <th style="color: black">ID</th>
              <th style="color: black">Name</th>
              <th style="color: black">Email</th>
              <th style="color: black">Amount</th>

              <th colspan="2" style="color: black">operation</th>
            </tr>
          </thead>
          <tbody>
      </div>


      <?php
      include 'connection.php';
      $selectquery = "  SELECT * FROM `viewcustomer` ";
      $query = mysqli_query($con, $selectquery);
      $numofrows = mysqli_num_rows($query);
      while ($res = mysqli_fetch_array($query)) {
        ?>
        <tr>
          <td style="color: black">
            <?php echo $res['id']; ?>
          </td>
          <td style="color: black">
            <?php echo $res['name']; ?>
          </td>
          <td style="color: black">
            <?php echo $res['email']; ?>
          </td>
          <td style="color: black">
            <?php echo $res['amount']; ?>
          </td>
          <td style="color: white"><a href="moneytransfer.php?idtransfer=<?php echo $res['id']; ?>">PAY</a></td>
        </tr>
        <?php
      }
      ?>

      </tbody>
      </table>
    </div>
  </div>
  </div>
  </div>

</body>
<footer><br><br>
    <p class="p-3 bg-dark text-white text-center"> &copy the sparks foundation <br>Made by Mihika Choudhary</p>
  </footer>


</html>