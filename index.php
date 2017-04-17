<!DOCTYPE html>
<html lang="en">
<head>
  <title>apercuripan.hol.es</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
	
	.container-fluid{
		text-align: justify;
	}
	
	.navbar-default {
	  background-color: #f8f8f8;
	  border-color: #e7e7e7;
	}
	
	img.tengah {
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
		
	.panel-custom {
	  border-color: #ff0000;
	}
	
	.panel-custom > .panel-heading {
	  color: #ffffff;
	  background-color: #000000;
	  border-color: #faebcc;
	}
	   
    /* Add a gray background color and some padding to the footer */
    .footer {
      background-color: #ffcc00;
    }
	
	.navbar-toggle {
	  background-color: transparent;
	  background-image: #ffffff;
	  border: 2px solid transparent;
	  border-radius: 5px;
	}
  </style>
</head>
<body>

<img src="images/apercuripan.png" class="img-responsive" style="width:100%">
<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4"></div>
			<div style="text-align:center">
				<div class="col-sm-4">
					<div class="panel panel-custom">
						<div class="panel-body">
							<?php
								error_reporting(0);
								$m=$_GET['m'];
									if($m=='')
									{
										include('start.php');
									}
									else
									{
										include($m.'.php');
									}
							?>
						</div>
					</div>
				</div>
			</div>
		<div class="col-sm-4"></div>	
	</div>
</div>
<div style="text-align:center">
<b>Created by Niko Fitrianto (16.01.63.0028)</b>
</div><br>
<img src="images/picture.png" class="img-responsive" style="width:100%">

<footer class="container-fluid text-center" style="background:#101013">
	<div class="row">
	  <div class="col-sm-2"></div>
	  <div class="col-sm-8">
	  	<div class="row">
		  <div class="col-xs-12" style="text-align:center;color:white"><h4>Support By</h4></div><br>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
				  <div class="col-xs-4"><img class="tengah img-responsive img-rounded" src="images/wu.png"></div>
				  <div class="col-xs-4"><img class="tengah img-responsive img-rounded" src="images/bs.png"></div>
				  <div class="col-xs-4"><img class="tengah img-responsive img-rounded" src="images/id.png"></div>
				</div>
			</div>
		</div>
	  </div>
	  <div class="col-sm-2"></div>
	</div>
	<br>
</footer>
</body>
</html>