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
	<script>
	function myFunction() 
	{ 
		var xx=document.getElementById("No").value;
		var t=0;
		var matrix=new Array(xx);
		for (t = 0 ;t < xx ;t++)
		{	
		matrix[t]=new Array(xx);
		}
    	var parent=new Array(xx);
    	var i;
    	var a="";
    	var min;
    	var u=0;
    	var v=0;
    	var i;
    	var noOfEdges=1;
    	var total=0;
    	var ds,ds1,ds2;
    	
    	for( i = 0; i < xx; i++)
    	{
			for( j = 0; j < xx; j++)
			{	
				ds1=(i+1);
				ds2=((j+1)*(i+1));
				ds=ds1+""+ds2;
				matrix[i][j] =document.getElementById(ds).value;
			}
			
		}

    	for( i = 0; i < xx; i++)
    	{
			parent[i] = 0;
			for( j = 0; j < xx; j++)
			{
				if(matrix[i][j]==0)
				{
					matrix[i][j] = 999;
					
				}
				
				
			}
			
		}

    	while(noOfEdges < xx)
    	{
			min = 999;
			
			for(i = 0; i < 6; i++){
				
				for( j = 0; j < 6; j++){
					
					if(matrix[i][j] < min){
						
						min = matrix[i][j];
						u = i;
						v = j;
						
					}
					
				}
				
			}
			
			while(parent[u]!=0){
				u = parent[u];
				
			}
			
			while(parent[v]!=0){
				v = parent[v];
				
			}
			
			if(v!=u){
				
				noOfEdges++;
				document.getElementById("demo").innerHTML += u+" -> "+v+" Min : "+min+"<br>";
				total += parseInt(min);
				
				parent[v] = u;
				
			}
			
			matrix[u][v] = 999;
			matrix[v][u] = 999;
			
		}
		document.getElementById("demo1").innerHTML = "The Minimum Weight is "+total;
	}	
	</script>

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
		<h3>Enter 0 If there is No edge.</h3>
		<?php
		$Name=$_GET['hh'];
		echo'<form>
		<br><br>
		<input type="hidden" value="'.$Name.'" name="hh" id="No">
		 <table class="table table-bordered">
		  <thead>
		  <td></td>
		  ';
		   for($a=0;$a<$Name;$a++)
		   {
		   		echo '<td>'.$_GET[$a].' ('.$a.')</td>';
		   }
		   echo '</thead>';
		   for ($i=1;$i<=$Name;$i++)
		   {
		   		echo '<tr>';
		   		echo '<td>'.$_GET[($i-1)].'('.($i-1).')</td>';
		   		for($j=1;$j<=$Name;$j++)
		   		{
		   			
		   		
		   		
		   			
		   		echo '
		   		<td>
		   		<input type="text" class="form-control" name="'.$i.''.$i*$j.'" id="'.$i.''.$i*$j.'">
		   		</td>';
		   		
		   	}
		   		echo '</tr>';

		   }   	
	
		
		?>
		</table>
		<br>
		<input class="btn btn-success btn-lg" type="button" value="SEND" onclick="myFunction()"> 
    	</form>
    	<h3>The Distance from one node To another</h3>
    	<br><br>
    	<p id="demo"></p>
    	<br>

    	<p id="demo1"></p>
    	</div>
		<div class="col-md-4"></div>
	</div>

</body>
</html>