<?php
require_once('Process/bdd.php');


$sql = "SELECT id, title, start, end, color FROM jadwal ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Jadwal Ngasdos</title>
	<?php include "css.php"; ?>
	<link href='assets/fullcalendar/css/fullcalendar.css' rel='stylesheet' />
	<!-- Custom CSS -->
	<style>
		#calendar {
			max-width: 800px;
		}
		.col-centered{
			float: none;
			margin: 0 auto;
		}
	</style>
</head>
<body>

	<div id="wrapper">
		<?php include "navbar.php"; ?>
		<?php include "nav.php"; ?>
		<div id="page-wrapper">

			<div class="row">
				<!-- Page Header -->
				<div class="col-lg-12">
					<h1 class="page-header">Jadwal Ngasdos</h1>
				</div>
				<!--End Page Header -->
			</div>

			<div class="row">
				<!-- Welcome -->
				<div class="col-lg-12">
					<div class="alert alert-info" align="left">
						<i class="fa fa-folder-open"></i>&nbsp;olla ! kalender responsive, tinggal drag and drop aja agan <b><a href="UserProfile.php"><?php echo $r['NamaUser'] ?></a></b>
					</div>
				</div>
				<!--end  Welcome -->
			</div>


			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4><i class="fa fa-calendar fa-fw"></i> Kalender</h4>
					</div>
					<div class="panel-body">
					<div id="calendar" class="col-centered"></div>
					</div>
				</div>
				<!-- /.row -->

				<!-- Modal -->
				<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<form class="form-horizontal" method="POST" action="Process/Input/addEvent.php">

								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Tambah Jadwal</h4>
								</div>
								<div class="modal-body">

									<div class="form-group">
										<label for="title" class="col-sm-3 control-label">Nama Jadwal</label>
										<div class="col-sm-9">
											<input type="text" name="title" class="form-control" id="title" placeholder="Nama Jadwal">
										</div>
									</div>
									<div class="form-group">
										<label for="color" class="col-sm-3 control-label">Warna Penanda</label>
										<div class="col-sm-9">
											<select name="color" class="form-control" id="color">
												<option value="">Choose</option>
												<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
												<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
												<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
												<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
												<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
												<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
												<option style="color:#000;" value="#000">&#9724; Black</option>

											</select>
										</div>
									</div>
											<input type="hidden" name="start" class="form-control" id="start" readonly>
											<input type="hidden" name="end" class="form-control" id="end" readonly>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary"><i class="fa fa-plus fa-fw"></i> Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>



				<!-- Modal -->
				<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<form class="form-horizontal" method="POST" action="Process/Update/editEventTitle.php">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
								</div>
								<div class="modal-body">

									<div class="form-group">
										<label for="title" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
											<input type="text" name="title" class="form-control" id="title" placeholder="Title">
										</div>
									</div>
									<div class="form-group">
										<label for="color" class="col-sm-2 control-label">Color</label>
										<div class="col-sm-10">
											<select name="color" class="form-control" id="color">
												<option value="">Choose</option>
												<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
												<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
												<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
												<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
												<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
												<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
												<option style="color:#000;" value="#000">&#9724; Black</option>

											</select>
										</div>
									</div>
									<div class="form-group"> 
										<div class="col-sm-offset-2 col-sm-10">
											<div class="checkbox">
												<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
											</div>
										</div>
									</div>

									<input type="hidden" name="id" class="form-control" id="id">


								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<center>
							<hr/>
							Created at &copy; <u>CV.Source Code&#8482;</u> &amp; <u>Mr.Suru</u>
							<hr/>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery Version 1.11.1 -->
		<script src="assets/fullcalendar/js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="assets/fullcalendar/js/bootstrap.min.js"></script>

		<!-- FullCalendar -->
		<script src='assets/fullcalendar/js/moment.min.js'></script>
		<script src='assets/fullcalendar/js/fullcalendar.min.js'></script>

		<script>

			$(document).ready(function() {

				$('#calendar').fullCalendar({
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay'
					},
					editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
			$start = explode(" ", $event['start']);
			$end = explode(" ", $event['end']);
			if($start[1] == '00:00:00'){
				$start = $start[0];
			}else{
				$start = $event['start'];
			}
			if($end[1] == '00:00:00'){
				$end = $end[0];
			}else{
				$end = $event['end'];
			}
			?>
			{
				id: '<?php echo $event['id']; ?>',
				title: '<?php echo $event['title']; ?>',
				start: '<?php echo $start; ?>',
				end: '<?php echo $end; ?>',
				color: '<?php echo $event['color']; ?>',
			},
		<?php endforeach; ?>
		]
	});

				function edit(event){
					start = event.start.format('YYYY-MM-DD HH:mm:ss');
					if(event.end){
						end = event.end.format('YYYY-MM-DD HH:mm:ss');
					}else{
						end = start;
					}

					id =  event.id;

					Event = [];
					Event[0] = id;
					Event[1] = start;
					Event[2] = end;

					$.ajax({
						url: 'Process/Update/editEventDate.php',
						type: "POST",
						data: {Event:Event},
						success: function(rep) {
							if(rep == 'OK'){
								
							}else{
								alert('Tidak tersimpan. coba lagi.'); 
							}
						}
					});
				}

			});

		</script>
		<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
		<script src="assets/scripts/siminta.js"></script>
	</body>
	</html>
