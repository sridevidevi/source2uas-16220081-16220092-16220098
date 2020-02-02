<?php
$nrp=$_GET['nrp'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_polisi WHERE nrp ='$nrp'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Tahanan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                     <form class="form-horizontal" action="" method="post">
                       <div class="form-group">
                            <label for="nrp" class="col-sm-3 control-label">NRP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nrp" value="<?=$data['nrp']?>" class="form-control" id="inputEmail3" placeholder="NRP" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Jenis Kelamin">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tglmasuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglmasuk" class="form-control" id="inputEmail3" placeholder="Tanggal Masuk">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="lama_tahanan" class="col-sm-3 control-label">Lama Tahanan</label>
                            <div class="col-sm-3">
                                <input type="text" name="lama_tahanan" class="form-control" id="inputEmail3" placeholder="Lama Tahanan">
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Tahanan</button>
                            </div>
                        </div>
                    </form>
              </div>
                <div class="panel-footer">
                    <a href="?page=petugas&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Petugas
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nrp=$_POST['nrp'];
    $namalengkap=$_POST['nama_lengkap'];
    $jeniskelamin=$_POST['jenis_kelamin'];
    $alamat=$_POST['alamat'];
    $tglmasuk=$_POST['tglmasuk'];
    $lamatahanan=$_POST['lama_tahanan'];
    //buat sql
    $sql="INSERT INTO tbl_tahanan VALUES ('$nrp','$namalengkap','$jeniskelamin','$alamat','$tglmasuk','Belum Keluar','',)";
    $sqlpetugas="UPDATE tbl_polisi SET status_kasus='Selesai' WHERE nrp='$nrp'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Tahanan Error");
    $querypetugas=  mysqli_query($koneksi, $sqlpetugas) or die ("SQL Simpan Data Polisi Error");
    if ($query){
        echo "<script>window.location.assign('?page=tahanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
