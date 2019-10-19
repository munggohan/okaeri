<?php
    $conn = mysqli_connect('localhost','root','','okaeridb');
    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productAuthor = $_POST['productAuthor'];
    $productPublisher = $_POST['productPublisher'];
    $productType = $_POST['productType'];
    $productLanguage = $_POST['productLanguage'];
    $productDateReceived = $_POST['productDateReceived'];
    $pgenre = $_POST['genre'];
    $productGenre = '';
    $fileToUpload = $_FILES['fileToUpload']['name'];
    foreach($pgenre as $genre){
        if($productGenre==''){
            $productGenre = $genre;
        }else{
            $productGenre = $productGenre.','.$genre;
        }
    }
    echo $productCode;
    echo $productName;
    echo $productAuthor;
    echo $productPublisher;
    echo $productType;
    echo $productLanguage;
    echo $productDateReceived;
    echo $productGenre;
    if (mysqli_query($conn,"INSERT INTO `okaeriitems` (productCode, productName, productAuthor, productPublisher, productType, productLanguage,
        productDateReceived, productGenre, productImage, productStock) VALUES ('$productCode', '$productName', '$productAuthor', '$productPublisher', '$productType', '$productLanguage',
        '$productDateReceived', '$productGenre', 'product_images/".$fileToUpload."', '0')")){
        echo "success 4";
        $target_dir = "C:/xampp/htdocs/okaeri/ecommerce-bootstrap/product_images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }else{
            echo 'error in uploading';
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $message = 'File Successfully Added';
                echo "<script type='text/javascript'>alert('$message');</script>";
                
                header("location:admin.php");
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        echo "error 4";
    }

?>