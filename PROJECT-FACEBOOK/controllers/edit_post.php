<?php
require_once('../models/post.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postID = $_POST['postID'];
    $description = $_POST['discription'];
    $imageName = $_FILES['image']['name'];
    $ImageName = $imageName;
    $target = '../images/' . $ImageName;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    if (!empty($postID) and !empty($description) or !empty($imageName)) {
        updatePost($postID, $description, $ImageName );
        header('Location:../pages/home.php');
    }
    // header('location: ../index.php'); 
}
