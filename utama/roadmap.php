<?php include "../inc/header.php" ?>

<title> Road Map - Productive </title>
<link rel="stylesheet" href="../assets/css/roadmap.css">
<div class="container-fluid pt-5 mt-5">
    <div class="container">
        <div class="row">
            <section class="timeline_area section_padding_130">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-8 col-lg-6">
                            <!-- Section Heading-->
                            <div class="section_heading text-center">
                                <h6>Road Map</h6>
                                <h3>Welcome To Road Map Page</h3>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row py-3 ">
                        <div class="col-md-2 col-4 offset-md-1"> 
                            <button class="button-56" type="button"data-bs-toggle="modal" data-bs-target="#exampleModal"> Resolusi </button>
                        </div>
                        <div class="col-md-2 col-4">
                            <button class="button-56" type="button"data-bs-toggle="modal" data-bs-target="#keterangan"> Kategori </button>
                        </div>
                    </div>

                    <div class="row me-5 pt-5">
                        <div class="col-12 py-3 ">
                            <!-- Timeline Area-->
                            <div class="apland-timeline-area">
                                <!-- Single Timeline Content-->
                                <?php
                                    include "../inc/koneksi.php";
                                    $sql = $koneksi->query("SELECT * FROM kategori WHERE user='$_SESSION[id]'");
                                    while ($data= $sql->fetch_assoc()) {
                                ?>
                                <div class="single-timeline-area ">
                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                        <p><?php echo $data['nama_kat'];?></p>
                                    </div>
                                    <div class="row">
                                        <?php
                                        $apa = $koneksi->query("SELECT * FROM peta where kategori = '$data[id_kat]'");
                                        while ($row= $apa->fetch_assoc()) {
                                            $id = $row['id_peta'];
                                        ?>
                                        <div class="col-12 col-md-3 col-lg-4">
                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                                <div class="timeline-text">
                                                    <h6><?php echo $row['judul'];?></h6>
                                                    <p class="pb-3">
                                                        <?php
                                                         if (strlen($row["isi"])<=50) {
                                                            echo $row["isi"];
                                                        }
                                                        else{
                                                            $y=substr($row["isi"],0,50) . ' <br><br><a href=detailmap.php?id='.$row["id_peta"].'>Lihat Selengkapnya</a>';
                                                            echo $y;
                                                        }     
                                                        ?>
                                                    </p>
                                                    <a href="delete/del_roadmap.php?id_peta=<?php echo $id;?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" ><box-icon name='trash' type='solid' color='#fafafa'  style="background-color:red; height:30px; width:30px; border-radius:20px; padding:5px;"></box-icon></a> 
                                                    <a href="detailmap.php?id=<?php echo $id;?>"> <box-icon name='edit-alt' type='solid' color='#fafafa' style="background-color:blue; height:30px; width:30px; border-radius:20px; padding:5px;"></box-icon></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <hr class="offset-2">
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Ubah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-dismiss="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Road Map</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="insert/ins_roadmap.php" method="POST">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Judul:</label> <br>
                        <input type="text" name="title" id="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Masukan Teks :</label> <br>
                        <textarea name="isi" id="" cols="50" rows="2"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Keterangan:</label> <br>
                        <div class="select d-flex">
                        <select name="ket" >
                            <option value="">Keterangan</option>
                                <?php
                                    $SQL = "SELECT * FROM kategori WHERE user='$_SESSION[id]'";
                                    $hasil = mysqli_query($koneksi,$SQL);
                                    while($data=mysqli_fetch_array($hasil))
                                    {
                                ?>
                            <option value="<?=$data['id_kat']?>"><?=$data['nama_kat']?></option> 
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn" style="background-color:#AD8B73; font-family:Futura MD;" name="tambah">Tambah</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
<!-- End Form -->

<!-- Tambah Keterangan -->
<div class="modal fade" id="keterangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-dismiss="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Keterangan Road Map</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="insert/ins_roadmap2.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id']?>">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Keterangan:</label> <br>
                        <input type="text" name="info" id="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn" style="background-color:#AD8B73; font-family:Futura MD;" name="add">Tambah</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
<!-- End Form -->

<?php include "../inc/footer.php" ?>