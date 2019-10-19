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
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admincustom.css">
</head>
<body>
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
                        <a class="nav-link" href="manga.php">Manga <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Light Novels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Orders</a>
                            <a class="dropdown-item" href="#" onClick="logpop()">Log-in</a>
                            <a class="dropdown-item" href="register.php">Sign-up</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--END OF NAVIGATION-->

    </header>
    <section id="additem">
        <div class="container mt-4">
            <div class="row">
                <div class="jumbotron bg-transparent w-100">
                    <h1>Add New Item</h1>
                    <hr class="my-4">
                    <form action="upload.php" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="input-group mb-3 col-xl-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="my-addon">Product Code</span>
                                </div>
                                <input class="form-control" type="text" name="" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                            <div class="input-group mb-3 col-xl-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="my-addon">Product Name</span>
                                </div>
                                <input class="form-control" type="text" name="" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                            <div class="input-group mb-3 col-xl-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="my-addon">Author</span>
                                </div>
                                <input class="form-control" type="text" name="" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                            <div class="input-group mb-3 col-xl-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="my-addon">Publisher</span>
                                </div>
                                <input class="form-control" type="text" name="" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                        </div>

                        <div class="row">
                        <div class="input-group mb-3 col-xl-4">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Type</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                  <option selected>Manga</option>
                                  <option value="1">Light Novel</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-xl-4">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Language</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                  <option selected>English</option>
                                  <option value="1">Japanese</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-xl-4">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Date Recieved</label>
                                </div>
                                <input class="form-control" type="date">
                            </div>
                        </div>

                        <div class="row">
                            <div class="jumbotron bg-transparent w-100">
                                <h5>Genre</h5>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Action">
                                            <label class="custom-control-label" for="Action">Action</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Adventure">
                                            <label class="custom-control-label" for="Adventure">Adventure</label>
                                        </div>
                                    </div>
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Horror">
                                            <label class="custom-control-label" for="Horror">Horror</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Thriller">
                                            <label class="custom-control-label" for="Thriller">Thriller</label>
                                        </div>
                                    </div>
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Mystery">
                                            <label class="custom-control-label" for="Mystery">Mystery</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Yuri">
                                            <label class="custom-control-label" for="Yuri">Yuri</label>
                                        </div>
                                    </div>
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Yaoi">
                                            <label class="custom-control-label" for="Yaoi">Yaoi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="Fantasy">
                                            <label class="custom-control-label" for="Fantasy">Fantasy</label>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row">
                            <label for="">Upload front cover photo:</label>
                            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                            <button type="submit" class="btn btn-outline-success">Add Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="table">
        <div class="container">
            <table class="table table-dark text-center">
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Language</th>
                        <th>Type</th>
                        <th>Date Recieved</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conn = mysqli_connect('localhost','root','','okaeridb');
                        $sql = "SELECT productCode, productName, productAuthor, productPublisher,
                        productLanguage, productType,productDateReceived FROM okaeriitems";
                        $result = mysqli_query($conn,$sql);
                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){
                              echo '<tr><td><center>' .$row["productCode"]. '</center></td>';
                              echo '<td><center>' .$row["productName"]. '</center></td>';
                              echo '<td><center>' .$row["productAuthor"]. '</div></center></td>';
                              echo '<td><center>' .$row["productPublisher"]. '</div> </center></td>';
                              echo '<td><center>' .$row["productLanguage"]. '</center></td>';
                              echo '<td><center>' .$row["productType"]. '</div> </center></td>';
                              echo '<td><center>' .$row["productDateReceived"]. '</center></td><tr>';
                            }}
                    ?>
                </tbody>
            </table>
        </div>
    </section>
        <!--SCRIPT-->
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>