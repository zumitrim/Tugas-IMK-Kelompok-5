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
</head>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
    margin: 0;
    padding: 0;
  }

  header {
    max-width: 1000px;
    background-color: #6c6c6c;
    color: #fff;
    text-align: center;
    margin: 20px auto;
    margin-bottom: 0;
    padding: 20px 0;
    border-radius: 10px;
  }

  header h1 {
    margin: 0;
    font-size: 36px;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 25px 25px;
  }

  .service-section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }

  .service-item {
    flex: 1 1 300px;
    margin: 20px;
    padding: 30px;
    background-color: #ffb71c;
    border-radius: 15px;
    text-align: center;
    transition: all 0.5s ease;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.35);
    overflow: hidden;
    height: 500px;
  }

  .service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
  }

  .service-item img {
    width: 250px;
    margin-bottom: 20px;
  }

  .service-item h3 {
    color: white;
    font-size: 24px;
    margin-bottom: 15px;
  }

  .service-item p {
    font-size: 14px;
    color: black;
  }

  @media (max-width: 768px) {
    .service-item {
      flex: 1 1 100%;
    }
  }

  .service-item p {
    text-align: justify;
    word-spacing: -1px;
    letter-spacing: -0.5px;
  }

  .service-item:nth-child(odd) {
    margin-bottom: 20px;
  }

  .service-item:nth-child(even) {
    margin-bottom: 50px;
  }
</style>

<body>

  <?php include('navigasi.php'); ?>

  <br><br>
  <header>
    <h1>Kelas</h1>
  </header>

  <div class="container">
    <section class="service-section">
      <div class="service-item">
        <img src="images/daftargambarbimbel/belajarhuruf.jpg" alt="huruf">
        <h3>Pembelajaran Huruf</h3>
        <p>Kelas ini didedikasikan untuk mengenalkan anak-anak pada huruf-huruf abjad secara menyenangkan dan interaktif.
          Melalui berbagai kegiatan kreatif, anak-anak akan belajar mengenali, mengeja, dan menghubungkan huruf-huruf untuk membangun dasar kemampuan membaca dan menulis.</p>
      </div>
      <div class="service-item">
        <img src="images/daftargambarbimbel/belajarangka.jpg" alt="angka">
        <h3>Pembelajaran Angka</h3>
        <p>Dalam kelas ini, anak-anak akan diajak untuk menjelajahi dunia angka dengan cara yang menyenangkan dan menarik. Mereka akan belajar mengenal angka, melakukan operasi sederhana, dan memecahkan masalah matematika dasar melalui permainan, lagu, dan aktivitas belajar yang beragam.</p>
      </div>
      <div class="service-item">
        <img src="images/daftargambarbimbel/belajarwarna.jpg" alt="warna">
        <h3>Pembelajaran Warna</h3>
        <p>Pembelajaran warna bertujuan untuk mengenalkan anak-anak pada berbagai warna di sekitar mereka dan memperluas kosakata warna mereka. Dalam kelas ini, anak-anak akan belajar mengidentifikasi, membedakan, dan mencampur warna melalui berbagai kegiatan seni dan eksperimen warna yang kreatif.</p>
      </div>
      <div class="service-item">
        <img src="images/daftargambarbimbel/belajarbentuk.jpg" alt="bentuk">
        <h3>Pembelajaran Bentuk</h3>
        <p>Di kelas pembelajaran bentuk, anak-anak akan diperkenalkan pada berbagai bentuk geometris dasar seperti lingkaran, persegi, segitiga, dan lainnya. Mereka akan belajar mengenali, membedakan, dan memanipulasi bentuk-bentuk ini melalui berbagai kegiatan konstruksi, seni, dan permainan interaktif.</p>
      </div>
      <div class="service-item">
        <img src="images/daftargambarbimbel/belajarseni.jpg" alt="seni">
        <h3>Pembelajaran Seni</h3>
        <p>Kelas seni dirancang untuk mengembangkan kreativitas dan ekspresi anak-anak melalui berbagai media seni seperti lukisan, lukisan air, kriya, dan patung. Anak-anak akan belajar teknik dasar seni serta menghasilkan karya seni mereka sendiri sebagai bentuk ekspresi diri.</p>
      </div>
      <div class="service-item">
        <img src="images/daftargambarbimbel/belajarmembaca.jpg" alt="membaca">
        <h3>Pembelajaran Membaca</h3>
        <p>Kelas membaca dirancang untuk membantu anak-anak memperoleh keterampilan membaca yang kuat dan percaya diri. Melalui berbagai kegiatan interaktif dan bermain, anak-anak akan diajak untuk menjelajahi dunia kata-kata dan cerita.</p>
      </div>

    </section>
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