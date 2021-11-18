<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SheCrafs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h1 class="text-warning pt-3 title">Who We Are ?</h1>
          <hr />
          <img
            src="images/about.jpg"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">SheCRAFTS is an online platform that promotes women handicraft in sustainable and eco-consious way. 
            This website is to promote gender equity by identifying opppourtunities for women. 
            Through their craft we hope to create a better stories and a network for them to flourish. 
            We the 5 of us wanted to created a tech-inclusive website to promote women empowerment which gives 
            them the sense of self worth. 
            Handmadecraft has been a part of nepelese culture since the begining of the time, 
            though commercially accessible rarely does it condone each house-hold women's craft in a high margin 
            with this website we hope to negate such activities and give a platform where they themselves can promote 
            their products online</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h3>We Are Helping Hands for women  </h3>
          </span>
          <hr>
          <p>
          We promote skills and product made by women. We offer reasonable price for sustainable and eco-friendly collectives.
          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  
  <!--footer -->
  <?php include 'includes/footer.php'?>
  <!--footer end-->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
