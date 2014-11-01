<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/customCarousel.css" rel="stylesheet">
    </head>
    <header>
    <?php include("navbar.php"); ?>
    </header>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0"
                                              class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img src="image/chantier_01.jpg"
                                            alt="chantier"
                                            style="height=200px"></div>
                <div class="item"><img src="image/chantier_09.jpg"
                                            alt="chantier"
                                            class="peolpeCarouselImg"></div>
                <div class="item"><img src="image/chantier_02.jpg"
                                             alt="chantier"
                                             class="peolpeCarouselImg"></div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button"
                                                            data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Précédent</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button"
                                                            data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
        <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">        </script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>

