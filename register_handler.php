<?php
//Check if button register has been clicked
if (isset($_POST["btn_reg"])){
    //Start receiving data from the form
    $name=$_POST["name"];
    $residence=$_POST["residence"];
    $contact=$_POST["contact"];


    //Now connect to the database
    require_once "db_connection.php";

    $target_dir = "profile_pictures/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if(isset($_POST["btn_reg"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
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
            ////Prepare insert query to save the data
            ///
            $profile_picture_name = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
            $insertquery="INSERT INTO `dobis`(`id`, `name`, `residence`, `phone_number`, `profile_picture`) 
VALUES (null,'$name','$residence','$contact','$profile_picture_name')";

            //Finally save by use of mysql_query()
            $save=mysqli_query($connection, $insertquery);

            header("location:register.php");
        } else {
            echo "Sorry, there was an error uploading your profile picture.";
        }
    }






    //Check if the saving was successful
    if (isset($save)){
        header("location:register.php");
    }else{
        echo "User registration failed";
    }
}