<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OKAERI | Loading...</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <img src="image/loading.png" alt="">
</body>
</html>
<?php
    session_start();
    //connect to database
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type     = $_POST['type'];
    $notice = "Username or Password is Incorrect";
    $conn = mysqli_connect('localhost','root','','okaeridb');
    
    //write query
    if(!$conn){
        echo("connection Failed! ". mysqli_connect_error());
    }
    $sql = "SELECT * FROM accountstbl WHERE userName='$username' && userPassword='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if(($username=="" && $password=="")){
        echo"Enter Username and Password";
        header("refresh:2;url=index.php");
        session_destroy();
    }
    else if($row['userName']==$username && $row['userPassword']==$password && $row['type']=="customer"){
        $_SESSION['userID'] = $row['userID'];
        $_SESSION['userName'] = $row['userName'];
        $_SESSION['userPassword'] = $row['userPassword'];
        echo $row['userID']; 
        echo session_id();
        // header("refresh:5;url=index.php");
        header("location:userIndex.php");
    }
    else if($row['userName']==$username && $row['userPassword']==$password && $row['type']=="admin"){
        $_SESSION['userID'] = $row['userID'];
        $_SESSION['userName'] = $row['userName'];
        $_SESSION['userPassword'] = $row['userPassword'];
        echo $row['userID']; 
        echo session_id();
        // header("refresh:5;url=index.php");
        header("location:admin.php");
    }
    else{
        echo"Username or Password Incorrect";
        header("refresh:2;url=index.php");
        session_destroy();
    }
    
?>