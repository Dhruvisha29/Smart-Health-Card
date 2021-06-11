<?php
$conn = mysqli_connect("localhost", "root", "", "iihealth");
session_start();
if(isset($_SESSION['login_user_id']) && !empty($_SESSION['login_user_id'])){	
	$userid = $_SESSION['login_user_id'];
}
$qq = "SELECT * FROM user_detail where role=3 ";
    $rr = mysqli_query($conn,$qq);
     $roo = mysqli_fetch_assoc($rr);
     $_REQUEST['master_id'] = $roo['user_id'];

     $qq1 = "SELECT * FROM user_detail where role=2 ";
    $rr1 = mysqli_query($conn,$qq1);
     $roo1 = mysqli_fetch_assoc($rr1);
     $_REQUEST['store_id'] = $roo1['user_id'];

 $qq2 = "SELECT * FROM question_detail ";
    $rr2 = mysqli_query($conn,$qq2);
     $roo2 = mysqli_fetch_assoc($rr2);
     $_REQUEST['que_id'] = $roo2['question_id'];

        $qq3 = "SELECT * FROM user_detail where role=1 ";
    $rr3 = mysqli_query($conn,$qq3);
     $roo3 = mysqli_fetch_assoc($rr3);
     $_REQUEST['login_user_id'] = $roo3['user_id'];
     
      $qq4 = "SELECT * FROM video_detail ";
    $rr4 = mysqli_query($conn,$qq4);
     $roo4 = mysqli_fetch_assoc($rr4);
     $_SESSION['video_id'] = $roo4['video_id'];

      $qq5 = "SELECT * FROM book_detail ";
    $rr5 = mysqli_query($conn,$qq5);
     $roo5 = mysqli_fetch_assoc($rr5);
     $_SESSION['book_id'] = $roo5['book_id'];

       $qq6 = "SELECT * FROM answer_detail ";
    $rr6 = mysqli_query($conn,$qq6);
     $roo6 = mysqli_fetch_assoc($rr6);
     $_SESSION['ans_id'] = $roo6['answer_id'];
?>