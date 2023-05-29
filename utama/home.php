<?php include "../inc/header.php" ?>

<title> Home - Productive </title>
<div class="container-fluid mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="card col-md-10 offset-md-1 mb-3 shadow" style="background-color:#AD8B73; border:none; font-family: Berlin Sans FB;">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-4 pt-4 ps-5">
                            <h1 style="font-size:25px; color:#FFF8EA;"> Welcome Back <?php echo $_SESSION['username'] ?>! </h1>
                            <p>
                                Kamu Telah kembali login dan siap kembali productive, ayo kembali ke aktivitas mu!
                            </p>
                        </div>
                        <div class="col-md-3 ms-auto pe-5">
                            <img src="../assets/img/active.svg" alt="" width="100%" height="100%">
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <!-- Card -->
                <div class="card col-md-3 shadow bg-light px-md-1 offset-md-1 mb-4">
                    <div class="pt-4">
                        <img class="card-img-top" src="../assets/img/todo.svg" alt="Card image cap" width="100%" style="height:150px;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="card-title"><a>To Do List</a></h4>
                        <p class="card-text">Membantu anda mengatur kegiatan setipa hari nya,fitur ini mengarahkan kalian untuk mengisi kegiatan setiap harinya.</p>
                        <a href="todo.php"><button class="button-57" role="button"><span class="text">Masuk</span><span>To Do List</span></button></a>
                    </div>
                </div>
            <!-- Card -->
             <!-- Card -->
             <div class="card col-md-3 shadow bg-light mx-md-5 mb-4">
                    <div class="pt-4">
                        <img class="card-img-top" src="../assets/img/paper.svg" alt="Card image cap" width="100%" style="height:150px;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="card-title"><a>Notes</a></h4>
                        <p class="card-text">Notes merupakan catatan untuk membantu anda mencatat apa yang ada di pikiarn anda.</p>
                        <a href="note.php"><button class="button-57" role="button"><span class="text">Masuk</span><span>its Notes</span></button></a>
                    </div>
                </div>
            <!-- Card -->
             <!-- Card -->
             <div class="card col-md-3 shadow bg-light px-md-1 mb-4">
                    <div class="pt-4">
                        <img class="card-img-top" src="../assets/img/map.svg" alt="Card image cap" width="100%" style="height:150px;">
                    </div>
                    <div class="card-body pt-3">
                        <h4 class="card-title"><a>Road Map</a></h4>
                        <p class="card-text">Road Map membantu anda untuk memanage kegiatan dengan teratur dan lebih mudah.</p>
                        <a href="roadmap.php"><button class="button-57 mt-4" role="button"><span class="text">Masuk</span><span>Road Map</span></button></a>
                    </div>
                </div>
            <!-- Card -->
            </div>
        </div>
    </div>
</div>

<?php include "../inc/footer.php" ?>
