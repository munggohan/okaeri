<?php
session_start();
$conn = mysqli_connect('localhost','root','','okaeridb');
$fname = $_POST['fname'];
$mname  = $_POST['mname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$userID;
if(!mysqli_query($conn,"SELECT * FROM `accountstbl` WHERE userName = '$username'") === true){
if(mysqli_query($conn,"INSERT INTO `accountstbl` VALUES (null, '$username', '$password')")===true){
    echo "success 1";
    if ($result2 = mysqli_query($conn,"SELECT * from `accountstbl` where userName = '$username' && 
    userPassword = '$password'")){
        echo "success 2";
        $row = mysqli_fetch_array($result2);
        if($row['userName']==$username && $row['userPassword']==$password){
            echo "success 3";
            $userID = $row['userID'];
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['userName'] = $row['userName'];
            $_SESSION['userPassword'] = $row['userPassword'];
        }else{
            echo "error 3";
        }
        $detailsSql = "INSERT INTO accountdetailstbl (userID, userFname, userMname, userLname, userAddress, userContact, userAge)
        VALUES ($userID, $fname, $mname, $lname, $address, $contact, $age)";
        if (mysqli_query($conn,"INSERT INTO `accountdetailstbl` (userID, userFname, userMname, userLname, userAddress, userContact, userAge)
        VALUES ('$userID', '$fname', '$mname', '$lname', '$address', '$contact', '$age')")){
            echo "success 4";
            header("location:userIndex.php");
        }else{
            echo "error 4";
        }
    }else{
        echo "error 2";
    }
}else{
    echo "error 1";
}
}else{
    echo "<script type='text/javascript'>alert('username already taken')</script>";
    header("refresh:.1;url=register.php");
}



?>