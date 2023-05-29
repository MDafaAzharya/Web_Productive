<?php include "../inc/header.php" ?>

<title> Note - Productive</title>
<link rel="stylesheet" href="../assets/css/notes.css">
<div class="container-fluid mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> Note </h1>
                <p> Welcome To Note Page </p>
            </div>
        </div>

        <hr>
        <div class="row py-3 ">
            <div class="col-md-2  offset-md-1"> 
                <button class="button-56" type="button"data-bs-toggle="modal" data-bs-target="#exampleModal"> Tambah Catatan </button>
            </div>
        </div>

        <div class="row justify-content-center d-flex py-3">
            <?php
                include "../inc/koneksi.php";
                $sql = $koneksi->query("SELECT * FROM note WHERE user='$_SESSION[id]' ORDER BY tgl_dibuat ASC");
                while ($data= $sql->fetch_assoc()) {
                    $id = $data['id_note']; 
            ?>
            <div class="card shadow mx-3 col-md-3 mt-3 mt-md-3 " >
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $data['judul']; ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <?php $tgl = $data['tgl_dibuat']; echo date("d/M/Y", strtotime($tgl))?> </h6>
                    <p class="card-text"><?php
                     if (strlen($data["isi"])<=50) {
                        echo $data["isi"];
                    }
                    else{
                        $y=substr($data["isi"],0,50) . ' <br><br><a href=detailnote.php?id='.$data["id_note"].'>Lihat Selengkapnya</a>';
                        echo $y;
                    }                
                
                    ?></p>
                    <div class="pt-1">
                        <a href="delete/del_note.php?id_note=<?php echo $id;?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" ><box-icon name='trash' type='solid' color='#fafafa'  style="background-color:red; height:30px; width:30px; border-radius:20px; padding:5px;"></box-icon></a> 
                        <a href="detailnote.php?id=<?php echo $id;?>"> <box-icon name='edit-alt' type='solid' color='#fafafa' style="background-color:blue; height:30px; width:30px; border-radius:20px; padding:5px;"></box-icon></a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

    </div>
</div>

<!-- Ubah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-dismiss="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Notes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="insert/ins_note.php" method="POST">
                <div class="form-group">
                        <input type="hidden" name="id" id="" value="<?php echo $_SESSION['id']?>">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Judul:</label> <br>
                        <input type="text" name="title" id="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Add Notes :</label> <br>
                        <textarea name="isi" id="" cols="50" rows="2"> </textarea>
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



<?php include "../inc/footer.php" ?>