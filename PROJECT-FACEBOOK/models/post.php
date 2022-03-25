<?php

/**
 * Your code here
 */

require_once('database.php');
//create posts ==============================================================

function createPost($userID, $description, $img)
{
    global $db;
    $statement = $db->prepare("INSERT INTO posts (userID,description, image) VALUES(:userID,:description,:images)");
    $statement->execute(
        [':description' => $description, ':images' => $img, ':userID' => $userID]
    );
    return $statement->fetch();
};

//Update  post====================================================================
function updatePost($postID, $description, $img)
{
    global $db;
    $statement = $db->prepare("UPDATE posts SET description =:descrip ,image=:img WHERE postID=:postID");
    $statement->execute(
        [':descrip' => $description, ':img' => $img, ':postID' => $postID]
    );
    return $statement->fetch();
}

//get a post=====================================================================
function getPost($postID)
{
    global $db;
    $statement = $db->prepare('SELECT * FROM posts WHERE postID=:postID');
    $statement->execute([':postID' => $postID]);
    return $statement->fetch();
}
// getAllPosts===============================================================
function getAllPosts()
{
    global $db;
    $statement = $db->prepare("SELECT * FROM posts join users on posts.userID=users.userID order by postID desc");
    $statement->execute();
    return $statement->fetchAll();
}

//vemove post from============================================================

function removePost($postID)
{
    global $db;
    $statement = $db->prepare("DELETE FROM posts WHERE postID=:postID");
    $statement->execute([':postID' => $postID]);
    return $statement->fetch();
}



// FUNTION LIKE =============================================================



// GET ALL LIKE IN THE TABLE OF DATABASE===========================================
function getAllLike($postID){
    global $db;
    $statement = $db->prepare("SELECT * FROM likes WHERE postID = :postID");
    $statement->execute([':postID' => $postID]);
    return $statement->fetchAll();
}
// INSERT DATA INTO DATABASE=========================================================
function pushLike($userID,$postID)
{
    global $db;
    $statement = $db->prepare("INSERT INTO likes (userID,postID) VALUES(:userID,:postID)");
    $statement->execute(
        ['postID' => $postID,':userID'=>$userID]
    );
    return $statement->fetch();
};
// Unlike========================================================================
function removeLike($userID,$postID){
    global $db;
    $statement=$db->prepare("DELETE FROM likes WHERE postID=:postID AND userID=:userID");
    $statement->execute(
        ['postID' => $postID,':userID'=>$userID]
    );
    return $statement->fetch();
}
// get post
function getComments($postID)
{
    
    global $db;
    $statement = $db->prepare("SELECT * FROM comments WHERE postID=:postID");
    $statement->execute(
        [':postID' => $postID]
    );
    return $statement->fetchAll();
}

// add post =============================================================================
function addComment($postID, $userID,$comment)
{
    global $db;
    $statement = $db->prepare("INSERT INTO comments(postID,userID,comment) VALUES(:postID,:userID,:comment)");
    $statement->execute(
        [':postID' => $postID, ':userID' => $userID,':comment' => $comment]
    );
    return $statement->rowCount()>0;
}  





// User pofile=====================================================================


function getbyUser($userID){
    global $db;
    $statement= $db->prepare("SELECT * FROM posts JOIN users ON posts.userID = users.userID WHERE users.userID =:userID ORDER BY postID DESC");
    $statement->execute([':userID' => $userID]);
    return $statement->fetchAll();
}

function getUser(){
    global $db;
    $statement = $db->prepare("SELECT* FROM users");
    $statement->execute();
    return $statement->fetchAll();

}
function createAccount($firstName,$lastName,$date,$gender,$email,$passwords){
    global $db;
    $statement = $db->prepare("INSERT INTO users(firstName,lastName,date,gender,email,password) VALUES(:firstName,:lastName,:date,:gender,:email,:password)");
    $statement->execute(
        [
            ':firstName' => $firstName,
            ':lastName' => $lastName,
            ':date' => $date,
            ':gender' => $gender,
            ':email'=> $email,
            ':password' => $passwords,
        ]
    );
}


function getUsers($email,$password){
    global $db;
    $statement = $db->prepare("SELECT* FROM users where email=:email and password=:password");
    $statement->execute(
        [
            ':email'=>$email,
            ':password'=>$password
        ]
    );
    return $statement->fetch();
}