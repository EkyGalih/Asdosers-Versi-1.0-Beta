<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa &amp; Nilai</title>
	<?php include "css.php"; ?>
</head>
<body>
	<div id="wrapper">
		<?php include "nav.php"; ?>
		<?php include "navbar.php"; ?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-header">Mahasiswa &amp; Nilai</h1>
				</div>
				<div class="row">
					<!-- Welcome -->
					<div class="col-lg-12">
						<div class="alert alert-info">
							<i class="fa fa-folder-open"></i>&nbsp;ola!<br/>Page ini berisikan daftar kelas anda dan nilai mahasiswa yang harus anda masukkan.<br/> silahkan masukkan data mahasiswa terlebih dahulu kemudian baru anda memasukkan nilai masing-masing mahasiswa, muca gracias <b><a href="UserProfile.php"><?php echo $r['NamaUser'] ?></a></b>
						</div>
					</div>
					<!--end  Welcome -->
				</div>
				<div class="row">
					<div class="col-lg-12 pull-right">
					<?php
									if ($_SESSION['Pesan'] ) {
										?>
										<div class="alert alert-success" id="Pesan">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<?php echo $_SESSION['Pesan'] ?>
										</div>
										<?php
									}
									$_SESSION['Pesan'] = "";
									?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4><i class="fa fa-pencil fa-fw"></i> Input Data</h4>
							</div>
							<div class="panel-body">
								<form method="POST" action="Process/Input/Process4.php" onsubmit="return validateForm()">
									<div class="col-sm-5">
										<label>Nim Mahasiswa</label>
										<input type="text" name="NimMahasiswa" maxlength="10" placeholder="exp: 1310520051" class="form-control" required><br/>
									</div>
									<div class="col-sm-5">
										<label>Kelas/Kelompok</label>
										<select name="kelas" class="form-control" required>
											<option>Kelas/Kelompok</option>
											<?php
											include "connect.php";
											$sql = "SELECT * FROM tb_kelas ORDER BY id_kelas ASC";
											$hasil = $con->query($sql);
											if ($hasil == FALSE) {
												trigger_error("Syntax mysql salah: " . $sql . "Error: " . $con->error, E_USER_ERROR);
											} else {
												$no = 1;
												while ($n = $hasil->fetch_array()) {
													?>
													<option value="<?php echo $n['Kelas'] ?>"><?php echo $n['Kelas'] ?></option>
													<?php
													$no++;
												}
											}
											?>
										</select><br/>
									</div>
									<div class="col-sm-12">
										<label>Mata Kuliah</label>
										<select name="NamaMakul" class="form-control" required>
											<option>Nama Matakuliah</option>
											<?php
											include "connect.php";
											$sql = "SELECT * FROM tb_kelas ORDER BY id_kelas ASC";
											$hasil = $con->query($sql);
											if ($hasil == FALSE) {
												trigger_error("Syntax mysql salah: " . $sql . "Error: " . $con->error, E_USER_ERROR);
											} else {
												$no = 1;
												while ($n = $hasil->fetch_array()) {
													?>
													<option value="<?php echo $n['NamaMakul'] ?>"><?php echo $n['NamaMakul'] ?></option>
													<?php
													$no++;
												}
											}
											?>
										</select><br/>
									</div>
									<div class="col-sm-12">
										<label>Nama Mahasiswa</label>
										<input type="text" name="NamaMahasiswa" placeholder="Eky Galih" class="form-control" required><br/>
									</div>
									<div class="col-sm-3">
										<label>Tugas</label>
										<input type="number" name="Tugas" placeholder="00" class="form-control" style="width: 80px;" required><br/>
									</div>
									<div class="col-sm-3">
										<label>Uts</label>
										<input type="number" name="Uts" placeholder="00" class="form-control" style="width: 80px;" required=""><br/>
									</div>
									<div class="col-sm-3">
										<label>Uas</label>
										<input type="number" name="Uas" placeholder="00" class="form-control" style="width: 80px;" required><br/>
									</div>
									<div class="col-sm-6">
										<button data-toggle="tooltip" data-placement="top" title="Hitung Nilai Mahasiswa" type="submit" class="btn btn-circle btn-primary btn-sm" title="Hitung">
											<i class="fa fa-plus fa-fw"></i>
										</button>
									</div>
									<!-- </div> -->
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4><i class="fa fa-users fa-fw"></i> Daftar Kelas Anda</h4>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-hover table-bordered table-striped">
										<thead>
											<tr align="center">
												<td>No</td>
												<td>Mata Kuliah</td>
												<td>Kelas</td>
												<td>Aksi</td>
											</tr>
										</thead>
										<?php
										$query = "SELECT * FROM tb_kelas";
										$rows = $con->query($query);
										if ($rows == FALSE) {
											trigger_error("Syntax mysql salah: " . $query . "Error: " . $con->error, E_USER_ERROR);
										}else{
											$no=1;
											while ($r = $rows->fetch_array()) {
												?>
												<tbody>
													<tr>
														<td align="center"><?php echo $no ?></td>
														<td><?php echo $r['NamaMakul'] ?></td>
														<td><?php echo $r['Kelas'] ?></td>
														<td align="center">
															<a href="Kelas.php" target="_blank" data-toggle="tooltip" data-placement="top" title="Detail Kelas" class="btn btn-primary btn-sm">
																<i class="fa fa-eye fa-fw"></i>
															</a>
														</td>
													</td>
												</tr>
											</tbody>
											<?php
											$no++;
										}
									}
									?>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4><i class="fa fa-list fa-fw"></i> Daftar Nilai</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-hover table-bordered table-striped">
									<thead>
										<tr align="center">
											<td>No</td>
											<td>Nim Mahasiswa</td>
											<td>Nama Mahasiswa</td>
											<td>Mata Kuliah</td>
											<td>Kelas/Kelompok</td>
											<td>Tugas</td>
											<td>Uts</td>
											<td>Uas</td>
											<td>NA</td>
											<td>NR</td>
											<td>Grade</td>
											<td>Keterangan</td>
											<td>Action</td>
										</tr>
									</thead>
									<?php
									include "connect.php";
									$sql = "SELECT * FROM tb_nilai ORDER BY id ASC";
									$hasil = $con->query($sql);
									if ($hasil == FALSE) {
										trigger_error("Syntax mysql salah: " . $sql . "Error: " . $con->error, E_USER_ERROR);
									} else {
										$no = 1;
										while ($n = $hasil->fetch_array()) {
											?>
											<tbody>
												<tr>
													<td align="center"><?php echo $no ?></td>
													<td><?php echo $n['NimMahasiswa'] ?></td>
													<td align="center"><?php echo $n['NamaMahasiswa'] ?></td>
													<td align="center"><?php echo $n['Makul'] ?></td>
													<td align="center"><?php echo $n['Kelas'] ?></td>
													<td align="center"><?php echo $n['Tugas'] ?></td>
													<td align="center"><?php echo $n['Uts'] ?></td>
													<td align="center"><?php echo $n['Uas'] ?></td>
													<td align="center"><?php echo $n['NA'] ?></td>
													<td align="center"><?php echo $n['NR'] ?></td>
													<td align="center"><?php echo $n['Grade'] ?></td>
													<td align="center"><?php echo $n['ket'] ?></td>
													<td align="center">
														<a data-toggle="tooltip" data-placement="top" title="Edit" href="Update/UpdateNilaiMahasiswa.php?id=<?php echo $n['id'] ?>" title="Edit">
															<font color="orange"><i class="fa fa-edit fa-fw"></i></font>
														</a> |
														<a data-toggle="modal" data-target="#DeleteConfirm" title="Hapus">
															<i class="fa fa-trash-o fa-fw"></i>
														</a>
														<div id="DeleteConfirm" class="modal fade" role="dialog" style="display: none;">
															<div class="modal-dialog" style="margin-top: 260.5px;">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">×</button>
																		<h5>Kamu yakin ingin mengapus data ini?</h5>
																	</div>
																	<form method="POST" action="Hapus/HapusNilaiMahasiswa.php">
																		<input type="hidden" name="id" value="<?php echo $n['id'] ?>">
																		<div class="modal-footer">
																			<button type="submit" class="btn btn-success btn-sm">
																				Ya
																			</button>
																			<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
																				Tidak
																			</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
											<?php
											$no++;
										}
									}
									?>
								</table>
								<div class="col-sm-6">
									<form action="Print/excel.php" method="POST">
										Cetak Berdasarkan : <select name="makul" style="width: 200px; height: 30px; border-radius: 20px;"">
										<option>-</option>
										<?php
										include "connect.php";
										$sql = "SELECT * FROM tb_kelas";
										$hasil = $con->query($sql);
										if ($hasil == FALSE) {
											trigger_error("Syntax mysql salah: " . $sql . "Error: " . $con->error, E_USER_ERROR);
										} else {
											while ($n = $hasil->fetch_array()) {
												?>
												<option value="<?php echo $n['NamaMakul'] ?>"><?php echo $n['NamaMakul'] ?></option>
												<?php
											}
										}
										?>
									</select>
									<select name="kelas" style="width: 70px; height: 30px; border-radius: 20px;"">
										<option>-</option>
										<?php
										include "connect.php";
										$sql = "SELECT * FROM tb_kelas";
										$hasil = $con->query($sql);
										if ($hasil == FALSE) {
											trigger_error("Syntax mysql salah: " . $sql . "Error: " . $con->error, E_USER_ERROR);
										} else {
											while ($n = $hasil->fetch_array()) {
												?>
												<option value="<?php echo $n['Kelas'] ?>"><?php echo $n['Kelas'] ?></option>
												<?php
											}
										}
										?>
									</select>
									<button type="submit" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Cetak Nilai">
										<i class="fa fa-print fa-fw"></i> Cetak
									</button>
								</form>
							</div>
							<div class="col-sm-2 pull-right">
								<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#EmptyConfirm">
									<i class="fa fa-times fa-fw"></i> Kosongkan Data
								</button>
								<div id="EmptyConfirm" class="modal fade" role="dialog" style="display: none;">
									<div class="modal-dialog" style="margin-top: 260.5px;">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">×</button>
												<h5>Tindakan ini menyebabkan semua data pada tabel akan terhapus! Anda Yakin?</h5>
											</div>
											<div class="modal-footer">
												<a href="Hapus/EmptyNilai.php" class="btn btn-danger btn-sm">
													Ya
												</a>
												<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">
													Tidak
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include "CP.php"; ?>
</div>
</div>
<?php include "js.php"; ?>
<script>
	$(document).ready(function(){
		setTimeout(function(){
			$("#Pesan").fadeIn('slow');
		}, 500);
	});
	setTimeout(function(){
		$("#Pesan").fadeOut('slow');
	}, 2500);
</script>
</body>
</html>