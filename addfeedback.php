<?php 
$connect_error='Sorry';
$con=mysqli_connect("localhost","root","root","DS")or die($connect_error);
?>
<body>
<div class="mainbody">

<?php
if (empty($_POST)=== false){
	
	$Name=$_POST['rname'];
	$Detail=$_POST['rcollege'];
	$Rule=$_POST['rrule'];
	
if (empty($Name)=== true || empty($Detail)=== true || empty($Rule)=== true) 
	{
		include_once 'error/Emptyfield.php';
		//echo "<script type='text/javascript'>window.location.href='Emptyfield.php';</script>";
		include 'contact.php';
		//$errors[]='user name not there ';
		//echo "$Name";
	}
	else
	{
			//echo 'hi';
			
 		$sql="INSERT INTO `feedback` (`fname`,`femail`,`feedback`)
			VALUES
			('$_POST[rname]','$_POST[rcollege]','$_POST[rrule]')";

			mysqli_query($con,$sql);

			echo '<script>alert("Feedback Recorded");</script>';
			echo "<script type='text/javascript'>window.location.href='feed.php';
			</script>";
	}
	
}?>
</div>