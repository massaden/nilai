<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Jurusan</h1>
        </div>
        <div class="col-4">
            <a href="?m=jurusan&s=tampil" class="btn btn-large btn-info" style="float:right">Kembali</a>
        </div>
        <?php
        include_once("config.php");
        $id = $_GET['id'];
        $sql = "SELECT * FROM jurusan WHERE id='$id'";
        $query = mysqli_query($con, $sql);
        $r = mysqli_fetch_array($query);
        ?>
        <div class="col">
            <form action="?m=jurusan&s=simpan" method="post">
                <div class="mb-2">
                    <label for="">Nama Jurusan</label>
                    <input type="text" name="jurusan" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Kapasitas</label>
                    <input type="number" name="kapasitas" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">Terisi</label>
                    <input type="number" name="terisi" class="form-control">
                </div>
                <div class="mb-2">                    
                   <input type="hidden" nama="btn btn-info">&nbsp;
                   <input type="reset" class="simpan" value="Simpan" class="btn btn-primary">
                   <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>