<?php
//if (!isset($_SESSION["username_petugas"]))
//  header("Location: ../administrator.php");
?>
<?php //include_once "library/database.php"; 
?>
<?php //include_once "library/fungsi.php"; 
?>
<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Pembayaran </h1>
        </div>
    </div>
    <hr />
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-money"></i></div>
                <h5 class="text-info">Input Pembayaran</h5>
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
            <div id="collapse2" class="body collapse in">
                <form class="form-horizontal" action="input_pembayaran" method="post" id="popup-validation">
                    <div class="form-group">
                        <label class="control-label col-lg-4">ID Transaksi</label>
                        <div class="col-lg-4">
                            <input name="idpm" type="text" value="<?php idpm();
                                                                    ?>" class="form-control " readonly />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Kategori</label>
                        <div class="col-lg-4">
                            <select name="id_kategori" id="sport" class="validate[required] form-control">
                                <option>--Pilih--</option>
                                <?php
                                foreach ($kategori->result_array() as $row) {
                                    // $tampil = $koneksi->prepare("SELECT id_kategori,nama_kategori FROM tbl_kategori");
                                    // $tampil->execute();
                                    // $tampil->store_result();
                                    // $tampil->bind_result($id_kat, $kategori);
                                    // while ($tampil->fetch()) {
                                ?>
                                    <option value="<?php echo $row['id_kategori'];
                                                    ?>"><?php echo $row['nama_kategori'];
                                                        ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <!--<div class="form-group">
															<label class="control-label col-lg-4" >Tanggal</label>
															<div class="col-lg-4">
																<div class="input-group">
																	<input class="form-control" type="date" name="tglmasuk" />
																	<span class="input-group-addon"><i class="icon-calendar"></i></span>
																</div>
															</div>
														</div>!-->

                    <div class="form-group">
                        <label class="control-label col-lg-4">Nominal</label>
                        <div class="col-lg-4">
                            <input type="text" name="nominal" onkeypress="return hanyaAngka(event, false)" class="form-control" required />
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div class="text-center">
                            <button type="reset" class="btn btn-grad  btn-md btn-danger"><i class="icon-remove"></i> Batal</button>
                            <button type="submit" name="tambah" id="tambah" class="btn btn-grad btn-md btn-primary"><i class="icon-save"></i> Simpan</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <br><br>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="default">
                        <th>ID Kategori</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                    </tr>
                </thead>

                <?php
                // $tampil = $koneksi->prepare("SELECT tbl_kategori.id_kategori,tbl_kategori.nama_kategori,tbl_sementara.jumlah FROM tbl_sementara
                // 						JOIN tbl_kategori USING (id_kategori)");
                // $tampil->execute();
                // $tampil->store_result();
                // $tampil->bind_result($id, $nm, $jml);
                // while ($tampil->fetch()) {
                foreach ($pembayaran_sementara->result_array() as $row) {

                ?>
                    <tbody>
                        <tr>
                            <td width="13%"><?php echo $row['id_kategori'];
                                            ?></td>
                            <td width="13%"><?php echo $row['nama_kategori'];
                                            ?></td>
                            <td width="17%">Rp. <?php echo str_replace(",", ".", number_format($row['jumlah'], 0));
                                                ?></td>
                        </tr>
                    <?php }
                    ?>

                    <?php
                    // $res = $koneksi->query("SELECT sum(jumlah) as total from tbl_sementara");
                    // while ($row = $res->fetch_array()) {
                    foreach ($total_pembayaran->result_array() as $row) {
                    ?>
                        <tr class="info">
                            <td colspan='2'> Total yang harus dibayarkan</td>
                            <td><b>
                                    <form method="post" action="print.php">
                                        <input class="form-control" type="text" name="gtotal" readonly value="Rp. <?php echo str_replace(",", ".", number_format($row['jumlah'], 0)); ?>" />
                                    </form>
                                </b></td>
                        <?php
                    }
                        ?>
                        </tr>
                    </tbody>
            </table>
        </div>
        <form name="f1" method="POST" action="view_prosespembayaran ">
            <div class="form-group">
                <?php
                // $tampil = $koneksi->prepare("SELECT max(id_pemasukan) as idtrx FROM tbl_sementara");
                // $tampil->execute();
                // $tampil->store_result();
                // $tampil->bind_result($idtrx);
                // while ($tampil->fetch()) {
                foreach ($id_pemasukan->result_array() as $row) {
                ?>
                    <input type="hidden" value="<?php echo $row['id_pemasukan'];
                                                ?>" name="idtrx" />
                <?php
                    // var_dump($row);
                }
                ?>
                <button type="submit" name="lanjutkan" class="btn btn-lg btn-primary"> <i class="fa fa-save fa-fw"></i>&nbsp;Proses</a>
            </div>
        </form>
    </div>
</div>