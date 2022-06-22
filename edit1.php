<?php

include('server.php');

?>
<body>
<?php
$rid=$_POST['rid'];
$cname = $_POST['cname'];
$s1 = $_POST['s1'];
$s2 = $_POST['s2'];
$s3 = $_POST['s3'];
$s4 = $_POST['s4']; 
$status = $_POST['status'];
$query = 'UPDATE result set Course_Name ="'.$cname.'",
					Sub1 ="'.$s1.'", Sub2="'.$s2.'",
					Sub3="'.$s3.'",Sub4='.$s4.', 
					Status="'.$status.'" WHERE
					Student_ID ="'.$rid.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Result Updated Successfully.");
			window.location = "teacherDash.php";
		</script>
</body>