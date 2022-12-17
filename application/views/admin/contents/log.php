<?php
//include 'library/database.php'; 
?>

<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1>History </h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    History
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="tblbayar">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aktivitas</th>
                                    <th>Pelaku Aktivitas</th>
                                    <th>Waktu Aktivitas</th>
                                    <th>Keterangan</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = $this->uri->segment('3') + 1;
                                foreach ($data_log as $dl) { ?>

                                    <tr>
                                        <td><?php echo $i++;
                                            ?></td>
                                        <td><?php echo $dl->aktivitas;
                                            ?></td>
                                        <td><?php echo $dl->pelaku_aktivitas;
                                            ?></td>
                                        <td><?php echo $dl->tanggal_aktivitas;
                                            ?></td>
                                        <td><?php echo $dl->detail_aktivitas;
                                            ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">

                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/' ?>">1</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/10' ?>">2</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/20' ?>">3</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/30' ?>">4</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/40' ?>">5</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/50' ?>">6</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/60' ?>">7</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/70' ?>">8</a></li>
                                <li class="page-item"><a class="page-link" href="<?php echo base_url() . 'admin/log/80' ?>">9</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>