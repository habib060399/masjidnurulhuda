<div>
    <h2 style="text-align: center;">
        DATA PEMASUKAN MASJID NURUL HUDA
    </h2>
</div>
<br><br><br><br>
<div class="panel-body">
    <div class="table-responsive" style="align-items: center;">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="default">
                    <th>ID Transaksi</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                </tr>
            </thead>

            <?php
            foreach ($getpemasukan->result_array() as $row) {

            ?>
                <tbody>
                    <tr>
                        <td width="13%"><?php echo $row['id_pemasukan'] ?></td>
                        <td width="13%"><?php echo $row['tgl_pemasukan'] ?></td>
                        <td width="17%"><?php echo rupiah($row['totalbayar']) ?></td>
                    </tr>
                <?php } ?>
                </tr>
                </tbody>
        </table>
        <button type="button" onclick="window.print()">Print</button>
    </div>
</div>