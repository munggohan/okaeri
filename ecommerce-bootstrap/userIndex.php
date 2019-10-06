<?php
    session_start();
    $userID = $_SESSION['userID'];
    $userName = $_SESSION['userName'];
    $userPassword = $_SESSION['userPassword'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OKAERI | Home of Anime</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <!-- <?php $userName ?> -->
    <!--POPUP LOGIN-->
    <div id="whole_container" class="popup">
        <div class="container inside text-center">
        <form action="login.php" method="post"> 
            <div class="close" onClick="logpop()">
                x
            </div>
           <h4 class="">Log In</h4>
           <p class="note d-block m-auto"><?php echo "Put username incorrect or correct"?></p>
           <input class="form-control mr-sm-2 my-2" type="text" placeholder="Username" name="username">
           <input class="form-control mr-sm-2 my-2" type="password" placeholder="Password" name="password">
           <button class="btn my-2 my-sm-0" type="submit">Log-in</button>
        </form>
        </div>
    </div>
    <!--END OF POPUP LOGIN-->
    <header>
    <!--NAVIGATION-->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="image/OKAERI.png" alt=""></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manga <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Light Novels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Welcome! <?php echo $userName ?></a>
                            <a class="dropdown-item" href="#">Orders</a>
                            <a class="dropdown-item" href="signout.php">Sign-out</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!--END OF NAVIGATION-->
        <!--BANNER FOR PROMOS-->
        <section id="banner-sale">
            <div id="my-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                    <li data-target="#my-carousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="image/banner1.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/banner2.jpg" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!--END OF BANNER-->
    </header>
    <!--MANGA SECTION-->
    <section id="manga-list" class="container">
        <div class="row">
            <div class="jumbotron bg-transparent col-xl-9">
                <h4 class="">New Manga Volume Release</h4>
                <hr class="my-4">
                <p>Content</p>
            </div>
            <div class="jumbotron bg-pink col-xl-3">
                <h4 class="">Trending Manga</h4>
                <hr class="my-4">
                <ol>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
    </section>
    <!--END OF MANGA SECTION-->
    <!--LIGHT NOVEL SECTION-->
    <section class="container" id="light-novels-list">
            <div class="row">
                <div class="jumbotron bg-transparent col-xl-12">
                    <h4 class="">New Light Novel Volume Release</h4>
                    <hr class="my-4">
                    <p>Content</p>
                </div>
            </div>
    </section>
    <!--END OG LN SECTION-->
    <!--POPULAR SECTION-->
    <section class="container" id="popular-series">
            <div class="row">
                <div class="jumbotron bg-transparent col-xl-12">
                    <h4 class="">Popular Series</h4>
                    <hr class="my-4">
                    <p>Content</p>
                </div>
            </div>
    </section>
    <!--END OF POPULAR SECTION-->
    <footer class="">
        <div class="row">
            <img src="image/OKAERI.png" class="d-block m-auto py-2" alt="okaeri-logo">
        </div>
        <div class="container">
            <div class="row">
                <div class="jumbotron bg-transparent col-xl-4">
                    <h5 class="">FAQS</h5>
                    <ul>
                        <li><a href=""><i class="fa fa-question-circle"></i> About US</a></li>
                        <li><a href=""><i class="fa fa-truck"></i> Delivery or Shipping</a></li>
                    </ul>
                </div>
                <div class="jumbotron bg-transparent col-xl-4">
                    <h5 class="">In partners with:</h5>
                    <a href=""><img src="image/shueisha.png" class="d-block m-auto w-50" alt="shueisha-logo"></a>
                    <a href=""><img src="image/logo--kodansha_comics.svg" class="d-block m-auto w-50" alt="kodansha-logo"></a>
                    <a href=""><img src="image/1774-VIZMedia_ImprintSocialShare_NEW_600x314.png" class="d-block m-auto w-50" alt="viz-logo"></a>
                </div>
                <div class="jumbotron bg-transparent col-xl-4">
                    <h5 class="">FAQS</h5>
                    <ul>
                        <li><a href=""><i class="fa fa-question-circle"></i> About US</a></li>
                        <li><a href=""><i class="fa fa-truck"></i> Delivery or Shipping</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--SCRIPT-->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>