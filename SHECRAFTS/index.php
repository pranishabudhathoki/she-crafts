<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SheCrafts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
        <div>
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;" >
                <h1>Sustainable goods, made with love</h1>
                <p>Empowering women and their domestic handicraft </p>
                <a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a>
            </div>
            </div>

        </div>
    </div>
    <div class="text-center pt-4 h3">
        * Only one of its kind for you *
    </div>
    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#crafts"> <img src="images/craft.jpg" class="img-fluid " alt="" style="border-radius:0.5rem">
                <!-- https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fm=jpg&w=400&fit=max-->
                    <div class="h5 pt-3 font-weight-bolder">
                      Crafts
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="products.php#accessories"  >
                  <img src="images/accessories.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                        Accesories
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#cloths">
                 <img src="images/cloths.jpg" class="img-fluid   " alt="" style="border-radius:0.5rem">
                <div class="h5 pt-3 font-weight-bolder">
                    Cloths
                 </div>
             </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#decorations">
                 <img src="images/decorations.jpg" class="img-fluid  " alt="" style="border-radius:0.5rem">
                 <div class="h5 pt-3 font-weight-bolder">
                    Decorations
                 </div>
              </div>
            </a>
        </div>
    </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>