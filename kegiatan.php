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

    h2 {
      margin-top: 20px;
      margin-bottom: 20px;
      text-align: center;
      font-size: 40px;
      color: #333;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: bold;
    }

    header {
      max-width: 1000px;
      background-color: #6c6c6c;
      color: #fff;
      text-align: center;
      margin: 20px auto;
      padding: 20px 0;
      border-radius: 10px;
    }

    header h1 {
      margin: 0;
      font-size: 36px;
    }

    main {
      max-width: 1000px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 25px 25px;
    }

    .sect {
      max-width: 1000px;
      margin-bottom: 25px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 25px;
    }

    .sect h3 {
      margin-top: 0;
      color: #333;
      font-size: 24px;
    }

    .gallery {
      margin: 20px;
    }

    .gallery img {
      width: 300px;
      height: 200px;
      display: block;
      margin: 0 auto;
    }

    .desc {
      text-align: center;
    }

    .gallery .desc {
      margin-top: 20px;
    }

    .gallery .desc h3 {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>

  <?php include('navigasi.php'); ?>

  <br><br>
  <header>
    <h1>Kegiatan</h1>
  </header>

  <main>
    <div class="sect">
      <div class="gallery">
        <img src="images/kegiatan1.jpg">
        <div class="desc">
          <h3>Pembelajaran</h3>
          <p> Sesi pembelajaran adalah inti dari kegiatan di bimbel. Ini mencakup penjelasan materi pelajaran, diskusi, dan pemberian tugas kepada siswa. </p>
        </div>
      </div>
    </div>
    <div class="sect">
      <div class="gallery">
        <img src="images/mandiri jpeg.jpg">
        <div class="desc">
          <h3>latihan mandiri</h3>
          <p> Siswa sering diberi latihan soal untuk memperkuat pemahaman mereka tentang materi pelajaran yang telah dipelajari.</p>
        </div>
      </div>
    </div>
    <div class="sect">
      <div class="gallery">
        <img src="images/seminar jpeg.jpg">
        <div class="desc">
          <h3>Seminar</h3>
          <p>Program ini biasanya dilakukan untuk memfasilitasi murid-murid yang terlalu sibuk saat hari-hari sekolahnya. Terkadang juga program ini dibuat untuk para mahasiswa yang ingin memperdalam mata pelajaran tertentu, seperti fisika dasar dan kalkulus.</p>
        </div>
      </div>
    </div>
    <div class="sect">
      <div class="gallery">
        <img src="images/sosial anak.jpeg">
        <div class="desc">
          <h3>kegiatan sosial</h3>
          <p>Melibatkan murid dalam kegiatan sosial atau pelayanan masyarakat, seperti membersihkan lingkungan, mengunjungi panti jompo, atau mengadakan acara amal.</p>
        </div>
      </div>
    </div>
    <div class="sect">
      <div class="gallery">
        <img src="images/tanya jawab jpeg.jpg">
        <div class="desc">
          <h3>quiz tanya jawab</h3>
          <p>Guru atau tutor menyediakan waktu bagi siswa untuk bertanya tentang materi yang sulit dipahami atau memperjelas konsep-konsep tertentu. </p>
        </div>
      </div>
    </div>
    <div class="sect">
      <div class="gallery">
        <img src="images/game edukasi.jpg">
        <div class="desc">
          <h3>game education</h3>
          <p>Menggunakan permainan atau permainan luar ruangan yang dirancang untuk memperkuat pemahaman materi pelajaran, seperti permainan matematika atau permainan bahasa.</p>
        </div>
      </div>
    </div>
    <div class="sect">
      <div class="gallery">
        <img src="images/aktivitas-olahraga-anak-selama-pandemi.jpg">
        <div class="desc">
          <h3>kegiatan jasmani</h3>
          <p>Kegiatan olahraga dalam bimbel dapat menjadi tambahan yang menyenangkan dan bermanfaat bagi siswa. </p>
        </div>
      </div>
    </div>
  </main>

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