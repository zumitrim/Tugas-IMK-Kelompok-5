<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bimba MAKRTZ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
  <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
  <link rel="stylesheet" href="css/swipebox.css">
  <link rel="stylesheet" href="css/roma.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .container5 {
      max-width: 1200px;
      margin: auto;
      overflow: auto;
    }

    .gallery {
      margin: 5px;
      margin-top: 30px;
      margin-bottom: 30px;
      border: 1px solid #ccc;
      float: left;
      width: 390px;
    }

    .gallery img {
      width: 100%;
      height: 200px;
    }

    .judul h2 {
      margin-top: 20px;
    }

    .warna-teks {
      margin-left: 5px;
      color: #000000;
    }

    header {
      max-width: 1000px;
      background-color: #6c6c6c;
      color: #fff;
      text-align: center;
      margin: 20px auto;
      padding: 20px 0;
      border-radius: 10px;
      margin-top: 60px;
    }

    header h1 {
      margin: 0;
      font-size: 36px;
    }
  </style>
</head>

<body>

  <?php include('navigasi.php'); ?>

  <header>
    <h1>Galeri Kelas</h1>
  </header>

  <div class="container5">
    <div class="gallery">
      <img src="images/kelas/K1.jpeg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K2.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K3.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K4.jpeg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K5.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K6.jpeg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K7.jpeg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K8.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K9.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K10.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K11.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K12.jpeg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K13.jpg">
    </div>
    <div class="gallery">
      <img src="images/kelas/K14.jpeg">
    </div>
  </div>

  <?php include('footer.php'); ?>

  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="js/SmoothScroll.min.js"></script>
  <script type="text/javascript" src="js/numscroller-1.0.js"></script>
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $().UItoTop({
        easingType: 'easeOutQuart'
      });
    });
  </script>
  <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <script src="js/jquery.swipebox.min.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
      $(".swipebox").swipebox();
    });
  </script>
  <script src="js/simplePlayer.js"></script>
  <script>
    $("document").ready(function() {
      $("#video").simplePlayer();
    });
  </script>
  <script src="js/jquery-ui.js"></script>
  <script>
    $(function() {
      $("#datepicker").datepicker();
    });
  </script>
</body>

</html>