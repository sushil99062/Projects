<?php


$server='localhost';
$user = 'root';
$password = '';
$db ='coronavirus';
$con=mysqli_connect($server,$user,$password,$db);

if($con)
{
	?>
	<script>
		alert("connection succesful");
	</script>
	<?php
}
else
{
	?>
	<script>
		alert(" NO connection");
	</script>
	<?php
}


?>