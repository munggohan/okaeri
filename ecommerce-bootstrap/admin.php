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
    <link rel="stylesheet" href="css/custom.css">
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
                        <span class="nav-link" href="manga.php">Welcome, Admin <?php echo $userName?> <span class="sr-only">(current)</span></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signout.php">Log out</a>
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
                                <input class="form-control" type="text" name="productCode" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                            <div class="input-group mb-3 col-xl-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="my-addon">Product Name</span>
                                </div>
                                <input class="form-control" type="text" name="productName" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                            <div class="input-group mb-3 col-xl-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="my-addon">Author</span>
                                </div>
                                <input class="form-control" type="text" name="productAuthor" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                            <div class="input-group mb-3 col-xl-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="my-addon">Publisher</span>
                                </div>
                                <input class="form-control" type="text" name="productPublisher" placeholder="Recipient's text" aria-label="Recipient's " aria-describedby="my-addon">
                            </div>
                        </div>

                        <div class="row">
                        <div class="input-group mb-3 col-xl-4">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Type</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="productType">
                                  <option selected>Manga</option>
                                  <option value="1">Light Novel</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-xl-4">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Language</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="productLanguage">
                                  <option selected>English</option>
                                  <option value="1">Japanese</option>
                                </select>
                            </div>
                            <div class="input-group mb-3 col-xl-4">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Date Recieved</label>
                                </div>
                                <input class="form-control" type="date" name="productDateReceived">
                            </div>
                        </div>

                        <div class="row">
                            <div class="jumbotron bg-transparent w-100">
                                <h5>Genre</h5>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Action" value="Action">
                                            <label class="custom-control-label" for="Action">Action</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Adventure" value="Adventure">
                                            <label class="custom-control-label" for="Adventure">Adventure</label>
                                        </div>
                                    </div>
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Horror" value="Horror">
                                            <label class="custom-control-label" for="Horror">Horror</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Thriller" value="Thriller">
                                            <label class="custom-control-label" for="Thriller">Thriller</label>
                                        </div>
                                    </div>
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Mystery" value="Mystery">
                                            <label class="custom-control-label" for="Mystery">Mystery</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Yuri" value="Yuri">
                                            <label class="custom-control-label" for="Yuri">Yuri</label>
                                        </div>
                                    </div>
                                    <div class="genre-container col-xl-3">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Yaoi" value="Yaoi">
                                            <label class="custom-control-label" for="Yaoi">Yaoi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" name="genre[]" id="Fantasy" value="Fantasy">
                                            <label class="custom-control-label" for="Fantasy">Fantasy</label>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                        <div class="row">
                            <label for="">Upload front cover photo:</label>
                            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
                            <!-- <input type="submit" value="Upload Image" name="submit"> -->
                            <button type="submit" class="btn btn-outline-success" name="submit">Add Item</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- POPUP EDIT -->
    <div id="whole_container" class="popup">
        <div class="container inside text-center">
        <form action="login.php" method="post"> 
            <div class="close" onClick="logpop()">
                x
            </div>
            <h4 class="">Edit Details</h4>
            <hr class="w-100">
            <p class="note d-block m-auto"><br></p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="my-addon">Item Code:</span>
                </div>
                <input class="form-control" type="text" name="" disabled id="itemcode" aria-label="Recipient's " aria-describedby="my-addon">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="my-addon">Product Code:</span>
                </div>
                <input class="form-control" type="text" name="" id="p_code" aria-label="Recipient's " aria-describedby="my-addon">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="my-addon">Product Name:</span>
                </div>
                <input class="form-control" type="text" name="" id="p_name" aria-label="Recipient's " aria-describedby="my-addon">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="my-addon">Author</span>
                </div>
                <input class="form-control" type="text" name="" id="author" aria-label="Recipient's " aria-describedby="my-addon">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="my-addon">Publisher:</span>
                </div>
                <input class="form-control" type="text" name="" id="publisher" aria-label="Recipient's " aria-describedby="my-addon">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="my-addon">Language</span>
                </div>
                <input class="form-control" type="text" name="" id="language" aria-label="Recipient's " aria-describedby="my-addon">
            </div>
        </form>
        </div>
    </div>
    <!-- POPUP END -->
    <section id="table">
        <div class="container">
            <table class="table table-dark" id="mytable">
                <thead>
                    <tr>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Language</th>
                        <th>Type</th>
                        <th>Date Recieved</th>
                        <th>Edit</th>
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
                                echo '<tr><td>' .$row["productCode"]. '</td>';
                                echo '<td>' .$row["productName"]. '</td>';
                                echo '<td>' .$row["productAuthor"]. '</div></td>';
                                echo '<td>' .$row["productPublisher"]. '</div></td>';
                                echo '<td>' .$row["productLanguage"]. '</td>';
                                echo '<td>' .$row["productType"]. '</div></td>';
                                echo '<td>' .$row["productDateReceived"]. '</td>';
                                echo '<td><button class="btn btn-info" id="pop" onclick="logpop()"><i class="fa fa-edit"></i></button></td><tr>';
                            }}
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    
    <script>
        var table = document.getElementById('mytable');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         //rIndex = this.rowIndex;
                         //alert(this.cells[1].innerHTML);
                         
                        document.getElementById('itemcode').value = this.cells[0].innerHTML;
                        document.getElementById("p_name").value = this.cells[1].innerHTML;
                        document.getElementById("author").value = this.cells[2].innerHTML;
                        document.getElementById("publisher").value = this.cells[3].innerHTML;
                        document.getElementById("language").value = this.cells[4].innerHTML;
                    };
                }
        
    </script>
        <!--SCRIPT-->
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>