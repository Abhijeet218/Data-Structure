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

	<div class="Mainbody" >
		
		<div class="col-md-2"></div>
		<div class="Jumbotron col-md-8">
<h2 class="text-center">Feedback</h2>
<br><br>
 <form action="addfeedback.php" method="post" name="form" >

<ul class="nav ">
    <li><input name="rname" onkeypress="return event.charCode>64 && event.charCode<91 || event.charCode>96 && event.charCode<123 || event.charCode==32;" class="form-control" value="" placeholder="Name" ></li> <br>
    <li><input type="email" name="rcollege" class="form-control" value="" placeholder="Email "></li> <br>
    <li><textarea rows="0" cols="0" name="rrule" class="form-control" value="" placeholder="Feedback"></textarea></li><br>
    
    <li><button name="rbutton" class="btn btn-success" type="submit">Submit</button></li> <br>
</ul>  
</form>
		</div>
		<div class="col-md-2"></div>

</body>
</html>