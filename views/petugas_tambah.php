<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Polisi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <!--postdatapetugas-->
						 <div class="form-group">
                            <label for="nrp" class="col-sm-3 control-label">NRP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nrp" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor NRP" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Lengkap" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="pangkat" class="col-sm-3 control-label">Pangkat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pangkat" class="form-control" id="inputEmail3" placeholder="Inputkan Pangkat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="jabatan" class="form-control" id="inputEmail3" placeholder="Inputkan Jabatan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="status_kasus" class="col-sm-3 control-label">Status Kasus</label>
                            <div class="col-sm-9">
                                <input type="text" name="status_kasus"class="form-control" id="inputEmail3" placeholder="Inputkan Status Kasus" required>
                            </div>
                        </div>
                        

                        
                        
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
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
    $sql="INSERT INTO tbl_polisi VALUES ('','$nrp','$nama','$pangkat','$jabatan','$alamat','$statuskasus')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=petugas&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
