<!DOCTYPE html>
<html>
<head>
	<title>Data Structure</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="Bootstrap/js/bootstrap.min.js"></script>
	<style>
		.Mainbody{
			padding-top: 50px;
			padding-left: 50px;
			
		}
		.Mainbody1{
			color: red;
		}
		.navbar-header a{
			padding-top: 10px;
		}

	</style>

</head>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class=" navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>  
				</button>
			<a class="navbar-header" href="index.php">Data Structure</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-right navbar-nav">
					<li><a href="main.php">Spanning Tree</a></li>
					<li><a href="feed.php">Feedback</a></li>
				</ul>
			</div>
			</div>
		</nav>
<body>

	<div class="Mainbody">
		
		<div class="col-md-4"></div>
		<div class="Jumbotron col-md-4">
		<h3>Enter the Name of the Places</h3>
		<?php
		$Name=$_GET['Names'];
		echo'<form method="get" action="ds1.php">
		<br><br>
		<input type="hidden" value="'.$Name.'" name="hh">
		';

		for($i=0;$i<$Name;$i++)
		{
			echo '

				Name of Place '.$i.'<input type="text" class="form-control" name="'.$i.'"><br>
			';

		}
		?>
		<input class="btn btn-success btn-lg" type="submit"> 
    	</form>
    	</div>
    	<div class="col-md-4"></div>

	</div>

</body>
</html>