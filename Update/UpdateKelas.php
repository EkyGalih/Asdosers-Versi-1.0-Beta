<!DOCTYPE html>
<html>
<head>
	<title>Update Data Kelas</title>
	<?php include "css.php"; ?>
</head>
<body>
	<div id="wrapper">
		<?php include "navbar.php"; ?>
		<?php include "nav.php"; ?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-header">Update Data Kelas</h1>
				</div>
				<div class="row">
					<!-- Welcome -->
					<div class="col-lg-12">
						<div class="alert alert-info">
							<i class="fa fa-folder-open"></i><b>&nbsp;Ola ! Silahkan Update kelas dan sks yang sudah anda masukkan sebelumnya, <b>Gracias</b>
						</div>
					</div>
					<!--end  Welcome -->
				</div>
				<div class="row">
					<div class="col-sm-6">
							<?php
							include "../connect.php";
							$query = $con->query("SELECT * FROM tb_kelas WHERE id_kelas=$_GET[id_kelas]");
							$r = mysqli_fetch_array($query);
							?>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4><i class="fa fa-pencil fa-fw"></i> Update Kelas <i><b><u><?php echo $r['NamaMakul'] ?></u></b></i></h4>
							</div>
							<div class="panel-body">
								<form method="POST" action="../Process/Update/Process1.php">
									<!-- <div class="col-sm-5"> -->
									<input type="hidden" name="id_kelas" value="<?php echo $r['id_kelas'] ?>">
									<label>Nama Mata Kuliah</label>
									<input type="text" name="makul" value="<?php echo $r['NamaMakul'] ?>" class="form-control"><br/>
									<label>Kelompok/Kelas</label>
									<input type="text" name="kelas" value="<?php echo $r['Kelas'] ?>" class="form-control"><br/>
									<label>Bobot Sks</label>
									<input type="number" name="JmlSks" value="<?php echo $r['BobotSks'] ?>" class="form-control" style="width: 60px;" required><br/>
									<button data-toggle="tooltip" data-placement="top" title="Ubah Data" type="submit" class="btn btn-circle btn-success btn-sm">
										<i class="fa fa-refresh fa-fw"></i>
									</button>
									<!-- </div> -->
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