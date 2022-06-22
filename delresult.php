
<?php
       
       include('server.php');       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'student':
					$query = 'DELETE FROM result
							WHERE
							Student_ID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Result Successfully Deleted.");
				window.location = "addresult.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>