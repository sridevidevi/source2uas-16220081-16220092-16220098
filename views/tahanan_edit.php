<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_tahanan WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Tahanan</h3>
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



                        
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Masuk Tahanan</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <!--end tanggal--> 
                        
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Keluar Tahanan</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun_kel" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan_kel" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal_kel" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                        </div>

                          <div class="form-group">
                            <label for="lama_tahanan" class="col-sm-3 control-label">Lama Tahanan</label>
                            <div class="col-sm-9">
                                <input type="text" name="lama_tahanan" class="form-control" id="inputEmail3" placeholder="Lama Tahanan">
                            </div>
                        </div>
                        
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Tahanan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=tahanan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Tahanan
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
    $tglmasuk=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $tglkeluar=$_POST['tahun_kel']."-".$_POST['bulan_kel']."-".$_POST['tanggal_kel'];
        $thnkel =$_POST['tahun_kel'];
        $thnmas =$_POST['tahun'];
        $blnkel =$_POST['bulan_kel'];
        $blnmas =$_POST['bulan'];
        $tglkel =$_POST['tanggal_kel'];
        $tglmas =$_POST['tanggal'];
    $lamatahanan= (($thnkel - $thnmas)*365)+(($blnkel - $blnmas)*30)+($tglkel - $tglmas);
    //buat sql
    $sql="UPDATE tbl_tahanan SET nrp= '$nrp', nama_lengkap='$namalengkap', jenis_kelamin='$jeniskelamin', alamat='$alamat',tgl_masuk='$tglmasuk', tgl_keluar='$tglkeluar', lama_tahanan='$lamatahanan',
     WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=tahanan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



