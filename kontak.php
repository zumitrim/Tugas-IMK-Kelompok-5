<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Bimba MAKRTZ</title>
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Bimba MAKRTZ web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--// Meta tag Keywords -->
  <!-- css files -->
  <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
  <link rel="stylesheet" href="css/swipebox.css">
  <link rel="stylesheet" href="css/roma.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Tambahkan link ke font-awesome -->
  <!-- //css files -->
  <!-- online-fonts -->
  <link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <!-- //online-fonts -->
</head>

<style>
        /* Tambahkan gaya CSS di sini */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            max-width: 800px;
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
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .contact-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .contact-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .contact-form input[type="text"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .contact-form textarea {
            height: 100px;
        }
        .contact-form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .social-icons {
    margin-top: 10px;
}

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: #333;
        color: #fff;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        border-radius: 50%;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .social-icons a:hover {
        background-color: #555;
    }

    .social-icons i {
        font-size: 20px;
        vertical-align: middle;
    }
        </style>

<body>

  <?php include('napigasi.php'); ?>


  <header>
        <h1>Hubungi Kami</h1>
    </header>
    <main>
        <div class="contact-form">
            <form action="#" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Masukkan email Anda" required>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini" required></textarea>

                <input type="submit" value="Kirim Pesan">
            </form>
        </div>

       <br>
        <div class="social-icons">
                <a href="https://www.facebook.com/?locale=id_ID" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/?lang=id" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://id.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>

    </main>
    







    <?php include('footer.php'); ?>

  <!-- js-scripts -->
  <!-- js-files -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
  <!-- //js-files -->
  <!-- Baneer-js -->


  <!-- smooth scrolling -->
  <script src="js/SmoothScroll.min.js"></script>
  <!-- //smooth scrolling -->
  <!-- stats -->
  <script type="text/javascript" src="js/numscroller-1.0.js"></script>
  <!-- //stats -->
  <!-- moving-top scrolling -->
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
      /*
      	var defaults = {
      	containerID: 'toTop', // fading element id
      	containerHoverID: 'toTopHover', // fading element hover id
      	scrollSpeed: 1200,
      	easingType: 'linear' 
      	};
      */
      $().UItoTop({
        easingType: 'easeOutQuart'
      });
    });
  </script>
  <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //moving-top scrolling -->
  <!-- gallery popup -->
  <script src="js/jquery.swipebox.min.js"></script>
  <script type="text/javascript">
    jQuery(function($) {
      $(".swipebox").swipebox();
    });
  </script>
  <!-- //gallery popup -->
  <!--/script-->
  <script src="js/simplePlayer.js"></script>
  <script>
    $("document").ready(function() {
      $("#video").simplePlayer();
    });
  </script>
  <!-- //Baneer-js -->
  <!-- Calendar -->
  <script src="js/jquery-ui.js"></script>
  <script>
    $(function() {
      $("#datepicker").datepicker();
    });
  </script>
  <!-- //Calendar -->

  <!-- //js-scripts -->
</body>

</html>