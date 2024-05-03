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

  .faq-section {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }

  .faq-section h2 {
    margin-top: 0;
    color: #333;
    font-size: 24px;
    cursor: pointer;
  }

  .answer {
    margin-top: 10px;
    color: #666;
    display: none;
  }

  .answer p {
    margin: 0;
    line-height: 1.6;
  }

  .like-icon {
    color: #666;
    cursor: pointer;
  }

  .liked {
    color: #ffd700;
  }

  .star-icon {
    color: #ffd700;
    font-size: 20px;
    margin-left: 5px;
  }
</style>

<body>

  <?php include('navigasi.php'); ?>

  <br><br>
  <header>
    <h1>Frequently Asked Questions</h1>
  </header>
  <main>
    <section class="faq-section">
      <h2 class="question">Apa yang membedakan Bimba MAKRTZ dari bimbingan belajar lainnya?</h2>
      <div class="answer">
        <p>Bimba MAKRTZ memiliki pendekatan belajar yang menyenangkan dan holistik. Kami tidak hanya fokus pada akademik, tetapi juga pada pengembangan keterampilan sosial, emosional, dan kreativitas anak-anak</p>
        <i class="far fa-thumbs-up like-icon"></i>
        <span class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </section>
    <section class="faq-section">
      <h2 class="question">Apa saja program bimbingan belajar yang ditawarkan untuk anak usia TK?</h2>
      <div class="answer">
        <p>Kami menawarkan program Persiapan Sekolah yang dirancang khusus untuk membantu anak-anak TK agar siap masuk ke sekolah dasar. Program ini mencakup pembelajaran huruf, angka, warna, serta keterampilan sosial dan emosional.</p>
        <i class="far fa-thumbs-up like-icon"></i>
        <span class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </section>
    <section class="faq-section">
      <h2 class="question">Berapa lama durasi program bimbingan belajar di Bimba MAKRTZ?</h2>
      <div class="answer">
        <p>Durasi program bimbingan belajar bervariasi tergantung pada kebutuhan dan tujuan setiap siswa. Biasanya, program dapat berlangsung antara beberapa bulan hingga satu tahun, dengan opsi untuk memperpanjang sesuai kebutuhan.</p>
        <i class="far fa-thumbs-up like-icon"></i>
        <span class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </section>
    <section class="faq-section">
      <h2 class="question">Bagaimana saya bisa mengetahui perkembangan anak saya selama mengikuti program Bimba MAKRTZ?</h2>
      <div class="answer">
        <p>Kami menyediakan laporan perkembangan berkala kepada orangtua untuk memberikan informasi tentang kemajuan akademik dan keterampilan belajar anak. Selain itu, orangtua juga dapat berkonsultasi langsung dengan guru-guru kami untuk mendapatkan pembaruan tentang perkembangan anak.</p>
        <i class="far fa-thumbs-up like-icon"></i>
        <span class="star-icon">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
      </div>
    </section>
    <br><br>
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
  <script>
    $(document).ready(function() {
      $(".question").click(function() {
        $(this).next('.answer').slideToggle();
      });

      $(".like-icon").click(function() {
        $(this).toggleClass("liked");
      });
    });
  </script>
</body>

</html>