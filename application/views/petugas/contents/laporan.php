<div class="inner" style="min-height: 700px;">
    <div class="row">
        <div class="col-lg-12">
            <h1> Manajemen Laporan </h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Laporan data pemasukan
                </div>
                <div class="panel-body">
                    <form method="post" action="cetakPemasukan">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <button class="btn btn-md btn-success" type="submit" name="cetak">
                                    <i class="icon-print"></i> Cetak
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    Laporan data pengeluaran
                </div>
                <div class="panel-body">
                    <form method="post" action="cetakPengeluaran">

                        <div class="form-group">
                            <div class="col-lg-2">
                                <button class="btn btn-md btn-success" type="submit" name="cetak">
                                    <i class="icon-print"></i> Cetak
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- <div class="panel panel-info">
                <div class="panel-heading">
                    Laporan data kas masjid
                </div>
                <div class="panel-body">
                    <form method="post" action="cetakKas">
                        <div class="form-group">
                            <div class="col-lg-2">
                                <button class="btn btn-md btn-success" type="submit" name="cetak">
                                    <i class="icon-print"></i> Cetak
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
</div>