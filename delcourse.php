
<?php
       
       include('server.php');       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'course':
					$query = 'DELETE FROM courses
							WHERE
							Subject_Code = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Subject Successfully Deleted.");
				window.location = "addcourse.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>