<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Pengeluaran </h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data uang yang keluar dari kas masjid
                </div>
                <div class="panel-body">
                    <!-- FORM SEARCH -->
                    <!--<div class="row">
                                        <div class="col-xs-9">
                                            &nbsp;
                                        </div> 
										<div class="col-lg-3 form-group input-group">
                                            <input type="text" placeholder="ketikkan sesuatu..." class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                        </div>-->
                    <!-- END FORM SEARCH -->
                    <div class="table-responsive">
                        <table class="table table-condesed table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th width="6%">ID Transaksi</th>
                                    <th width="10%">Nominal</th>
                                    <th width="15%">Tanggal</th>
                                    <th width="30%">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                if ($pengeluaran->num_rows() == 0) {
                                    echo "<tr align='center' bgcolor='pink'><td  colspan='10'><b>BELUM ADA DATA!</b></td></tr>";
                                } else {
                                    foreach ($pengeluaran->result_array() as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $row['id_pengeluaran'] ?></td>
                                            <td><?php echo $row['nominal'] ?></td>
                                            <td><?php echo $row['tgl_pengeluaran'] ?></td>
                                            <td class="text-danger"><?php echo $row['keterangan'] ?></td>
                                        </tr>
                                <?php
                                    }
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