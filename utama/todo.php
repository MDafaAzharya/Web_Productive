<?php include "../inc/header.php" ?>

<title> To Di List - Productive </title>
<link rel="stylesheet" href="../assets/css/todo.css">
<div class="container-fluid mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1> To-Do List </h1>
                <p> Welcome To To-Do List Page</p>
            </div>

            <hr>

            <div class="card col-md-10 offset-md-1 px-0 my-md-5" style="background-color:#fafafa;">
                <div class="card-title col-12 pt-3 d-flex align-items-center px-3 pb-3" style="background-color:#D7C0AE;" width="100%">
                    <box-icon name='list-check' color='#ac4425' style="width:50px; height:50px;" ></box-icon>
                    <span style="font-family : Futura MD BT; font-size:20px; color:#ac4425"> Task List </s>
                </div>
                <div class="row">
                    <div class="card-body col-md-12" >
                        <h2 class="ms-3" style="font-size:15px; font-family:Futura MD BT;"> Date : <?php echo date("d/M/Y"); ?></h2>
                        <form action="insert/ins_todo.php" method="post">
                        <div class="form-group col-md-12 offset-md-1 py-3 px-md-0 px-3 ">
                            <input type="hidden" name="id" id="" value="<?php echo $_SESSION['id']?>">
                            <input type="text" name="nama_task" class="text" placeholder="Tambah List">
                            <button class="button-24" type="submit" name="tambah"> Add Task </button>
                        </div>
                        </form>
                        <hr style="color:#AD8B73; border: 2px solid #AD8B73">
                        <div>
                        <div class="tab-content px-md-5 px-3 py-3" id="ex1-content">
                            <?php
                                    include "../inc/koneksi.php";
                                    $sql = $koneksi->query("SELECT * FROM todo WHERE status='pendinng' AND user='$_SESSION[id]' ");
                                    while ($data= $sql->fetch_assoc()) {
                                        $task = $data['nama_task'];
                                        $id = $data['id_task'];
                            ?>
                            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                                aria-labelledby="ex1-tab-1">
                                <ul class="list-group mb-0" id="myUL">
                                <li class="list-group-item d-flex align-items-center border-0 mb-3"
                                    style="background-color: #C4DFDF; border-radius:20px;">
                                    <span><?php echo $task;?></span>
                                    <div class="ms-auto">
                                    <a href="update/up_todo.php?update=<?php echo $id;?>"><box-icon name='check-circle' color='#fafafa' style="background-color:green; height:30px; width:30px; border-radius:20px; padding:5px;"></box-icon></a>
                                    <a href="delete/del_todo.php?id_task=<?php echo $id;?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><box-icon name='trash' type='solid' color='#fafafa'  style="background-color:red; height:30px; width:30px; border-radius:20px; padding:5px;"></box-icon></a> 
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <?php
                                    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
        <div class="card col-md-6 offset-md-1 ms-md-0 ms-3 px-0 my-md-5 mt-md-0 mt-4" style="background-color:#fafafa;">
                <div class="card-title col-12 pt-3 d-flex align-items-center px-3 pb-3" style="background-color:#D7C0AE;" width="100%">
                    <box-icon name='list-check' color='#ac4425' style="width:50px; height:50px;" ></box-icon>
                    <span style="font-family : Futura MD BT; font-size:20px; color:#ac4425"> Status Task List </s>
                </div>
                <div class="row">
                        <div>
                        <div class="tab-content px-md-5 px-3 py-3" id="ex1-content">
                            <?php
                                    include "../inc/koneksi.php";
                                    $sql = $koneksi->query("select * from todo where status='selesai'");
                                    while ($data= $sql->fetch_assoc()) {
                                        $task = $data['nama_task'];
                                        $id = $data['id_task'];
                            ?>
                            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                                aria-labelledby="ex1-tab-1">
                                <ul class="list-group mb-0" id="myUL">
                                <li class="list-group-item d-flex align-items-center border-0 mb-3"
                                    style="background-color: #C4DFDF; border-radius:20px;">
                                    <span><?php echo $task; ?></span>
                                    <div class="ms-auto mt-2">
                                    <a href="delete/del_todolist.php?id_task=<?php echo $id;?>" onclick="return confirm('Apakah Benar sudah selesai?')" ><h3 style="background-color: blue; padding:10px; border-radius:15px; color:#fafafa; font-size: 15px;">
                                     Selesai </h3></a>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            <?php
                                    }
                            ?>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>

<?php include "../inc/footer.php" ?>

