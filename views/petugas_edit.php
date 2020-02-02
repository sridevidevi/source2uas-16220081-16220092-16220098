<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_polisi WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Petugas</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="nrp" class="col-sm-3 control-label">NRP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nrp" value="<?=$data['nrp']?>"class="form-control" id="inputEmail3" placeholder="NRP">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap']?>"class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="pangkat" class="col-sm-3 control-label">Pangkat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pangkat" value="<?=$data['pangkat']?>"class="form-control" id="inputEmail3" placeholder="pangkat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" value="<?=$data['jabatan']?>"class="form-control" id="inputEmail3" placeholder="Jabatan">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="alamat" >
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="status_kasus" class="col-sm-3 control-label">Status Kasus</label>
                            <div class="col-sm-9">
                                <input type="text" name="status_kasus" value="<?=$data['status_kasus']?>"class="form-control" id="inputEmail3" placeholder="status kasus" >
                            </div>
                        </div>
                              
                     
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Petugas</button>
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
    $nama=$_POST['nama_lengkap'];
    $pangkat=$_POST['pangkat'];
    $jabatan=$_POST['jabatan'];
    $alamat=$_POST['alamat'];
    $statuskasus=$_POST['status_kasus'];
    //buat sql
    $sql="UPDATE tbl_polisi SET nrp='$nrp',nama_lengkap='$nama',pangkat='$pangkat',jabatan='$jabatan',alamat='$alamat',status_kasus='$statuskasus' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=petugas&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



