<html>
	<head>
			<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mailing System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  	<style>
  <?php
  	if(isset($_GET['msg']))
  	{
  		echo "<script type='text/javascript'>";
  		echo "alert('This is invalid mail')";
  		echo "</script>";
  	}
  ?>

.form-control{
	padding: 5px;
	box-shadow: 10px;
	border: none;
	outline: none;
	border-bottom: 2px solid #999;
}
textarea{
	padding: 10px 0;
	margin-bottom: 2px solid #999;
}
  </style>
	</head>
	<body>
		<div class="col-md-9 bg-white">
				<div class="container-fluid mt-3">
			<center>
			<div class="card w-75">
				<div class="card-header">
					<h4>Compose</h4>
				</div>
				<div class="card-body">
					<div id="box">
				
									<form action="compose1.php" method="post" enctype="multipart/form-data">
										<div class="row">
										<div class="col-md-3 mt-4">
											<label for="title" class="form-control-label">To</label>
												
										</div>
										<div class="col-md-9 mt-4">
											<input type="text" name="to" class="form-control">

										</div>

										<div class="col-md-3 mt-4">
											<label for="title" class="form-control-label">Subject</label>
												
										</div>
										<div class="col-md-9 mt-4">
											<input type="text" name="subject" class="form-control">

										</div>

										<div class="col-md-3 mt-4">
											<label for="title" class="form-control-label">Message</label>
												
										</div>
										<div class="col-md-9 mt-4">
											<textarea name="msg" rows="5" class="form-control"></textarea>

										</div>
					
							
										<div class="col-md-3 mt-4">
											<label for="title" class="form-control-label">Attachment</label>
												
										</div>
										<div class="col-md-9 mt-4">
											<input type="file" name="file" class="form-control">


										</div>
										<div class="col-md-12 mt-4">
										<input type="submit" value="send" class="btn btn-primary" name="send">
										<input type="reset" value="cancel" class="btn btn-primary">
									</div>
									</div>
									</form>
					</div>
						
				</div>
			</div>
		</center>
			</div>
		</div>
	</body>
	</html>


<?php

	require_once("databaseconf.php");


?>