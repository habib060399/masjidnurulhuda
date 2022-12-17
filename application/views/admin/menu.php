<li class="panel">
    <a href="<?php echo base_url('admin/index') ?>">
        <i class="icon-home"></i> Dashboard
    </a>
</li>

<li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pembayaran-nav">
        <i class="icon-user"> </i> Data Petugas

        <span class="pull-right">
            <i class="icon-angle-left"></i>
        </span>
        &nbsp; <span class="label label-info">2</span>&nbsp;
    </a>
    <ul class="collapse" id="pembayaran-nav">
        <li class=""><a href="<?php echo base_url('admin/data_petugas') ?>"><i class="icon-angle-right"></i> Input Data Baru </a></li>
        <li class=""><a href="<?php echo base_url('admin/listdatapetugas') ?>"><i class="icon-angle-right"></i> Lihat Data Petugas </a></li>
    </ul>
</li>


<!-- <li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#user-nav">
        <i class="icon-group"> </i> Data User

        <span class="pull-right">
            <i class="icon-angle-left"></i>
        </span>
        &nbsp; <span class="label label-warning">2</span>&nbsp;
    </a>
    <ul class="collapse" id="user-nav">
        <li class=""><a href="<?php //echo base_url('admin/inputdatauser') 
                                ?>"><i class="icon-angle-right"></i> Input Data Baru </a></li>
        <li class=""><a href="<?php //echo base_url('admin/listdatauser') 
                                ?>"><i class="icon-angle-right"></i> List Data User </a></li>
    </ul>
</li> -->

<li class="panel ">
    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#ab-nav">
        <i class="icon-th"> </i> Data Kategori

        <span class="pull-right">
            <i class="icon-angle-left"></i>
        </span>
        &nbsp; <span class="label label-primary">2</span>&nbsp;
    </a>
    <ul class="collapse" id="ab-nav">
        <li class=""><a href="<?php echo base_url('admin/kategori') ?>"><i class="icon-angle-right"></i> Input Kategori </a></li>
        <li class=""><a href="<?php echo base_url('admin/listdatakategori') ?>"><i class="icon-angle-right"></i> List Kategori </a></li>
    </ul>
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
        <li class=""><a href="<?php echo base_url('admin/backup') ?>"><i class="icon-angle-right"></i> Backup </a></li>
        <li class=""><a href="<?php echo base_url('admin/restore') ?>"><i class="icon-angle-right"></i> Restore </a></li>
    </ul>
</li>


<li class="panel">
    <a href="<?php echo base_url('admin/laporan') ?>">
        <i class="icon-print"></i> &nbsp;Cetak
    </a>
</li>

<li class="panel">
    <a href="<?php echo base_url('admin/log') ?>">
        <i class="icon-calendar"></i> History
    </a>
</li>