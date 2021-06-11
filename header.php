<?php 
session_start();
if (isset($_SESSION['login_user'])) {
  include 'header1.php';
}

else
{
include 'header2.php';
}
 ?>
