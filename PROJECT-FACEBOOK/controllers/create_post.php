<?php
require_once "../models/post.php";
// GET USER ID=====================================================

$userID=$_POST['userID'];
// ADD POST ATRIBUTE TO DATABASE ==================================
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $discription= $_POST['discription'];
    $imageName = $_FILES['image']['name'];
    $target='../images/'.$imageName;
    if(!(file_exists($target))){
        move_uploaded_file($_FILES['image']['tmp_name'],$target);
    }
    $_SESSION['discription']=false;
    $_SESSION['image']['name']=false;
    if(!empty($discription) or (!empty($imageName))){
        createPost($userID,$discription,$imageName);
    }
    header("Location:../pages/home.php?id=$userID");

}

// sin 
