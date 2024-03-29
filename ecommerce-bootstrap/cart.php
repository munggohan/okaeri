<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/fontawesome-free-5.10.1-web/css/all.css">
    <title>Cart</title>
</head>
<body>
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
                        <a class="dropdown-item" href="#">Orders</a>
                        <a class="dropdown-item" href="#">Log In</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <section>
        <div class="container-fluid bg-light p-4 ">
            <a href="" class=""><i class="fa fa-caret-left text-dark"></i> Continue Shopping</a> 
        </div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-xl-8">
                    <div class="jumbotron bg-transparent">
                        <div class="row">
                            <div class="col-xl-10 pl-0">
                                <h3>Your Cart()</h3>
                            </div>
                            <div class="col-xl-2">
                                <button class="btn btn-warning text-white" type="button" value="">CLEAR</button>
                            </div>
                        </div>
                        <hr class="my-4 text-dark">
                        <div class="row">
                            <div class="col-xl-3 border p-2">
                                <img src="images/1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-xl-9">
                                <div class="p-name">
                                    <div class="row">
                                        <div class="col-9">
                                            <h6>Product Name:</h6> 
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-danger"><h6>Remove</h6></button>
                                        </div>
                                    </div>
                                    <h6>Price: </h6>
                                    <h6 class="pr-1">Quantity: </h6>
                                    <h6>Order Number: </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 bg-dark text-white">
                    <div class="jumbotron bg-transparent pb-0">
                        <h3 class="text-center">Summary</h3>
                        <hr class="my-4 bg-white">
                        <div class="">
                            <div class="row">
                                <div class="col-xl-8">
                                    <h5>Subtotal: </h5>
                                </div>
                                <div class="col-xl-4">
                                    <h5>P150.00</h5>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 bg-white">
                        <div class="">
                            <div class="row">
                                <div class="col-xl-8">
                                    <h5>Shipping Fee: </h5>
                                </div>
                                <div class="col-xl-4">
                                    <h5>P150.00</h5>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 bg-white">
                        <div class="">
                            <div class="row">
                                <div class="col-xl-8">
                                    <h5>Total: </h5>
                                </div>
                                <div class="col-xl-4">
                                    <h5>P150.00</h5>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4 bg-white">
                        <div class="text-center">
                            <button class="btn btn-success px-5">CHECKOUT</button>
                        </div>
                        <div class="text-center">
                            <h5 class="lead">or</h5>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-info">CHECKOUT <br> VIA DEBIT CARD</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-light bg-dark">
        <div class="text-center">
             <img src="image/OKAERI.png" class="d-block m-auto py-2" alt="okaeri-logo">
        </div>
        <div class="container">
            <div class="row">
                <div class="jumbotron bg-transparent col-xl-6">
                    <h5 class="text-center">FAQS</h5>
                    <ul>
                        <li><a href=""><i class="fa fa-question-circle"></i> About US</a></li>
                        <li><a href=""><i class="fa fa-truck"></i> Delivery or Shipping</a></li>
                        <li><a href=""><i class="fa fa-phone"></i> Contact Us</a></li>
                    </ul>
                </div>
                <div class="jumbotron bg-transparent col-xl-6">
                    <h5 class="text-center">In partners with:</h5>
                    <div class="d-flex">
                        <a href=""><img src="image/shueisha.png" class="d-block m-auto w-50" alt="shueisha-logo"></a>
                        <a href=""><img src="image/logo--kodansha_comics.svg" class="d-block m-auto w-50" alt="kodansha-logo"></a>
                        <a href=""><img src="image/1774-VIZMedia_ImprintSocialShare_NEW_600x314.png" class="d-block m-auto w-50" alt="viz-logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>