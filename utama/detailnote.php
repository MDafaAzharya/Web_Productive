<?php include "../inc/header.php" ?>
<?php include "../inc/koneksi.php" ?>
<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM note WHERE id_note = '$_GET[id]'");
$data=mysqli_fetch_array($SQL); 
?>

<title> Detail Note </title>
<div class="container-fluid mt-5 pt-5">
    <div class="container">
    <div class="row d-flex justify-content-center">
        
        <div class="card col-md-6 offset-md-1 ms-md-0 ms-md-3 px-0 my-md-5 mt-md-0 mt-4" style="background-color:#fafafa;">
                <div class="card-title col-12 pt-3 d-flex align-items-center px-3 pb-3" style="background-color:#D7C0AE;" width="100%">
                    <box-icon name='notepad'  color='#ac4425'style="width:50px; height:50px;" ></box-icon>
                    <span style="font-family : Futura MD BT; font-size:20px; color:#ac4425"> <?php echo $data['judul']; ?> </span>
                </div>
                <div class="row px-3" style="font-family:Futura MD BT;">
                   <div class="col-12 py-3" >
                   <form action="" method="post">
                   <input type="hidden" name="title" value="<?php echo $data['judul']; ?> "> 
                    <input type="hidden" name="id" value="<?php echo $data['id_note']; ?>">
                    <input type="hidden" name="awal" id="" value="<?php echo $data['tgl_dibuat']; ?>">
                    <input type="hidden" name="baru">
                        <h3 style="font-size:15px;"> Date : <?php $tgl = $data['tgl_dibuat']; echo date("d/M/Y", strtotime($tgl))?> </h3>
                        <h3 style="font-size:15px;"> Update at : <?php $update = $data['tgl_upfate']; echo date("d/M/Y", strtotime($tgl))?> </h3>
                   </div>
                   <hr>
                   <div class="col-6 col-md-12 px-2">
                        <h3 style="font-size:25px;"> Your Note : </h3>
                        <textarea name="teks" id="" cols="50" rows="10" class="px-3 py-3"><?php echo $data['isi']; ?></textarea>
                   </div>
                   <div class="col-12 offset-md-7 py-3 ">
                    <a href="note.php"><button class="button-57" type="button"><span class="text">Back</span><span>Notes Page</span></button></a>
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
    $edit = mysqli_query($koneksi, "UPDATE note SET judul = '$_POST[title]', isi =' $_POST[teks]',
    tgl_dibuat =' $_POST[awal]', tgl_upfate =now() WHERE id_note = '$kode'");

if($edit){
    echo "<script>alert('data berhasil di edit')
    location.href='note.php';</script>";
    
}else{
    echo "<script>alert('data ga')
    location.href='note.php';</script>";
}
    }
    
    ?>
    
   
<!-- End insert --> 