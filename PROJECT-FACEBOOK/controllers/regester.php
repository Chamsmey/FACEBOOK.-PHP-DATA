<?php
require_once('../models/post.php');
$users = getUser();
session_start();
// $_SESSION['firstName']=false;
// $_SESSION['lastName']=false;
// $_SESSION['gender']=false;
// $_SESSION['date']=false;
// $_SESSION['email']=false;
// $_SESSION['password']=false;
// if($_SESIONS['firstName'])
$isUserCreated = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {}
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) && !empty($password)) {
        foreach ($users as $user) {

            if ($user['email'] == $email and $user['password'] == $password) {
                $isUserCreated = true;
            }
        }
    
        if ($isUserCreated==false) {
            createAccount($firstName,$lastName,$date,$gender,$email,$password);
           $user_account= getUsers($email,$password);
           $userID= $user_account['userID'];
            echo $userID;
            header("Location:../pages/home.php?id=$userID");
        }else{
            header('Location:../user_account/create_account.php');
    
    }

}