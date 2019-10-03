<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up to OKAERI!</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/regcustom.css">
</head>
<body>
     <!--POPUP LOGIN-->
     <div id="whole_container" class="popup">
        <div class="container inside text-center">
            <div class="close" onClick="logpop()">
                x
            </div>
           <h4 class="">Log In</h4>
           <p class="note d-block m-auto"><?php echo "Put username incorrect or correct"?></p>
           <input class="form-control mr-sm-2 my-2" type="text" placeholder="Username">
           <input class="form-control mr-sm-2 my-2" type="password" placeholder="Password">
           <button class="btn my-2 my-sm-0" type="submit">Search</button>
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
                            <a class="dropdown-item" href="#">Orders</a>
                            <a class="dropdown-item l_in" href="#" onClick="logpop()">Log In</a>
                            <a class="dropdown-item s_out" href="#">Sign out</a>
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
    </header>
    <section id="register-container">
        <div class="background">
            <div class="container bg-light">
<!--*******************FORM REGISTER*************************-->
                <h4 class="text-center">Register to OKAERI!</h4>
                <form action="regFunction.php" method="post">
                    <label id="l_fname" class="l_fname" for="fname"></label>
                    <input id = "i_fname" class="form-control mr-sm-2 my-2 i_fname" type="text" placeholder="First Name" name="fname">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Middle Name" name="mname">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Last Name" name="lname">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Age" name="age">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Contact Number" name="contact">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Address" name="address">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Email Adress" name="email">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Verify Email Adress">
                    <input class="form-control mr-sm-2 my-2" type="text" placeholder="Username" name="username">
                    <input class="form-control mr-sm-2 my-2" type="password" placeholder="Password" name="password">
                    <input class="form-control mr-sm-2 my-2" type="password" placeholder="Verify Password">
                    <button onClick="validation()" class="btn btn-outline-warning w-100 my-2 my-sm-0 text-dark" type="submit">Sign up!</button>
                </form>
            </div>
        </div>
    </section>
    <!--SCRIPT-->
    <script src="js/register.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>