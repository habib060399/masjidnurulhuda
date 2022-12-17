<div style="text-align: center;">
    <h2>
        LAPORAN DATA PENGELUARAN
    </h2>
    <br><br><br>
</div>
<div class="panel-body">
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
        <button type="button" onclick="window.print()">Cetak</button>
    </div>
</div>