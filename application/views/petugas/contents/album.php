<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Galeri Foto </h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Upload gambar disini
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-lg-8">
                            <form enctype="multipart/form-data" method="post" action="upload">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-group">
                                        <span class="btn btn-file btn-info">
                                            <span class="fileupload-new">Pilih Gambar</span>
                                            <span class="fileupload-exists">Ganti</span>
                                            <input type="file" name="fupload" required />
                                        </span>
                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Hapus</a>

                                        <br /> <br />
                                        <div class="col-lg-3">
                                            <i class="icon-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-success" name="kirim">
                                        <i class="icon-upload"></i> Unggah gambar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-condesed">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Foto</th>
                                <th>Tanggal Upload</th>
                                <th width="4%">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($foto->result_array() as $row) {

                            ?>
                                <tr>
                                    <form method="get" action="library/proses-upload.php">
                                        <td><?php echo $i++ ?></td>
                                        <td><img src="<?php echo base_url(); ?>/assets/foto/<?php echo $row['file_name'] ?>" width="auto" height="150"></td>
                                        <td><?php echo $row['tgl_upload'] ?></td>
                                        <td>
                                            <a href="deletefoto/<?php echo $row['id_album'] ?>" class="btn btn-grad  btn-sm btn-danger" onclick="return confirm('Yakin akan dihapus?'); ">
                                                <i class="icon-trash"> Hapus</i>
                                            </a>
                                        </td>
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