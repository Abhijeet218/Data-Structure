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
			<h3>Spanning Tree</h3>
			<p>A spanning tree is a subset of Graph G, which has all the vertices covered with minimum possible number of edges. Hence, a spanning tree does not have cycles and it cannot be disconnected..
<br>
By this definition, we can draw a conclusion that every connected and undirected Graph G has at least one spanning tree. A disconnected graph does not have any spanning tree, as it cannot be spanned to all its vertices.</p>
<img src="ST.jpg">
<p>We found three spanning trees off one complete graph. A complete undirected graph can have maximum nn-2 number of spanning trees, where n is the number of nodes. In the above addressed example, 33−2 = 3 spanning trees are possible.</p>


<h3>General Properties of Spanning Tree</h3>
<p>
We now understand that one graph can have more than one spanning tree. Following are a few properties of the spanning tree connected to graph G −
<br>
A connected graph G can have more than one spanning tree.
<br>
All possible spanning trees of graph G, have the same number of edges and vertices.
<br>
The spanning tree does not have any cycle (loops).
<br>
Removing one edge from the spanning tree will make the graph disconnected, i.e. the spanning tree is minimally connected.
<br>
Adding one edge to the spanning tree will create a circuit or loop, i.e. the spanning tree is maximally acyclic.
</p>
<h3>
Mathematical Properties of Spanning Tree</h3>
<p>
Spanning tree has n-1 edges, where n is the number of nodes (vertices).
<br>
From a complete graph, by removing maximum e - n + 1 edges, we can construct a spanning tree.
<br>
A complete graph can have maximum nn-2 number of spanning trees.
<br>
Thus, we can conclude that spanning trees are a subset of connected Graph G and disconnected graphs do not have spanning tree.
<br>
<h3>
Application of Spanning Tree
</h3>
<p>
Spanning tree is basically used to find a minimum path to connect all nodes in a graph. Common application of spanning trees are −
<br>
Civil Network Planning
<br>
Computer Network Routing Protocol
<br>
Cluster Analysis
<br>
</p>
<h3>
Minimum Spanning Tree (MST)
</h3>
<p>
In a weighted graph, a minimum spanning tree is a spanning tree that has minimum weight than all other spanning trees of the same graph. In real-world situations, this weight can be measured as distance, congestion, traffic load or any arbitrary value denoted to the edges.
<br>
</p>
<h3>
Minimum Spanning-Tree Algorithm
</h3>
<p>
We shall learn about two most important spanning tree algorithms here −
<br>
<h4>Kruskal's Algorithm
<br>
Prim's Algorithm</h4>
<br>
</p>



		</div>
		<div class="col-md-2"></div>

</body>
</html>