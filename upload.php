<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('head.php');session_start();include('check_login.php');error_reporting(0);?>
</head>
<body>
<?php include "admin_header.php";?>

</br>
</br>
</body>
</html>




<?php
include('conn.php');
$target_dir = "Image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



$name=$_POST['filename'];
$cap=$_POST['name'];


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "</br>File is an image - " . $check["mime"] . ".</br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.</br>";
        $uploadOk = 0;
    }
}

// Check if file already exists
//if (file_exists($target_file)) {
  //  echo "Sorry, file already exists.</br>";
    //$uploadOk = 0;
//}

// Check file size for logo
//if ($_FILES["fileToUpload"]["size"] > 50000) {
   // echo "Sorry, your file is too large.</br>";
 //   $uploadOk = 0;
//}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.</br>";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.</br>";
    
    
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
        
        //uploading name into database
        $sql= "INSERT INTO img(name,caption) VALUES ('$name','$cap')";
 
 
 $data = mysqli_query ($conn,$sql)or die(mysqli_error($conn)); 
        
        
        
        
        
    } else {
        echo "Sorry, there was an error uploading your file.</br>";
    }
}
?>
<br><br><br><br><br><br>
<center><a href="File_upload.php" ><button type="button" class="btn btn-primary">Back</button></a></center>
