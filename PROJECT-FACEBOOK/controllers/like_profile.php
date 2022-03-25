<?php

require_once('../models/post.php');
$listOfLike=getAllLike($_GET['id']);
$isHave=true;
// check if user has been like befor=========================================
foreach($listOfLike as $like){
    if ($like['userID']==$_GET['userID']){
        $isHave=false;
    }
}
if($isHave){
    pushLike($_GET['userID'], $_GET['id']);
    header('Location:../views/user_account.php');
}
else{
    removeLike($_GET['userID'], $_GET['id']);
    header('Location:../views/user_account.php');
}
?>