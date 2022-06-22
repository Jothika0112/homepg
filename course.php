<?php
       
       include('server.php');

       ?>
       <body>

       <?php
       $sid=$_POST['sid'];
       $fid=$_POST['fid'];
       $cid=$_POST['cid'];
       $cname = $_POST['cname'];
       

   switch($_GET['action']){
       case 'cs':			
               $query = "INSERT INTO courses
               (Semester,Faculty_Name,Subject_code,Subject_Name)
               VALUES ('".$sid."','".$fid."','".$cid."','".$cname."')";
               mysqli_query($db,$query)or die ('<script type="text/javascript">
               alert("Subject Code is already Registered,Please use another Subject Code");
               window.location = "addcourse.php";
           </script>');
           
       break;
                   
       }
        ?>
        <script type="text/javascript">
			alert("Subject Registered Successfully");
			window.location = "addcourse.php";
		</script>
        </body>
