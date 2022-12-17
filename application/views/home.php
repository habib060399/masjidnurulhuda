<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selamat Datang - Masjid Nurul Huda</title>

	<link rel="apple-touch-icon" href="<?php base_url() ?>assets/apple-touch-icon.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fontAwesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/light-box.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl-carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/templatemo-style.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
	<div class="page-content">
		<section id="featured" class="content-section">
			<div class="section-heading">
				<h1>
					<!--<php echo $_SESSION['username'];?>,--> Agenda Kegiatan<br><em>Masjid Nurul Huda</em>
				</h1>
				<p>Alhamdulillah, kami ucapkan terimakasih atas
					<br>Nikmat Allah yang Maha Kuasa.
				</p>
			</div>
			<div class="table-responsive">
				<table class="table table-condesed table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kegiatan</th>
							<th>Waktu</th>
							<th>Tanggal</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php

						if ($agenda->num_rows() == 0) {
							echo "<tr align='center' bgcolor='pink'><td  colspan='6'><b>BELUM ADA DATA!</b></td></tr>";
						} else {
							$id = 1;
							foreach ($agenda->result_array() as $row) {
						?>
								<tr>
									<td><?php echo $id++ ?></td>
									<td><?php echo $row['judul']; ?></td>
									<td><?php echo $row['jam_awal'] . "s/d" . $row['jam_akhir']; ?></td>
									<td><?php echo $row['tgl_awal'] . "s/d" . $row['tgl_akhir']; ?></td>
									<td><?php echo $row['keterangan'] ?></td>
								</tr>
						<?php }
						} ?>
					</tbody>
				</table>
			</div>

			<div class="table-responsive">
				<table class="table table-bordered table-condesed">
					<thead>
						<tr>
							<th width="1%">No</th>
							<th width="30%">Foto</th>
							<th width="30%">Tanggal Upload</th>
						</tr>
					</thead>
					<tbody>
						<?php

						if ($album->num_rows() == 0) {
							echo "<tr align='center' bgcolor='pink'><td  colspan='6'><b>BELUM ADA DATA!</b></td></tr>";
						} else {
							$id = 1;
							foreach ($album->result_array() as $row) {
						?>
								<tr>
									<td><?php echo $id++ ?></td>
									<td> <img src="<?php echo base_url() ?>assets/foto/<?php echo $row['file_name'] ?>" alt="" width="60%" height="60%"></td>
									<td><?php echo $row['tgl_upload'] ?></td>
								</tr>

						<?php }
						} ?>
					</tbody>
				</table>
			</div>

		</section>
		<section id="projects" class="content-section">
			<div class="section-heading">
				<h1>Jadwal<br><em>Adzan</em></h1>
				<p>Alhamdulillah, kami ucapkan terimakasih atas
					<br>Nikmat Allah yang Maha Kuasa.
				</p>
				<div class="section-content">
					<div class="masonry">
						<div class="row">
							<div class="item">
								<div class="col-md-12">
									<iframe src="https://www.jadwalsholat.org/adzan/monthly.php?id=259" height="900" width="430" frameborder="0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>

		<section id="datakeuangan" class="content-section">
			<div class="section-heading">
				<h1>Data Keuangan<br><em>Masjid Nurul Huda</em></h1>
				<p>Alhamdulillah, kami ucapkan terimakasih atas
					<br>Nikmat Allah yang Maha Kuasa.
				</p>
				<div>
					<br>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Data uang yang masuk ke kas masjid
							</div>
							<div class="icons"><i class="icon-money"></i></div>
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
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr class="default">
											<th>ID Transaksi</th>
											<th>Tanggal</th>
											<th>Nominal</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($donasi->result_array() as $d) {
										?>
											<tr id="donasi">
												<td width="17%"><?= $d['id_transfer'] ?></td>
												<td width="17%"><?= $d['tgl_transfer'] ?></td>
												<td width="17%"><?= rupiah($d['jumlah'])  ?></td>
											</tr>
										<?php
										}
										?>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Data uang yang keluar dari kas masjid
							</div>
							<div class="panel-body">
								<!-- FORM SEARCH -->
								<!--<div class="row">
                                        <div class="col-xs-9">
                                            &nbsp;
                                        </div> 
										<div class="col-lg-3 form-group input-group">
                                            <input type="text" placeholder="ketikkan sesuatu..." class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                        </div>-->
								<!-- END FORM SEARCH -->
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
											$id = 1;
											if ($pengeluaran->num_rows() == 0) {
												echo "<tr align='center' bgcolor='pink'><td  colspan='10'><b>BELUM ADA DATA!</b></td></tr>";
											} else {
												foreach ($pengeluaran->result_array() as $row) {

											?>
													<tr>
														<td><?php echo $id++; ?></td>
														<td><?php echo $row['id_pengeluaran'] ?></td>
														<td><?php echo $row['nominal'] ?></td>
														<td><?php echo $row['tgl_pengeluaran'] ?></td>
														<td class="text-danger"><?php echo $row['keterangan'] ?></td>
													</tr>
											<?php }
											} ?>
										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="donate" class="content-section">
			<div class="section-heading">
				<h1>Donasi<br><em>Sedekah</em></h1>
				<p>Alhamdulillah, kami ucapkan terimakasih atas
					<br>Nikmat Allah yang Maha Kuasa.
				</p>
			</div>
			<div style="border:0; padding:10px; width:760px; height:auto; text-align:left;">
				<form action="<?php echo base_url() . 'User/tambahAksi'; ?>" method="POST" enctype="multipart/form-data">
					<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
						<tr height="46">
							<td width="10%"> </td>
							<td width="25%"> </td>
							<td width="65%">
								<font size="4"><b>Form Donasi/Sedekah</b></font>
							</td>
						</tr>
						<!-- <tr height="46">
							<td> </td>
							<td>ID Transaksi</td>
							<td><input name="id_transaksi" type="text" value="" class="form-control" readonly /></td>
						</tr>
						<tr height="46">
							<td>
							</td>
							<td>ID User</td>
							<td><input type="text" name="id_user" size="35" maxlength="6" value="" class="form-control" readonly="readonly" /></td>
						</tr> -->
						<tr height="46">
							<td> </td>
							<td>Id Transfer</td>
							<td><input type="text" name="id_transfer" size="35" readonly maxlength="6" value="<?php echo idtf(); ?>" class="form-control" /></td>
						</tr>
						<tr height="46">
							<td> </td>
							<td>Nama Lengkap</td>
							<td><input type="text" name="nama" size="35" maxlength="20" value="" class="form-control" /></td>
						</tr>
						<tr height="46">
							<td> </td>
							<td>Bank</td>
							<td>
								<select name="nama_bank" type="text" value="" class="form-control">
									<option value="">==Pilih Bank ==</option>
									<option value="Bank Mandiri">Bank Mandiri</option>
									<option value="Bank Mandiri">Bank Mandiri</option>
									<option value="Bank Bukopin">Bank Bukopin</option>
									<option value="Bank Danamon">Bank Danamon</option>
									<option value="Bank Mega">Bank Mega</option>
									<option value="Bank CIMB Niaga">Bank CIMB Niaga</option>
									<option value="Bank Permata">Bank Permata</option>
									<option value="Bank Sinarmas">Bank Sinarmas</option>
									<option value="Bank QNB">Bank QNB</option>
									<option value="Bank Lippo">Bank Lippo</option>
									<option value="Bank UOB">Bank UOB</option>
									<option value="Panin Bank">Panin Bank</option>
									<option value="Citibank">Citibank</option>
									<option value="Bank ANZ">Bank ANZ</option>
									<option value="Bank Commonwealth">Bank Commonwealth</option>
									<option value="Bank Maybank">Bank Maybank</option>
									<option value="Bank Maspion">Bank Maspion</option>
									<option value="Bank J Trust">Bank J Trust</option>
									<option value="Bank QNB">Bank QNB</option>
									<option value="Bank KEB Hana">Bank KEB Hana</option>
									<option value="Bank Artha Graha">Bank Artha Graha</option>
									<option value="Bank OCBC NISP">Bank OCBC NISP</option>
									<option value="Bank MNC">Bank MNC</option>
									<option value="Bank DBS">Bank DBS</option>
									<option value="BCA">BCA</option>
									<option value="BNI">BNI</option>
									<option value="BRI">BRI</option>
									<option value="BTN">BTN</option>
									<option value="Bank DKI">Bank DKI</option>
									<option value="Bank BJB">Bank BJB</option>
									<option value="Bank BPD DIY">Bank BPD DIY</option>
									<option value="Bank Jateng">Bank Jateng</option>
									<option value="Bank Jatim">Bank Jatim</option>
									<option value="Bank BPD Bali">Bank BPD Bali</option>
									<option value="Bank Sumut">Bank Sumut</option>
									<option value="Bank Nagari">Bank Nagari</option>
									<option value="Bank Riau Kepri">Bank Riau Kepri</option>
									<option value="Bank Sumsel Babel">Bank Sumsel Babel</option>
									<option value="Bank Lampung">Bank Lampung</option>
									<option value="Bank Jambi">Bank Jambi</option>
									<option value="Bank Kalbar">Bank Kalbar</option>
									<option value="Bank Kalteng">Bank Kalteng</option>
									<option value="Bank Kalsel">Bank Kalsel</option>
									<option value="Bank Kaltim">Bank Kaltim</option>
									<option value="Bank Sulsel">Bank Sulsel</option>
									<option value="Bank Sultra">Bank Sultra</option>
									<option value="Bank BPD Sulteng">Bank BPD Sulteng</option>
									<option value="Bank Sulut">Bank Sulut</option>
									<option value="Bank NTB">Bank NTB</option>
									<option value="Bank NTT">Bank NTT</option>
									<option value="Bank Maluku">Bank Maluku</option>
									<option value="Bank Papua">Bank Papua</option>
								</select>
							</td>
						</tr>
						<tr height="46">
							<td> </td>
							<td>Rekening</td>
							<td><input name="no_rekening" type="text" value="" class="form-control" /></td>
						</tr>
						<tr height="46">
							<td> </td>
							<td>Tanggal</td>
							<td><input type="text" name="tgl_transfer" class="form-control" value="<?php echo date('Y-m-d'); ?>" required readonly /></td>
						</tr>
						<tr height="46">
							<td> </td>
							<td>Jenis</td>
							<td>
								<select name="id_kategori" class="form-control">
									<?php
									foreach ($kategori->result_array() as $row) {
									?>
										<option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
									<?php
									}
									?>
								</select>
							</td>
						</tr>
						<tr height="46">
							<td> </td>
							<td>Jumlah</td>
							<td>
								<input type="text" name="jumlah" onkeypress="return hanyaAngka(event, false)" class="form-control" required />
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<div class="form-group">
									<br>
									<b>Bukti Pembayaran</b><br />
									<input type="file" name="image" accept="image/png, image/jpeg, image/jpg, image/gif">
							</td>
						</tr>
			</div>
			</td>
			</tr>
			<tr height="46">
				<td> </td>
				<td> </td>
				<td>
					<input type="submit" name="Submit" id="Submit" value="Submit" class="btn btn-grad btn-md btn-primary">
				</td>
			</tr>
			<input name="status" type="text" value="tertunda" hidden />
			</table>
			</form>
			<br><br>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="default">
							<th>ID</th>
							<th>Nama</th>
							<th>No. Rekening</th>
							<th>Bank</th>
							<th>Jumlah</th>
							<th>Tanggal</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($donasi->result_array() as $d) {
						?>
							<tr id="donasi">
								<td><?= $d['id_transfer'] ?></td>
								<td><?= $d['nama'] ?></td>
								<td><?= $d['no_rekening'] ?></td>
								<td><?= $d['nama_bank'] ?></td>
								<td><?= rupiah($d['jumlah'])  ?></td>
								<td><?= $d['tgl_transfer'] ?></td>
								<td><?= $d['status'] ?></td>
							</tr>
						<?php
						}
						?>
						</tr>
					</tbody>
				</table>
			</div>
	</div>
	</section>

	<section id="contact" class="content-section">
		<div class="section-heading">
			<h1>Hubungi<br><em>Kami</em></h1>
			<p>Alhamdulillah, kami ucapkan terimakasih atas
				<br>Nikmat Allah yang Maha Kuasa.
			</p>
		</div>
		<div style="border:0; padding:10px; width:760px; height:auto; text-align:left;">
			<form action="action-input-data.php" method="POST" name="form-input-data">
				<table width="760" border="2" align="center" cellpadding="0" cellspacing="0">
					<tr height="46">
						<td>&nbsp;Whatsapp</td>
						<td>&nbsp;+62 8234-0566-987 </td>
					</tr>
					<tr height="46">
						<td>&nbsp;Facebook</td>
						<td>&nbsp;Nurul Huda desa stowe brang</td>
					</tr>
					<tr height="46">
						<td>&nbsp;Instagram</td>
						<td>&nbsp;Nurulhudastober</td>
					</tr>
					<tr height="46">
						<td>&nbsp;No rekening</td>
						<td>&nbsp;0093-01-042775-50-1</td>
					</tr>
			</form>
		</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')
	</script>

	<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>

	<script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>

	<script language="javascript">
		function hanyaAngka(e, decimal) {
			var key;
			var keychar;
			if (window.event) {
				key = window.event.keyCode;
			} else
			if (e) {
				key = e.which;
			} else return true;

			keychar = String.fromCharCode(key);
			if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
				return true;
			} else
			if ((("0123456789").indexOf(keychar) > -1)) {
				return true;
			} else
			if (decimal && (keychar == ".")) {
				return true;
			} else return false;
		}
	</script>

	<script>
		// Hide Header on on scroll down
		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('header').outerHeight();

		$(window).scroll(function(event) {
			didScroll = true;
		});

		setInterval(function() {
			if (didScroll) {
				hasScrolled();
				didScroll = false;
			}
		}, 250);

		function hasScrolled() {
			var st = $(this).scrollTop();

			// Make sure they scroll more than delta
			if (Math.abs(lastScrollTop - st) <= delta)
				return;

			// If they scrolled down and are past the navbar, add class .nav-up.
			// This is necessary so you never see what is "behind" the navbar.
			if (st > lastScrollTop && st > navbarHeight) {
				// Scroll Down
				$('header').removeClass('nav-down').addClass('nav-up');
			} else {
				// Scroll Up
				if (st + $(window).height() < $(document).height()) {
					$('header').removeClass('nav-up').addClass('nav-down');
				}
			}

			lastScrollTop = st;
		}
	</script>

</body>

</html>