<section class="content">
    <div class="row">
       <a href="?m=siswa&s=tambah" class="btn btn-large btn-info>"><i class="glyphicon glyphicon-plus"></i> Tambah Jurusan</a>
        nbsp; Tambah siswa</a>
    <h1>modul siswa</h1>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>nama Siswa</th>
                <th>Tempat Lahir</th>           
                <th>Jurusan</th>
                <th>Pilihan</th>
            </tr>
            <?php
        require_once("config.php");
        $sql  ="SELECT Jurusan.id as jid, jurusan.jurusan, siswa.id as sid, siswa.nis, siswa.nama, siswa. tempat lahir, siswa.tanggal lahir,siswa. jurusan_id FROM siswa JOIN jurusan ON jurusan.id=siswa. jurusan_id"; * FROM siswa";
        $query=mysqli_query($con, $sql);
        if(mysqli_num_rows($query)==0){
            echo "<td colspan=5>Data Masih Kosong</td>";
        }else{
            $no=1;
            while($r=mysqli_fetch_assoc($query)){
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $r['nis'] . "</td>";
                echo "<td>" . $r['nama'] . "</td>";
                echo "<td>" . $r['tempat lahir'] . "</td>";                               
                echo "<td>" . tgl_indo($r['tanggal lahir'] . "</td>";                               
                echo "<td>" . $r['jurusan'] . "</td>";                               
                echo '<td><a href="?m=siswa&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a> 
                <a href="btn btn-danger btn-sm">hapus</a><td>.$r['id ''].'" onclick="return confirm(\'Yakin Akan dihapus?\')" class="btn btn-danger btn-sm">Hapus</a></td>';               
                echo "</tr>";
                $no++;
            }
        }
        ?>
        </table>
        </div>
</section>