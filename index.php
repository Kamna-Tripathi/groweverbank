<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <img class="photo" src="index_bg.jpg" style="
    width:100%;
    height:100vh;
    position:absolute;
    z-index:-1;
    margin-top:0px">
    <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
</style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body image src="bg.jpg" >
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
      
            <div class="row intro py-1" >
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>GROW_EVER BANK <img class="logo" src="logo.png"></h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    
                    <br>
                    <a href="createuser.php"><button style="background-color : #772569">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                  
                    <br>
                    <a href="transfermoney.php"><button style="background-color :#772569 ">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #772569">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>KAMNA TRIPATHI</b> <br> </p>
      </footer>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>