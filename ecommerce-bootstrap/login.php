<?php
    session_start();
    //connect to database
    $username = $_POST['username'];
    $password = $_POST['password'];
    $notice = "Username or Password is Incorrect";
    $conn = mysqli_connect('localhost','root','','okaeridb');
    //write query
    if(!$conn){
        echo("connection Failed! ". mysqli_connect_error());
    }
    $sql = "SELECT * FROM accountstbl WHERE userName='$username' && userPassword='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row['userName']==$username && $row['userPassword']==$password){
        $_SESSION['userID'] = $row['userID'];
        $_SESSION['userName'] = $row['userName'];
        $_SESSION['userPassword'] = $row['userPassword'];
        echo $row['userID']; 
        echo session_id();
        // header("refresh:5;url=index.php");
        header("location:userIndex.php");
    }
    else{
    }
    
?>