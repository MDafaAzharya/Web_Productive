<?php include "../inc/header.php" ?>
<?php include "../inc/koneksi.php" ?>
<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM akun WHERE akun.id_akun='$_SESSION[id]'");
$data=mysqli_fetch_array($SQL); 
?>

<title> Edit Profile </title>
<div class="container-fluid mt-5 pt-5">
    <div class="container">
    <div class="row d-flex justify-content-center">
        
        <div class="card col-md-6 offset-md-1 ms-md-0 ms-md-3 px-0 my-md-5 mt-md-0 mt-4" style="background-color:#fafafa;">
        <div class="card-title col-12 pt-3 d-flex align-items-center px-3 pb-3" style="background-color:#D7C0AE;" width="100%">
                    <box-icon name='data' type='solid' color='#ac4425'style="width:50px; height:50px;"  ></box-icon> 
                    <span style="font-family : Futura MD BT; font-size:20px; color:#ac4425"> Biodata </span>
                </div>
                <div class="row px-3" style="font-family:Futura MD BT;">
                   <div class="col-12 py-3" >
                   <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $data ['id_akun'];?>">
                        <input type="hidden" name="pass" value="<?php echo $data ['password'];?>">
                   </div>
                   <hr>
                   <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username:</label> <br>
                        <input type="text" name="nama" id="" value="<?php echo $data['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label> <br>
                        <input type="email" name="email" id="" value="<?php echo $data['email']?>" autocomplette="off">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">No Telepon:</label> <br>
                        <input type="text" name="phone" id="" value="<?php echo $data['no_telp']?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Alamat:</label> <br>
                        <input type="text" name="alamat" id="" value="<?php echo $data['alamat']?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sekolah:</label> <br>
                        <input type="text" name="school" id="" value="<?php echo $data['sekolah']?>">
                    </div>
                   <div class="col-12 offset-md-7 py-3 ">
                    <a href="profile.php"><button class="button-57" type="button"><span class="text">Back</span><span>Notes Page</span></button></a>
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
    $edit = mysqli_query($koneksi, "UPDATE akun SET name = '$_POST[nama]', password =' $_POST[pass]',
    email =' $_POST[email]', no_telp =' $_POST[phone]', alamat =' $_POST[alamat]', sekolah =' $_POST[school]' WHERE id_akun = '$kode'");

if($edit){
    echo "<script>alert('Data berhasil di edit')
    location.href='profile.php';</script>";
    
}else{
    echo "<script>alert('Data Belum berhasil di hapus')
    location.href='profile.php';</script>";
}
    }
    
    ?>
    
   
<!-- End insert --> 