<?php
include 'config.php';
$name="user";
$allowedExts = array("pdf");
$temp = explode(".", $_FILES['pdfs']['name']);
$extension = end($temp);
$upload_pdf=$_FILES['pdfs']['name'];
move_uploaded_file($_FILES['pdfs']['tmp_name'],"upload/" . $_FILES['pdfs']['name']);
$sql=mysqli_query($conn,"INSERT INTO `pdf`(`paths`)VALUES('".$_FILES["pdfs"]["name"]."',$name)");
if($sql){
    echo "Data Submit Successful";
}
else{
    echo "Data Submit Error!!";
}
?>