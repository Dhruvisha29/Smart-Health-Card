<?php 
include 'config.php';
$name="nihar";
$target_path = "upload/";
$target_path1 = $target_path .basename( $_FILES['pdfs']['name']); 

if(move_uploaded_file($_FILES['pdfs']['tmp_name'], $target_path1)) {
    echo "The file ".basename( $_FILES['pdfs']['name']). 
    " has been uploaded";
    $data = mysqli_query($conn,"INSERT INTO `pdf`(`paths`) VALUES ('".$_FILES["pdfs"]["name"]."',$name)");
} else{
    echo "There was an error uploading the file, please try again!";
}


