<?php
// if (!isset($_SESSION["username_petugas"]))
//     header("Location: ../administrator.php");
?>
<?php //include_once "library/database.php"; 
?>
<?php //include_once "library/fungsi.php"; 
?>
<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Pemasukan </h1>
        </div>
    </div>
    <hr />
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-money"></i></div>
                <h5 class="text-info">Data Pembayaran</h5>
                <div class="toolbar">
                    <ul class="nav">
                        <li>
                            <div class="btn-group">
                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse" href="#collapse2">
                                    <i class="icon-chevron-up"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="form-group">

                <a href="tambah_pembayaran" class="btn btn-lg btn-primary">
                    <i class="icon-plus"></i>&nbsp;Tambah
                </a>

            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr class="default">
                            <th>ID Transaksi</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                            <th>Detail</th>
                        </tr>
                    </thead>

                    <?php
                    // $tampil = $koneksi->prepare("SELECT id_pemasukan, tgl_pemasukan, totalbayar from tbl_pemasukan order by id_pemasukan desc");
                    // $tampil->execute();
                    // $tampil->store_result();
                    // $tampil->bind_result($id, $tgl, $tot);
                    // while ($tampil->fetch()) {
                    foreach ($viewPembayaran->result_array() as $row) {

                    ?>
                        <tbody>
                            <tr>
                                <td width="13%"><?php echo $row['id_pemasukan']; ?></td>
                                <td width="13%"><?php echo $row['tgl_pemasukan']; ?></td>
                                <td width="17%"><?php echo rupiah($row['totalbayar']); ?></td>
                                <td width="7%">
                                    <a href="<?php echo base_url('petugas/detail_bayar/') . $row['id_pemasukan']; ?>" class="btn btn-xs btn-info">
                                        <!-- <a href="index.php?m=contents&p=detail-bayar&idpm=<?php //echo $row['id_pemasukan']; 
                                                                                                ?>" class="btn btn-xs btn-info"> -->
                                        <i class="icon-ok"></i>&nbsp;Lihat
                                    </a>
                                </td>
                            </tr>
                        <?php }  ?>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>