<div class="container">
    <!----test---->

    <!-- Your code here -->

    <?php
    require_once('../models/post.php');
    $allPost = getAllPosts();
    foreach ($allPost as $post) :
        $convertDate = date_create($post['date']);
    ?>
        <div class="card mt-4">
            <div class="card-header pb-0">
                <div class="row d-flex">
                    <div class="col col-2 d-flex">
                        <div class="image-profile pb-1 pb-1 bg-danger rounded-circle">
                            <img src="../images/<?=$post['profile']?>" class="w-100 position-static image-profile rounded-circle" alt="">
                        </div>

                    </div>

                    <div class="col col-5">
                        <div class="row">
                            
                            <p class="h5 text-start"><?=$post['firstName'].' '?> <?=$post['lastName']?> </p>
                        </div>
                        <div class="row">
                            <?php
                            $date = date_create($post['date']);
                            ?>
                            <p class="text text-start lext-thin"><?= date_format($date,'\ D, j, M,Y'); ?></p>

                        </div>
                    </div> 
            
                    <!-- <div class="col col-3"></div> -->

                    <div class="col col-2"></div>
                    <div class="col col-3 pb-0">
                        <button type="button" class="icon-edit btn btn-primary ms-10" data-bs-toggle="modal" data-bs-target="#myModal<?= $post['postID']; ?>"><i class="bi bi-pencil-square"></i></button>
                        <div class="modal" id="myModal<?= $post['postID']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Post</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php
                                        getPost($post['postID']);
                                        ?>
                                        <form action="../controllers/edit_post.php" enctype="multipart/form-data" method="post" class="form-group h-50 w-100 mt-5 bg-primary p-5 rounded-3 text-center">
                                            <h1 class="text-center text-light mb-5 h1">Post</h1>
                                            <input type="hidden" name="postID" value="<?=$post['postID']?>">
                                            <label for="firstimage">
                                                <i class="fa fa-image" style="font-size:5rem;color:greenyellow"></i>
                                            </label>
                                            <input type="file" name="image" class="form-control " id="firstimage" style="display:none;">
                                            <textarea name="discription" class="form-control mt-2" placeholder="discription.."></textarea>
                                            <div class="form-group d-grid mt-2">
                                                <input type="submit" class="btn btn-light" value="Update">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="../controllers/delete_post.php?id=<?= $post['postID']; ?>">
                            <div class="btn btn-danger ms-3"><i class="fa fa-trash-o"></i></div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <p class='discription'><?= $post['description'] ?></p>

                </div>
                <div class="row class=" rounded float-start"">
                    <img src="../images/<?= $post['image'] ?>" class="rounded mx-auto d-block" alt="">
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <?php
                   
                    $likeList = getAllLike($post['postID']);
                    ?>
                    <div class="col col-3">
                        <div class="btn-group">
                            <a href="../controllers/like_post.php?id=<?= $post['postID'] ?> & userID=<?= $post['userID'] ?> " class="btn btn-primary">
                                <i class="fa fa-thumbs-up btn btn-primary"></i>
                            </a>
                            <i class="btn btn-primary"><?= count($likeList); ?></i>

                        </div>
                    </div>  
                    <div class="col col-8 ps-0">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item pt-0">
                                <h2 class="accordion-header mb-0" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $post['postID'] ?>">
                                        Comment
                                    </button>
                                </h2>
                                <div id="collapse<?= $post['postID'] ?>" class="collapse">
                                    <form action="../controllers/comment_post.php" method="post">
                                        <input type="hidden" name="userID" value="<?= $post['userID'] ?>">
                                        <input type="hidden" name="postID" value="<?= $post['postID'] ?>">
                                        <div class="accordion-body form-floating">
                                            <input type="text" name="comment" id="" class="form-control" placeholder="comment..." required>

                                        </div>
                                        <div class="accordion-body form-floating">

                                            <button type="submit" class="btn btn-primary">Comment</button>
                                        </div>
                                        <div class="accordion-body form-floating">
                                            <?php
                                            $allComments = getComments($post['postID']);
                                            foreach ($allComments as $comment) {
                                            ?>
                                                <p class="text">
                                                    <?= $comment['comment']; ?>

                                                </p>

                                            <?php
                                            }; ?>
                                        </div>
                                    </form>
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-1 ps-0">
                        <button class="text  btn btn-primary"><?=count($allComments); ?></button>
                    </div>
                </div>
            </div>

        </div>
    <?php
    endforeach;
    ?>
</div>