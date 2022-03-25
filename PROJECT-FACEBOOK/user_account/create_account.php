<?php
require_once '../templates/header.php'; ?>
<div class="container mt-3 d-flex justify-content-center align-center">
    <form action="../controllers/regester.php" method="post" class="">
        <div class="card">
            <!-- card header -->
            <div class="card-header">
                <p class="h3 text-center text-primary text-bold">Create Account</p>
            </div>
            <!-- card body -->
            <div class="card-body">
                <div class="row mt-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="FirstName" name="firstName" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="LastName" name="lastName" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col col-6">
                        <select class="form-select" name="gender" aria-label="Gender" required>
                            <option >Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col col-6">
                        <input type="date" class="form-control"  name="date" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                    </div>  
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Enter password" name="password" required>
                    </div>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <p class="text text-bold">Do you have any account?</p>
                    </div>

                    <div class="col">
                        <!-- link create acount -------------------->
                        <a href="user_account/create_account.php" class="text-success">Login</a>
                    </div>
                    </div>
    
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary form-control">create account</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php

require_once '../templates/footer.php'; ?>