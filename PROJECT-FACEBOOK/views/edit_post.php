<?php
require_once('../templates/header.php');
require_once('../models/post.php');
$postID = null;
isset($_GET['id']) ? $postID = $_GET['id'] : $postID = null;
if ($postID != null) {
    $post = getPost($postID);
}
?>


<div class="container w-50 d-flex align-center">
    <!-- Your code here -->
    <form action="../controllers/edit_post.php" enctype="multipart/form-data" method="post"  class="form-group h-50 w-100 mt-5 bg-primary p-5 rounded-3 text-center">

        <h1 class="text-center text-light mb-5 h1">Post</h1>
        <input type="hidden" name="postID" value="<?=$postID ?>">
        <label for="firstimage">
            <i class="fa fa-image" style="font-size:5rem;color:greenyellow"></i>
        </label>
        <input type="file" name="image" class="form-control " id="firstimage" style="display:none;">
        <textarea name="discription" class="form-control mt-2"placeholder="discription.."><?=$post['description']?></textarea>
        <div class="form-group d-grid mt-2">
            <input type="submit" class="btn btn-light" value="Update">
        </div>
    </form>
</div>
<?php

require_once('../templates/footer.php');
?>