<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Form Petugas </h1>
        </div>
    </div>
    <hr />
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-money"></i></div>
                <h5>Update Data Petugas</h5>
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
                <?php foreach ($petugas as $pt) { ?>
                    <form class="form-horizontal" action="<?php echo base_url() . 'Admin/updateAksi/' . $pt['id_petugas'] ?>" method="post" id="popup-validation">
                        <div class="form-group">
                            <label class="control-label col-lg-4">ID Petugas</label>
                            <div class="col-lg-4">
                                <input type="text" name="id_petugas" id="id_petugas" class="form-control chzn-select" tabindex="2" readonly="" value="<?php echo $pt['id_petugas']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-4">Nama Lengkapp</label>
                            <div class="col-lg-4">
                                <input type="text" name="nama" id="nama" class="validate[required] form-control" value="<?php echo $pt['nama']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4">No KTP</label>
                            <div class="col-lg-4">
                                <input type="text" name="no_ktp" id="no_ktp" value="<?php echo $pt['no_ktp']; ?>" class="validate[required] form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4">Alamat</label>
                            <div class="col-lg-4">
                                <textarea name="alamat" id="alamat" class="form-control" value="" width="500"><?php echo $pt['alamat']; ?></textarea>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4">No Hp</label>
                            <div class="col-lg-4">
                                <input type="text" name="no_hp" dat a-mask="+62 999 9999 9999" value="<?php echo $pt['no_hp']; ?>" class="form-control" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4">Username</label>
                            <div class="col-lg-4">
                                <input type="text" name="username" id="username" value="<?php echo $pt['username']; ?>" class="form-control chzn-select" tabindex="2">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4">Password</label>
                            <div class="col-lg-4">
                                <input type="password" name="password" value="<?php echo $pt['password']; ?>" class="form-control chzn-select" tabindex="2">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-4">Konfirmasi Password</label>
                            <div class="col-lg-4">
                                <input type="password" name="password2" class="form-control chzn-select" tabindex="2">

                            </div>
                        </div>

                        <div style="text-align:center" class="form-actions no-margin-bottom">
                            <button type="submit" class="btn btn-grad btn-success btn-lg ">
                                <i class="icon-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>


</div>