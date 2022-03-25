<?php
require_once "../models/post.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $postID= $_POST['postID'];
    $userID= $_POST['userID'];
    $comment= $_POST['comment'];
    if(!empty($postID) and !empty($userID) and !empty($comment)){
      $commented=addComment($postID,$userID,$comment);
    if($commented){
      header('Location:../pages/home.php');
    }
    }
    header('location: ../pages/home.php');
}