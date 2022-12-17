<?php
//include 'library/database.php'; 
?>

<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1>Petugas </h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Petugas
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tblbayar">
                            <form method="POST" action="index.php?m=contents&p=listdatapetugas">
                                <div class="row">
                                    <div class="col-xs-9">
                                        &nbsp;
                                    </div>
                                    <div class="col-lg-3 form-group input-group">
                                        <input type="text" name="cari" placeholder="ketikkan sesuatu..." class="form-control" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" name="submit">
                                                <i class="icon-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Petugas</th>
                                        <th>Nama Petugas</th>
                                        <th>No KTP</th>
                                        <th>Alamat</th>
                                        <th>No HP</th>
                                        <th width="4%">Edit</th>
                                        <th width="6%">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cari = '';
                                    if (isset($_POST['submit'])) {
                                        $cari = $_POST['cari'];
                                    }
                                    ?>
                                    <!-- // $i = 1;
										// $tampil = $koneksi->prepare("SELECT id_petugas,no_ktp,nama,alamat,no_hp FROM tbl_petugas WHERE id_petugas like '%$cari%' or  no_ktp like '%$cari%' or nama like '%$cari%' or alamat like '%$cari%' or no_hp like '%$cari%'");
										// $tampil->execute();
										// $tampil->store_result();
										// $tampil->bind_result($id_petugas,$no_ktp,$nama,$alamat,$no_hp);
										// while($tampil->fetch())
										{ -->
                                    <?php
                                    $i = 1;
                                    foreach ($tbl_petugas->result_array() as $dt) { ?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php $k = $dt['id_petugas'];
                                                echo $k ?></td>
                                            <td><?php echo $dt['nama']; ?></td>
                                            <td><?php echo $dt['no_ktp']; ?></td>
                                            <td><?php echo $dt['alamat']; ?></td>
                                            <td><?php echo $dt['no_hp']; ?></td>
                                            <td><?php echo anchor('Admin/editPetugas/' . $dt['id_petugas'], '<div class="btn btn-grad  btn-sm btn-primary">Edit</i></div>'); ?></td>

                                            <td><a href="<?= base_url('admin/hapus/' . $k) ?>" button class="btn btn-grad  btn-sm btn-danger" type="submit" onclick="return confirm('Yakin Ingin Menghapus Data Ini?'); ">Delete</button></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>