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
    //error_reporting(0);
    $currentDir = getcwd();
    $uploadDirectory = "/File/";
    
    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['PDF','pdf']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 


    $name=$_POST['filename'];
    $cap=$_POST['name'];


    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 10000000) {
            $errors[] = "This file is more than 10MB. Sorry, it has to be less than or equal to 10MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";

                   $sql= "INSERT INTO file(name,filename) VALUES ('$name','$cap')";
 
 
 $data = mysqli_query ($conn,$sql)or die(mysqli_error($conn));





            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    }


?>
<br><br><br><br><br><br>
<center><a href="File_upload2.php" ><button type="button" class="btn btn-primary">Back</button></a></center>
