<li class="panel">
    <a href="<?php echo base_url('petugas/index') ?>">
        <i class="icon-home"></i> Dashboard
    </a>
</li>

<li class="panel">
    <a href="<?php echo base_url('petugas/profit') ?>">
        <i class="icon-bar-chart"></i> Profit
    </a>
</li>

<li class="panel">
    <a href="<?php echo base_url('petugas/cek_transfer') ?>">
        <i class="icon-check"></i> Cek Transfer
    </a>
</li>

<li class="panel">
    <a href="<?php echo base_url('petugas/viewpembayaran') ?>">
        <i class="icon-dollar"></i> &nbsp;Pemasukan
    </a>
</li>

<li class="panel">
    <a href="<?php echo base_url('petugas/input_pengeluaran') ?>">
        <i class="icon-share"></i> Pengeluaran
    </a>
</li>

<li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#keuangan-nav">
        <i class="icon-money"> </i> Data Keuangan

        <span class="pull-right">
            <i class="icon-angle-left"></i>
        </span>
        &nbsp; <span class="label label-primary">2</span>&nbsp;
    </a>
    <ul class="collapse" id="keuangan-nav">
        <li class=""><a href="<?php echo base_url('petugas/pemasukan') ?>"><i class="icon-angle-right"></i> Data Pemasukan </a></li>
        <li class=""><a href="<?php echo base_url('petugas/pengeluaran') ?>"><i class="icon-angle-right"></i> Data Pengeluaran </a></li>
    </ul>
</li>


<li class="panel">
    <a href="<?php echo base_url('petugas/laporan') ?>">
        <i class="icon-file"></i> &nbsp;Laporan
    </a>
</li>

<li class="panel">
    <a href="<?php echo base_url('petugas/agenda') ?>">
        <i class="icon-calendar"></i> Agenda & Kegiatan
    </a>
</li>

<li class="panel">
    <a href="<?php echo base_url('petugas/album') ?>">
        <i class="icon-picture"></i> Galeri Foto
    </a>
</li>

<li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#br-nav">
        <i class="icon-briefcase"> </i> Backup & Restore

        <span class="pull-right">
            <i class="icon-angle-left"></i>
        </span>
        &nbsp; <span class="label label-primary">2</span>&nbsp;
    </a>
    <ul class="collapse" id="br-nav">
        <li class=""><a href="<?php echo base_url('petugas/backup') ?>"><i class="icon-angle-right"></i> Backup </a></li>
        <li class=""><a href="<?php echo base_url('petugas/restore') ?>"><i class="icon-angle-right"></i> Restore </a></li>
    </ul>
</li>