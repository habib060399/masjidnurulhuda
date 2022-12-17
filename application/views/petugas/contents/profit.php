<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1>Profit Kas Masjid</h1>
        </div>
    </div>
    <hr />

    <!-- ISI KONTEN -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Total Dana Masjid yang telah terkumpul
                </div>
                <div class="panel-body">
                    <ul class="timeline">

                        <?php
                        foreach ($profit->result_array() as $row) {
                            $nama = $row['nama_kategori'];
                            $id = $row['id_dana'];
                        ?>
                            <?php
                            if ($id % 2 == 1) {
                                echo "<li>
                                        <div class='timeline-badge warning'>
                                            <i class='icon-thumbs-up '></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                                <h4 class='timeline-title'>" . $nama . "</h4>
                                                <p>
                                                    <small class='text-muted'><i class='icon-money icon-1x'></i> Total uang yang sudah terkumpul senilai</small>
                                                </p>
                                            </div>
                                            <div class='timeline-body'>
                                            <span class='badge'>"  . rupiah($row['total']) . "</span> 
                                            </div>
                                        </div>
                                    </li>";
                            } else if ($id % 2 == 0) {
                                echo "<li class='timeline-inverted'>
                                        <div class='timeline-badge info'>
                                            <i class='icon-smile '></i>
                                        </div>
                                        <div class='timeline-panel'>
                                            <div class='timeline-heading'>
                                            <h4 class='timeline-title'>" . $nama . "</h4>
                                                <p>
                                                    <small class='text-muted'><i class='icon-money icon-1x'></i> Total uang yang sudah terkumpul senilai</small>
                                                </p>
                                            </div>
                                            <div class='timeline-body'>
                                            <span class='badge'>" . rupiah($row['total']) . "</span>
                                            </div>
                                        </div>
                                    </li>";


                            ?>
                        <?php
                            }
                        }
                        ?>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- AKHIR KONTEN -->



</div>