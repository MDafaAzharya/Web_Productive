<?php 
include "../inc/header.php" ;
include "../inc/koneksi.php" ;
 ?>

<title> Profile - Productive </title>
<link rel="stylesheet" href="../assets/css/profiles.css">
<div class="page-content page-container pt-5 mt-5" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12 mt-5">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600"><?php echo $_SESSION['username'];?></h6>
                                <p> <?php echo $_SESSION['pass'];?></p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <?php
                        $no = 1;
                        $sql = $koneksi->query("SELECT * FROM akun WHERE akun.id_akun='$_SESSION[id]'");
                        while ($data= $sql->fetch_assoc()) {
                    ?>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Data Account</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?php echo $data['email'];?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $data['no_telp'];?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Others</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Alamat</p>
                                        <h6 class="text-muted f-w-400"><?php echo $data['alamat'];?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Sekolah</p>
                                        <h6 class="text-muted f-w-400"><?php echo $data['sekolah'];?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col pt-3">
                                     <a href="up_profile.php?id=<?php echo $data['id_akun'];?>"><button class="button-57"><span class="text">Edit Data</span><span><?php echo $_SESSION ['username'];?></span></button></a>   
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                ?>
            </div>
        </div>
    </div>
</div>


<?php include "../inc/footer.php" ?>
