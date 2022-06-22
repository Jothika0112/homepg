
<?php

include('server.php');

?>
<body>
<?php
$sid=$_POST['rid'];
$fname=$_POST['fid'];
$sem=$_POST['semid'];
$cname = $_POST['cname'];

$query = 'UPDATE courses set Semester="'.$sem.'",Faculty_Name ="'.$fname.'",Subject_Code="'.$sid.'",Subject_Name ="'.$cname.'"
					 WHERE
					Subject_Code ="'.$sid.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Subject Updated Successfully.");
			window.location = "addcourse.php";
		</script>
</body>