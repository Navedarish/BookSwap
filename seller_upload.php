<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'sellerdb.php';
    $bookname = $_POST["bookname"];
    $sellername = $_POST["sellername"];
    $email = $_POST["email"];
	$phone = $_POST["phone"];
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
    echo "File is an image - " . $check["submit"] . ".";
    $uploadOk = 1;
  } 
  else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  $sql = "INSERT INTO `seller`(`bookimage`, `bookname`, `seller name`, `Email`, `Phone`) VALUES ('$image','$bookname','$sellername','$email','','$phone'))";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
			header("location: 01.mainpage.php");
			
        }
    }
    else{
        $showError = "data not sufficeint";
    }
}    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Book Upload</title>
    <link rel="stylesheet" href="seller_upload.css">
</head>
<body>
    <br>
    <br>
    <div class="container">
        <form id="book_upload-form" action="seller_upload" method="post">
            <h1>Upload your book details!</h1>
            <br>
            <br>
            <div class="input-group">
                <label for="bookname">Book Name: </label>
                <input type="text" id="bookname" name="bookname" required>
            </div>
            <div class="input-group">
                <label for="sellername">Seller Name: </label>
                <input type="text" id="sellername" name="sellername" required>
            </div>
            <div class="input-group">
                <label for="email">Email ID:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label>Phone Number:</label> 
                <input type="phone" name="phone" value="" required>
    
            
              </div>
              <div class="input-group">
                <label>Price:</label> 
                <input type="price" name="price" value="" required>
    
            
              </div>
           
            
              <form action="upload.php" method="post" enctype="multipart/form-data">
              Select image to upload:
             <input type="file" name="image" id="fileToUpload">
            
             </form>
                  
            <div>
            <button type="submit" class="btn" name="submit">Submit</button>
        </div>
        
    </div>
</body>
</html>
