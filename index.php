<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourceodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Random Image Display In MySQLi</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST" action="upload.php" enctype="multipart/form-data">
				<div class="form-group">
					<label>Image:</label>
					<input type="file" name="image" class="form-control" required="required"/>
				</div>
			<center><button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-save"></span> Upload</button></center>	
			</form>
		</div>
		<div class="col-md-8">
			<?php include 'image_display.php'?>
		</div>
	</div>
</body>	
</html>