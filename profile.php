<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bimba MAKRTZ - Profil</title>
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

  .prof-section {
    max-width: 1000px;
    margin-bottom: 25px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 25px;
  }

  .prof-section h3 {
    margin-top: 0;
    color: #333;
    font-size: 24px;
  }

  .anggota-section {
    max-width: 1000px;
    margin-bottom: 25px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 25px;
    display: flow-root;
  }

  .answer {
    margin-top: 10px;
    color: #666;
  }

  .answer p {
    margin: 0;
    line-height: 1.6;
  }

  div.gallery {
    border: 1px solid #ccc;
  }

  div.gallery:hover {
    border: 1px solid #777;
  }

  div.gallery img {
    width: 100%;
    height: 100%;
  }

  div.desc {
    padding: 15px;
    text-align: center;
  }

  * {
    box-sizing: border-box;
  }

  .responsive {
    padding: 0 6px;
    margin-bottom: 20px;
    float: left;
    width: 24.99999%;
  }

  @media only screen and (max-width: 700px) {
    .responsive {
      width: 49.99999%;
      margin: 6px 0;
    }
  }

  @media only screen and (max-width: 500px) {
    .responsive {
      width: 100%;
    }
  }

  .clearfix:after {
    content: "";
    display: table;
    clear: both;
  }
</style>

<body>

  <?php include('navigasi.php'); ?>

  <br><br>
  <header>
    <h1>Profil</h1>
  </header>

  <main>
    <section class="prof-section">
      <h3>Tentang Bimbel MAKRTZ</h3><br>
      <p align="justify">
        Di Bimba MAKRTZ, kami membantu anak-anak usia TK belajar dengan cara yang menyenangkan! Kami melakukan banyak aktivitas seru seperti
        bermain, menyanyi, dan membuat kerajinan tangan. Melalui kegiatan-kegiatan ini, anak-anak dapat belajar hal-hal baru seperti angka,
        huruf, dan warna dengan cara yang menyenangkan. Guru-guru kami adalah teman baik anak-anak dan mereka selalu siap membantu. Mereka
        mengajarkan anak-anak cara berbicara, menghitung, dan melakukan banyak hal lainnya. Kami juga punya banyak mainan dan alat peraga
        yang menarik untuk membantu anak-anak memahami pelajaran dengan lebih mudah. Kami selalu ingin tahu bagaimana perkembangan anak-anak,
        jadi kami sering mengadakan permainan dan tes kecil untuk melihat apa yang sudah dipelajari anak-anak. Jika ada yang belum dimengerti,
        jangan khawatir, kami akan selalu membantu anak-anak belajar lebih baik. Kami juga senang berbicara dengan orangtua untuk berbagi
        informasi tentang anak-anak. Orangtua adalah teman terbaik kami dan kami selalu ingin bekerja sama dengan mereka untuk membantu anak-
        anak tumbuh dan belajar dengan baik. Jadi, di Bimba MAKRTZ, belajar itu menyenangkan dan kami selalu siap membantu anak-anak belajar
        dengan cara yang paling menyenangkan dan efektif!
      </p>
    </section>
    <section class="prof-section">
      <h3>Visi</h3><br>
      <p align="justify">
        Visi Bimba MAKRTZ adalah ingin membuat anak-anak merasa senang belajar dan menjadi pintar di sekolah. Kami ingin membantu anak-anak
        menjadi hebat dalam hal belajar dan juga menjadi baik dalam hal bersosialisasi dengan teman-teman mereka.
      </p>
    </section>
    <section class="prof-section">
      <h3>Misi</h3><br>
      <ul style="text-align: left; margin-left: 20px;">
        <li>Memberikan anak-anak pelajaran yang menyenangkan dan bermanfaat.</li>
        <li>Membantu anak-anak merasa percaya diri dan nyaman saat belajar.</li>
        <li>Menjadi teman baik bagi anak-anak dan orangtua mereka, serta membantu mereka dengan apa pun yang mereka butuhkan.</li>
        <li>Selalu mencari cara baru untuk membantu anak-anak belajar dengan lebih baik.</li>
      </ul>
    </section>
    <section class="prof-section">
      <h3>Sejarah</h3><br>
      <p align="justify">
        Bimba MAKRTZ dimulai pada tahun 2024 oleh sekelompok pendidik yang peduli tentang masa depan anak-anak. Mereka melihat adanya kebutuhan
        akan tempat belajar yang menyenangkan dan berkualitas bagi anak-anak di usia dini. Dengan tekad untuk memberikan solusi pendidikan yang
        inovatif, mereka memutuskan untuk membuka pusat bimbingan belajar pertama mereka di kota kecil mereka. Pada awalnya, Bimba MAKRTZ hanya
        sebuah ruangan kecil dengan beberapa permainan dan buku. Namun, semangat dan dedikasi para pendiri membuatnya berkembang pesat. Mereka
        bekerja keras untuk menciptakan lingkungan belajar yang menarik dan menstimulasi bagi anak-anak. Dengan waktu, reputasi Bimba MAKRTZ
        sebagai tempat belajar yang menyenangkan dan efektif mulai menyebar. Orangtua datang dengan harapan melihat anak-anak mereka berkembang
        dan menjadi lebih pintar. Anak-anak datang dengan senang hati, menantikan kegiatan belajar yang menyenangkan setiap hari. Dengan
        berjalannya waktu, Bimba MAKRTZ terus berkembang. Mereka membuka cabang-cabang baru di berbagai kota dan terus memperluas jangkauan
        layanan mereka. Meskipun telah tumbuh besar, Bimba MAKRTZ tetap mempertahankan nilai-nilai awalnya yang berfokus pada kebahagiaan dan
        kesuksesan anak-anak. Hari ini, Bimba MAKRTZ telah menjadi salah satu lembaga bimbingan belajar terkemuka di negara ini. Mereka telah
        membantu ribuan anak-anak meraih prestasi di sekolah dan menjadi pribadi yang lebih percaya diri. Namun, mereka tidak berhenti di situ.
        Bimba MAKRTZ terus berinovasi dan berusaha memberikan yang terbaik bagi generasi mendatang.
      </p>
    </section>
    <section class="anggota-section">
      <h3>Anggota</h3><br>
      <div class="responsive">
        <div class="gallery">
          <img src="images/anggota/gowpur.jpg" alt="Gowpur" width="600" height="400">
          <div class="desc">Akhsyanal Gowpur</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img src="images/anggota/zulfahmi.jpg" alt="Zulfahmi" width="600" height="400">
          <div class="desc">Zulfahmi Trimahardika</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img src="images/anggota/hanggoro.jpg" alt="Hanggoro" width="600" height="400">
          <div class="desc">RB Hanggoro Panji H</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img src="images/anggota/tatu.jpg" alt="Tatu" width="600" height="400">
          <div class="desc">Tatu Mariam Sari</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img src="images/anggota/zakaria.jpg" alt="Zakaria" width="600" height="400">
          <div class="desc">Muhamad Zakaria Saptono</div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img src="images/anggota/daffa.jpg" alt="Daffa" width="600" height="400">
          <div class="desc">Kuntadi Daffa Fais</div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
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