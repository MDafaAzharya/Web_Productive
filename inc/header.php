<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg">
</head>
<body>
  
    <!-- Navbar -->
    <nav class="navbar fixed-top" style="background-color: #AD8B73;">
    <div class="container-fluid ">
      <a href="" class="navbar-brand">
        <img src="../assets/img/logo.svg" width="100%" height="40px">
      </a>
      <h1 class="h1 me-auto mt-2"> <?php echo $_SESSION['username'] ?></h1>
      <button class="toogle navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="span navbar-toggler-icon" ></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:30%;">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><b>Menu</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 ">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="../utama/home.php" style="color: #FFF8EA;"> <span class="fa fa-home me-2"></span>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../utama/todo.php" style="color: #FFF8EA;"><i class="fa fa-list-ul " aria-hidden="true"></i> To-Do List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../utama/roadmap.php" style="color: #FFF8EA;"><i class="fa fa-map me-2" aria-hidden="true"></i>Road map</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../utama/note.php" style="color: #FFF8EA;"><i class="fa fa-sticky-note me-2" aria-hidden="true"></i>Notes</a>
          </li>
        </ul>
        <hr>
        <ul class="navbar-nav justify-content-end flex-grow-1 ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../utama/profile.php" style="color: #FFF8EA;"><i class="fa fa-user me-2" aria-hidden="true"></i>Account Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" style="color: #FFF8EA;"  data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa fa-sign-out me-2" aria-hidden="true"></i>Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
    <!-- End Navbar -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="../index.php">Logout</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>