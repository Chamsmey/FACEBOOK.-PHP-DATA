<div class="container mt-3 d-flex justify-content-center align-center">

    <form action="controllers/user_login.php" method="post" class="form w-50">
        <div class="card">
            <!-- card header -->
            <div class="card-header">
                <p class="h3 text-center text-primary text-bold">Login</p>
            </div>
            <!-- card body -->
            <div class="card-body">
                <div class="row mt-4">

                <!-- input email  -->
                    <div class="col">
                        <input type="text" name="email" class="form-control" placeholder="Enter email" name="email" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <!-- input password  -->
                    <div class="col">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" minlength="8" required>
                    </div>
                </div>
            </div>
            <!-- card footer ------------------------------>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <p class="text text-bold">have account already?</p>
                    </div>
                    <div class="col">
                        <!-- link create acount -------------------->
                        <a href="user_account/create_account.php" class="text-success">create new account</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- button login ---------------------------------- -->

                        <button type="submit" class="btn btn-primary form-control">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>