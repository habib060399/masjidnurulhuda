<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Pengeluaran </h1>
        </div>
    </div>
    <hr />
    <div class="col-lg-12">
        <div class="box">
            <header class="dark">
                <div class="icons"><i class="icon-money"></i></div>
                <h5 class="text-info">Input Pengeluaran</h5>
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
                <form class="form-horizontal" action="tambah_pengeluaran" method="post" id="popup-validation">
                    <div class="form-group">
                        <label class="control-label col-lg-4">ID Transaksi</label>
                        <div class="col-lg-4">
                            <input type="text" name="idpg" value="<?php echo idpg(); ?>" class="form-control" readonly /></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Kategori</label>
                        <div class="col-lg-4">
                            <select name="id_kategori" id="sport" class="validate[required] form-control">
                                <option>--Pilih--</option>
                                <?php
                                foreach ($kategori->result_array() as $row) {
                                ?>
                                    <option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Keterangan</label>
                        <div class="col-lg-4">
                            <textarea name="ket" class="form-control">
																</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Tanggal</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <input class="form-control" type="date" name="tgl" />
                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Nominal</label>
                        <div class="col-lg-4">
                            <input type="text" name="nominal" onkeypress="return hanyaAngka(event, false)" class="form-control" required />
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div class="text-center">
                            <button type="reset" class="btn btn-md btn-grad btn-danger"><i class="icon-remove"></i> Batal</button>
                            <button type="submit" class="btn btn-md btn-grad btn-primary"><i class="icon-save"></i> Simpan</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>