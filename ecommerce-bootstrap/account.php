<!DOCTYPE html>
<?php
$conn = mysqli_connect('localhost','root','','okaeridb');
session_start();
$userid = $_SESSION['userID'];
echo $userid;
$sql = "SELECT * FROM accountdetailstbl WHERE userID = '$userid'";
$result = mysqli_query($conn,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$row = mysqli_fetch_array($result);

if($row['userID']==$userid){
    // userFname, userMname, userLname, userAddress, userContact, userAge
    $userFname = $row['userFname'];
    $userMname = $row['userMname'];
    $userLname = $row['userLname'];
    $userAddress = $row['userAddress'];
    $userContact = $row['userContact'];
    $userAge = $row['userAge'];
    echo '<html>
        // <h1>'.$userFname.'</h1>
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
                                <a class="dropdown-item" href="account.php">Welcome! <?php echo $userName ?></a>
                                <a class="dropdown-item" href="#">Orders</a>
                                <a class="dropdown-item" href="signout.php  ">Sign-out</a>
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
        </body>
        </html>';
}
?>