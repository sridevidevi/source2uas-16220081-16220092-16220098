<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Tahanan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_tahanan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Pengolahan Data Polsek Pulau Raja </h2>
                        <h4>Pulau Rakyat Tua, Pulau Rakyat <br> Kabupaten Asahan, Provinsi: Sumatera Utara ,kode pos : 21273 </h4>
                        <hr>
                        <h3>DATA TAHANAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                            <td width="200">NRP</td> <td><?= $data['nrp'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td> <td><?= $data['nama_lengkap'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Keluar</td> <td><?= $data['tgl_keluar'] ?></td>
                        </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Pulau Raja  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                       <u>KANIT INTEL</u><br>
                                         NRP.17604758
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
