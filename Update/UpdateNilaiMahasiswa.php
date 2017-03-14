<!DOCTYPE html>
<html>
<head>
	<title>Update Nilai Mahasiswa</title>
	<?php include "css.php"; ?>
</head>
<body>
	<div id="wrapper">
		<?php include "navbar.php"; ?>
		<?php include "nav.php"; ?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-header">Update Nilai Mahasiswa</h1>
				</div>
				<div class="row">
					<!-- Welcome -->
					<div class="col-lg-12">
						<div class="alert alert-info">
							<i class="fa fa-folder-open"></i><b>&nbsp;Ola ! Silahkan Update Nilai Mahasiswa yang salah anda masukkan sebelumnya, <b>Gracias</b>
						</div>
					</div>
					<!--end  Welcome -->
				</div>
				<div class="row">
					<div class="col-sm-8">
						<?php
						include "../connect.php";
						$query = $con->query("SELECT * FROM tb_nilai WHERE id=$_GET[id]");
						$r = mysqli_fetch_array($query);
						?>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4><i class="fa fa-pencil fa-fw"></i> Update Nilai Mahasiswa <i><b><u><?php echo $r['NamaMahasiswa'] ?></u></b></i></h4>
							</div>
							<div class="panel-body">
								<form method="POST" action="../Process/Update/Process2.php">
									<div class="col-sm-3">
										<input type="hidden" name="id" value="<?php echo $r['id'] ?>">
										<label>Nilai Tugas</label>
										<input type="text" name="Tugas" value="<?php echo $r['Tugas'] ?>" class="form-control"><br/>
									</div>
									<div class="col-sm-3">
										<label>Nilai UTS</label>
										<input type="text" name="Uts" value="<?php echo $r['Uts'] ?>" class="form-control"><br/>
									</div>
									<div class="col-sm-3">
										<label>Nilai UAS</label>
										<input type="text" name="Uas" value="<?php echo $r['Uas'] ?>" class="form-control"><br/>
									</div>
									<div class="col-sm-12">
									<button data-toggle="tooltip" data-placement="top" title="Ubah Data" type="submit" class="btn btn-circle btn-success btn-sm">
										<i class="fa fa-refresh fa-fw"></i>
									</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php include "js.php"; ?>
</body>
</html>