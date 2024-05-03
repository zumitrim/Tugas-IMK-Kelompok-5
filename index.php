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

<body>
    <?php include('navigasi.php'); ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/daftargambarbimbel/banner1.jpg" alt="gambar 1" style="width:100%; height: 600px">
            </div>
            <div class="item">
                <img src="images/daftargambarbimbel/banner2.jpg" alt="gambar 2" style="width:100%; height: 600px">
            </div>
            <div class="item">
                <img src="images/daftargambarbimbel/banner3.jpg" alt="gambar 3" style="width:100%; height: 600px">
            </div>
            <div class="item">
                <img src="images/daftargambarbimbel/banner4.jpg" alt="gambar 4" style="width:100%; height: 600px">
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="jumbotron">
        <div class="container">
            <h1>EVENT BIMBA</h1>
            <div class="row margin-atas">
                <div class="col-sm-3 col-md-4">
                    <div class="thumbnail">
                        <img src="images/mtk.jpg" alt="Lomba Matematika">
                        <div class="caption">
                            <h3>Lomba Matematika</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4">
                    <div class="thumbnail">
                        <img src="images/binggris.jpg" alt="Lomba Bahasa Inggris">
                        <div class="caption">
                            <h3>Lomba Bahasa Inggris</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-4">
                    <div class="thumbnail">
                        <img src="images/outing/outing.jpg" alt="Outing Bogor">
                        <div class="caption">
                            <h3>Outing Bogor</h3>
                        </div>
                    </div>
                </div>
            </div>
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