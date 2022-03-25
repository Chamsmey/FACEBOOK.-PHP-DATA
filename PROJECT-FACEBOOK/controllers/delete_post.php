<?php
/**
 * Your code here
 */
require_once "../models/post.php";
$id=$_GET['id'];
removePost($id);
header('Location:../pages/home.php');