<?php include "../inc/header.php" ?>
<?php include "../inc/koneksi.php" ?>
<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM peta,kategori WHERE peta.kategori = kategori.id_kat AND id_peta = '$_GET[id]'");
$data=mysqli_fetch_array($SQL); 
?>

<title> Detail Road Map </title>
<div class="container-fluid mt-5 pt-5">
    <div class="container">
    <div class="row d-flex justify-content-center">
        
        <div class="card col-md-6 offset-md-1 ms-md-0 ms-md-3 px-0 my-md-5 mt-md-0 mt-4" style="background-color:#fafafa;">
                <div class="card-title col-12 pt-3 d-flex align-items-center px-3 pb-3" style="background-color:#D7C0AE;" width="100%">
                    <box-icon name='data' type='solid' color='#ac4425'style="width:50px; height:50px;"  ></box-icon> 
                    <span style="font-family : Futura MD BT; font-size:20px; color:#ac4425"> <?php echo $data['judul']; ?> </span>
                </div>
                <div class="row px-3" style="font-family:Futura MD BT;">
                   <div class="col-12 py-3" >
                   <form action="" method="post">
                        <input type="hidden" name="title" value="<?php echo $data ['judul'];?>">
                        <input type="hidden" name="id" value="<?php echo $data ['id_peta'];?>">
                        <input type="hidden" name="kategori" value="<?php echo $data['kategori'];?>">
                        <h3 style="font-size:15px;"> Kategori : <?php echo $data ['nama_kat'];?> </h3>
                   </div>
                   <hr>
                   <div class="col-6 col-md-12 px-2">
                        <h3 style="font-size:25px;"> Your Note : </h3>
                        <textarea name="teks" id="" cols="50" rows="10" class="px-3 py-3"><?php echo $data['isi']; ?></textarea>
                   </div>
                   <div class="col-12 offset-md-7 py-3 ">
                    <a href="roadmap.php"><button class="button-57" type="button"><span class="text">Back</span><span>Notes Page</span></button></a>
                    <button class="button-57" role="button" type="submit" name="edit" id="edit"><span class="text">Edit</span><span> Edit Data</span></button>
                    </form>   
                </div>
                </div>
            </div>     
        </div>
        
        </div>
    </div>
</div>


<!-- Insert Data dari modal -->
<?php
    if(isset($_POST['edit'])){
        $kode = $_POST['id'];
    $edit = mysqli_query($koneksi, "UPDATE peta SET judul = '$_POST[title]', isi =' $_POST[teks]',
    kategori =' $_POST[kategori]' WHERE id_peta = '$kode'");

if($edit){
    echo "<script>alert('Data berhasil di edit')
    location.href='roadmap.php';</script>";
    
}else{
    echo "<script>alert('Data Belum berhasil di hapus')
    location.href='roadmap.php';</script>";
}
    }
    
    ?>
    
   
<!-- End insert --> 