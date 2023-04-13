<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info" style="float:right">Kembali</a>
        </div>
        <div class="col">
            <form action="?m=siswa&s=simpan" method="post">
                <div class="mb-2">
                    <label for="">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Nama Siswa</label>
                    <input type="number" name="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="number" name="Tempat_Lahir" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="number" name="Tanggal_Lahir" class="form-control">
                </div>
                <?php
                include_once("config.php");
                $sql = "SELECT id, jurusan FROM jurusan ORDER BY jurusan";
                $query = mysqli_query($con, $sql);
                ?>
                 <div class="mb-2">
                    <label for="">pilih jurusan</label>
                    <select name="siswa" class="form-control" re
                </php } ?>
            </select>
        </div>

        </div> class=
</section>