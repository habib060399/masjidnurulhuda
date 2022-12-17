<div>
    <h1 style="text-align: center;">DATA PETUGAS</h1>
</div>

<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tblbayar">
            <form method="POST" action="index.php?m=contents&p=listdatapetugas">
                <div class="row">
                    <div class="col-xs-9">
                        &nbsp;
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
                        </tr>
                    <?php } ?>
                </tbody>
        </table>

        <button type="button" id="cetak" onclick="window.print()">cetak</button>
    </div>
</div>