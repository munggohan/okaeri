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
        <h1>'.$userFname.'</h1>
        </html>';
}
?>