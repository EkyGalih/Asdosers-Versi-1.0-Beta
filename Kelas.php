<!DOCTYPE html>
<html>
<head>
	<title>Data Kelas</title>
	<?php include "css.php"; ?>
</head>
<body>
	<div id="wrapper">
		<?php include "navbar.php"; ?>
		<?php include "nav.php"; ?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-header">Data Kelas</h1>
				</div>
				<div class="row">
					<!-- Welcome -->
					<div class="col-lg-12">
						<div class="alert alert-info">
							<i class="fa fa-folder-open"></i>&nbsp;Ola ! Silahkan masukkan kelas dan sks yang sudah anda dapatkan <b><a href="UserProfile.php"><?php echo $r['NamaUser'] ?></a></b>
						</div>
					</div>
					<!--end  Welcome -->
				</div>
				<div class="row">
					<div class="col-lg-12">
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
								<form method="POST" action="Process/Input/Process2.php" onsubmit="return validateForm()">
									<label>Nama Mata Kuliah</label>
									<input type="text" name="makul" placeholder="Mata Kuliah" class="form-control" required><br/>
									<label>Kelompok/Kelas</label>
									<input type="text" name="kelas" placeholder="Kelas, Exp: VII/A1" class="form-control" required><br/>
									<label>Bobot Sks</label>
									<input type="number" name="JmlSks" placeholder="0" class="form-control" style="width: 60px;" required><br/>
									<button data-toggle="tooltip" data-placement="top" title="Tambah" type="submit" class="btn btn-circle btn-success btn-sm">
										<i class="fa fa-plus fa-fw"></i>
									</button>
									<button data-toggle="tooltip" data-placement="top" title="Reload" type="reset" class="btn btn-circle btn-warning btn-sm">
										<i class="fa fa-refresh fa-fw"></i>
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4><i class="fa fa-list fa-fw"></i> Daftar kelas anda</h4>
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-hover table-bordered table-striped">
										<thead>
											<tr>
												<td>No</td>
												<td>Nama Mata Kuliah</td>
												<td>Kelompok/Kelas</td>
												<td>Jumlah Sks</td>
												<td>Action</td>
											</tr>
										</thead>
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
												<tbody>
													<tr>
														<td align="center"><?php echo $no ?></td>
														<td><?php echo $n['NamaMakul'] ?></td>
														<td align="center"><?php echo $n['Kelas'] ?></td>
														<td align="center"><?php echo $n['BobotSks'] ?></td>
														<td>
															<a data-toggle="tooltip" title="Edit" href="Update/UpdateKelas.php?id_kelas=<?php echo $n['id_kelas'] ?>">
																<font color="warning"><i class="fa fa-edit fa-fw"></i></font>
															</a>
															<a href="#" data-toggle="modal" data-target="#DeleteConfirm" title="Hapus">
																<i class="fa fa-trash-o fa-fw"></i>
															</a>
															<div id="DeleteConfirm" class="modal fade" role="dialog" style="display: none;">
																<div class="modal-dialog" style="margin-top: 260.5px;">
																	<div class="modal-content">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal">×</button>
																			<h5>Kamu yakin ingin mengapus data ini?</h5>
																		</div>
																		<form method="POST" action="Hapus/HapusKelas.php">
																			<input type="hidden" name="id_kelas" value="<?php echo $n['id_kelas'] ?>">
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
									<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#EmptyConfirm">
										<i class="fa fa-times fa-fw"></i> Kosongkan Data
									</button>
									<div id="EmptyConfirm" class="modal fade" role="dialog" style="display: none;">
										<div class="modal-dialog" style="margin-top: 260.5px;">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">×</button>
													<h4>Tindakan ini menyebabkan semua data pada tabel akan terhapus! Anda Yakin?</h4>
												</div>
												<div class="modal-footer">
													<a href="Hapus/EmptyKelas.php" class="btn btn-danger btn-sm">
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
			<?php include "CP.php"; ?>
		</div>
	</div>
</div>
<?php include "js.php"; ?>
<script>
	$(document).ready(function()
	{
		$("button").click(function()
		{
        //Say - $('p').get(0).id - this delete item id
        $("#delete_item_id").val( $('p').get(0).id );
        $('#delete_confirmation_modal').modal('show');
    });
	});
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