<div class="container mt-5 p-3">
    <div class="row rounded">
        <div class="col col-10 d-flex align-items-center justify-content-center bg-light">
            <p class='text mt-2'> Do you want to add post?</p>
        </div>
        <div class="col col-2 d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                Post
            </button>
        </div>
    </div>
    

</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Post</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="../controllers/create_post.php" enctype  ="multipart/form-data" method="post" class="form-group h-50 w-100 mt-5 bg-primary p-5 rounded-3 text-center">
                    <h1 class="text-center text-light mb-5 h1">Post</h1>
                    <input type="hidden" name="userID" value="<?=$_GET['id']?>"/>
                    <label for="firstimage">
                        <i class="fa fa-image" style="font-size:5rem;color:rgb(157, 250, 8)"></i>
                    </label>
                    <input type="file" name="image" class="form-control " id="firstimage" style="display:none;">
                    <?php
                        session_start();
                        if(isset($_SESSION['image']['name']) and $_SESSION['image']['name']){
                            echo "<p class='text-danger' please choose file ?? </p>";
                        }
                    ?>
                    <textarea name="discription" class="form-control mt-2" placeholder="discription.."></textarea>
                      
                    <div class="form-group d-grid mt-2">
                        <input type="submit" class="btn btn-info" value="POST">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>





























