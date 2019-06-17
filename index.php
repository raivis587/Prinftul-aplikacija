<!DOCTYPE html>
<?php include 'db.php';
$sql = "select * from uzdevumi1";
$rows = $db->query($sql);
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>To-Do List Aplikācija</title>
	</head>
	<body>
		<center> <h1 style="margin-top: 70px; margin-right: 170px;">To-Do List Aplikācija</h1> </center>
		<div class="container">
			<div class="row"  style="margin-top: 70px;">
				
				<div class="col-md-10 col-md-offset-1">
					
					<button style="display: block; margin: 0 auto;" type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Pievienot Jaunu</button>
					<hr><br>
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Pievienot jaunu uzdevumu</h4>
									<button  type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<form method="post" action="add.php">
										<div class="form-group">
											
											<label>Uzdevums</label>
											<input type="text" required name="task" class="form-control">
										</div>
										<input type="submit" name="send" value="Pievienot uzdevumu" class="btn btn-success">
									</form>
								</div>
								
							</div>
						</div>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Nr.</th>
								
								<th>Uzdevums</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php while($row = $rows -> fetch_assoc()): ?>
								
								
								<th><?php echo $row ['Nr'] ?></th>
								
								<td class="col-md-15"><?php echo $row ['uzdevums'] ?></td>
								<td><a href="update.php?Nr=<?php echo $row ['Nr'];?>" class="btn btn-success">Rediģēt</a></td>
								<td><a href="delete.php?Nr=<?php echo $row ['Nr'];?>" class="btn btn-danger">Izdzēst</a></td>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>