<!--‡====================================================================‡-->
<!--‡===========================‡Developement‡===========================‡-->
<!--‡====================================================================‡-->

<html>
    <head>
     <title>Accueil - Taste</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="./styles/styles.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" type="image/x-icon" href="/taste/images/fav.ico" />
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    </head>
    <body class="page-1">
        <!---------------------------------------------------------------->
        <!-----------------------------Loader----------------------------->
        <!---------------------------------------------------------------->
        <div class="loader"></div>
        <?php include('./function/header.php'); ?>
            <div id="container">
                <div>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="/taste/images/back1.jpg" alt="1">
                          <div class="carousel-caption">
                            <img class="logo" src="./images/taste.png" id="tasteLogo" alt="Taste"/>
                          </div>
                        </div>

                        <div class="item">
                          <img src="/taste/images/back2.jpg" alt="2">
                          <div class="carousel-caption">
                            <img class="logo" src="./images/taste.png" id="tasteLogo" alt="Taste"/>
                          </div>
                        </div>

                        <div class="item">
                          <img src="/taste/images/back4.jpg" alt="3">
                          <div class="carousel-caption">
                            <img class="logo" src="./images/taste.png" id="tasteLogo" alt="Taste"/>
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
                <!---------------------------------------------------------------->
                <div>
                    <p>
                    </p>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/taste/js/jquery-3.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/taste/js/bootstrap.min.js"></script>
    </body>
</html>