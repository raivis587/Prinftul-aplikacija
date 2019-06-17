<!DOCTYPE html>
<?php include 'db.php';
$Nr= $_GET['Nr'];
$sql = "select * from uzdevumi1 where Nr='$Nr'";
$rows = $db->query($sql);
$row= $rows->fetch_assoc();
if(isset($_POST['send'])){
	$task =($_POST['task']);
	$sql2 = "update uzdevumi1 set name='$task' where Nr ='$Nr'";
	$db->query($sql2);
	
}
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<title>Rediģēšana</title>
	</head>
	<body>
		<center> <h1 style="margin-top: 70px;">Rediģēšana</h1> </center>
		<div class="container">
			<div class="row"  style="margin-top: 70px;">
				
				<div class="col-md-10 col-md-offset-1">
					
					<hr><br>
					
					<form method="post" >
						<div class="form-group">
							<label>task</label>
							<input type="text" required name="task" value="<?php echo $row ['uzdevums'];?>" class="form-control">
						</div>
						<input type="submit" name="send" value="Rediģēt" class="btn btn-success">
					</form>
					
				</div>
			</div>
		</div>
	</body>
</html>