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

    .navbar {
      width: 100%;
      white-space: nowrap;
      background-color: #5E11A3;
    }

    .main_div {
      width: 100%;
      height: 100vh;

    }

    input {
      margin-top: 10px;
      width: 230px;
      height: 40px;
      border-radius: 5px;
      outline: none;
    }

    ::placeholder {
      padding: 10px;
      color: black;
      background-color: #4CAF50;
    }

    button {
      color: blueviolet;
      background-color: salmon;
      border-color: #7A3DAF;
      padding: 14px 20px;
      cursor: pointer;
      width: 100%;
    }

    #img1 {
      background-image: aqua;
    }
  </style>
</head>

<body style="background:linear-gradient(to bottom,   #79c2d0 0%, #FF99FF 100%);">
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
            <a class="nav-link" href="customerinfo.php ">VIEW CUSTOMER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="col">
      <div class="row-sm-4">
        <div class="card text-center" style="margin-top:76px;background-color:#8c0040;border-radius:10px;color:white">
          <form method="POST">
            <?php
            include 'connection.php';
            $ids = $_GET['idtransfer'];
            $showquery = "select * from `viewcustomer` where id=($ids) ";
            $showdata = mysqli_query($con, $showquery);
            if (!$showdata) {
              printf("Error: %s\n", mysqli_error($con));
              exit();
            }
            $arrdata = mysqli_fetch_array($showdata);
            ?>
            <div class="card-body">
              <h3>SENDER DETAILS</h3>
              <label>Name</label>
              <input type="text" name="name1" value="<?php echo $arrdata['name']; ?>" required
                placeholder="Enter your name" /><br><br>
              <label>Email</label>
              <input type="text" name="email1" value="<?php echo $arrdata['email']; ?>" required
                placeholder="Enter email id" /><br><br>
              <label>Amount</label>
              <input type="text" name="amount1" value="" style="width:210px;" required
                placeholder="Enter amount" /><br><br>
              <button name="submit">Proceed to Pay</button>
            </div>
        </div>
      </div>

      <div class="row-sm-4">
        <div class="card text-center" style="margin-top:76px;background-color:#8c0040;border-radius:10px;color:white">
          <div class="card-body">
            <h3>RECEIVER DETAILS</h3>
            <label>Name</label>
            <input type="text" name="name2" value="" required placeholder="Enter your name" /><br><br>
            <label>Email</label>
            <input type="text" name="email2" value="" required placeholder="Enter email id" /><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </form>
  <?php

  include 'connection.php';

  if (isset($_POST['submit'])) {

    $Sender_name = $_POST['name1'];
    $Sender_email = $_POST['email1'];
    $Sender = $_POST['amount1'];
    $Receiver_name = $_POST['name2'];
    $Receiver_email = $_POST['email2'];

    $ids = $_GET['idtransfer'];
    $senderquery = "select * from `viewcustomer` where ID=$ids ";
    $senderdata = mysqli_query($con, $senderquery);

    if (!$senderdata) {
      printf("Error: %s\n", mysqli_error($con));
      exit();
    }
    $arrdata = mysqli_fetch_array($senderdata);

    //receiverquery
    $receiverquery = "select * from `viewcustomer` where Email='$Receiver_email' ";
    $receiver_data = mysqli_query($con, $receiverquery);

    if (!$receiver_data) {
      printf("Error: %s\n", mysqli_error($con));
      exit();
    }
    $receiver_arr = mysqli_fetch_array($receiver_data);
    $id_receiver = $receiver_arr['id'];


    if ($arrdata['amount'] >= $Sender) {
      $decrease_sender = $arrdata['amount'] - $Sender;
      $increase_receiver = $receiver_arr['amount'] + $Sender;
      $query = "UPDATE `viewcustomer` SET `id`=$ids,`amount`= $decrease_sender  where `id`=$ids ";
      $rec_query = "UPDATE`viewcustomer` SET `id`=$id_receiver,`amount`= $increase_receiver where  `id`=$id_receiver ";
      $res = mysqli_query($con, $query);
      $rec_res = mysqli_query($con, $rec_query);
      // $res_receiver=mysqli_query($con,$query_receiver);
      if ($res && $rec_res) {
        ?>
        <script>
          swal("Done!", "Transaction Successful!", "success");
        </script>

        <?php

      } else {
        ?>
        <script>
          swal("Error!", "Error Occured!", "error");
        </script>

        <?php

      }
    } else {
      ?>
      <script>
        swal("Insufficient Balance", "Transaction Not  Successful!", "warning");
      </script>
      <?php

    }

  }
  ?>
</body>
<footer>
  <p class="p-3 bg-dark text-white text-center"> &copy the sparks foundation <br>Made by Mihika Choudhary</p>
</footer>

</html>