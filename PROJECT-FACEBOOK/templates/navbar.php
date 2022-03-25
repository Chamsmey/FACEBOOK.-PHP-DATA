<nav class="navbar navbar-light fixed-top  shadow p-0 t-0 ">
  <div class="container-fluid position">
    <a class="navbar-brand" href="#">
      <img src="../icons/icon_fb.png" alt="" width="40" height="42" class="d-inline-block align-text-top">
      <span class="h3 text-primary text-bold">Facebook</span>
    </a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
    <?php
      //echo $_GET['id'];
    ?>
    <div class="menu w-25">
      <a href="home.php">
        <img src="../icons/home.png" width="50" class="ms-3" alt="" />

      </a>
      <a href="friend.  hp">
        <img src="../icons/friends.png" width="40" class="ms-5"  alt="">

      </a>
      <a href="../views/user_account.php?id=<?=$_GET['id']?>" class='text-decoration'>
        <img src="../icons/user.png" width="40" class="ms-5"  alt="">

      </a>
    </div>
  </div>
</nav>