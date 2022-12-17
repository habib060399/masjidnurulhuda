<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Transfer </h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Transfer masuk yang menunggu konfirmasi.
                </div>
                <div class="panel-body">
                    <!-- FORM SEARCH -->
                    <form method="post" action="index.php?m=contents&p=cari-transfer">
                        <div class="row">
                            <div class="col-xs-9">
                                &nbsp;
                            </div>
                            <div class="col-lg-3 form-group input-group">
                                <input type="text" name="dicari" placeholder="ketikkan sesuatu..." class="form-control" />
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="cari">
                                        <i class="icon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM SEARCH -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-condesed">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nomor Rekening</th>
                                    <th>Bank</th>
                                    <th>Nominal</th>
                                    <th>Tanggal Transfer</th>
                                    <th>Bukti Transfer</th>
                                    <th width="4%">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($transfer->result_array() as $tf) {
                                ?>
                                    <tr>
                                        <form method="post" action="updateStatus/<?php echo $tf['id_transfer']; ?>">
                                            <td><?php echo $no++ ?></td>
                                            <td><input type="text" name="idtrans" class="form-control" value="<?php echo $tf['id_transfer'];  ?>" readonly /></td>
                                            <td><input type="text" name="nama" class="form-control" value="<?php echo $tf['nama'];  ?>" readonly /></td>
                                            <td><input type="text" name="norek" class="form-control" value="<?php echo $tf['no_rekening'];  ?>" readonly /></td>
                                            <td><input type="text" name="bank" class="form-control" value="<?php echo $tf['nama_bank'];  ?>" readonly /></td>
                                            <td><input type="text" name="jml" class="form-control" value="<?php echo $tf['jumlah'];  ?>" readonly /></td>
                                            <td><input type="text" name="tgl" class="form-control" value="<?php echo $tf['tgl_transfer'];  ?>" readonly /></td>
                                            <td><img src="<?php echo base_url() ?>assets/foto/<?php echo $tf['image']; ?>" width="50" height="50"></td>
                                            <input value="<?php echo "sukses"; ?> " hidden name="status">

                                            <?php if ($tf['status'] == "sukses") { ?>
                                                <td><button class="btn btn-grad  btn-sm btn-primary" onclick="return alert('Dana Sudah Di Konfirmasi'); " type="">Terkonfirmasi</button></td>
                                            <?php  } else { ?>
                                                <td><button class="btn btn-grad  btn-sm btn-danger" type="submit" onclick="return confirm('Pastikan anda sudah memeriksa semua data dengan benar!'); " hidden>Konfirmasi</button></td>
                                            <?php } ?>
                                        </form>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>