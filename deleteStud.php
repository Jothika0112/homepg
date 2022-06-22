<?php
       
       include('server.php');

       ?>
       <body>

       <?php
    //    $fname = $_POST['fname'];
    //    $lname = $_POST['lname'];
    //    $email = $_POST['email'];
       $id=$_POST['id'];

   switch($_GET['action']){
       case 'del':			
               $query = "delete from student where ID='$id'";
              
               mysqli_query($db,$query)or die ('Error in updating Database');
           
       break;
                   
       }
        ?>
        <script type="text/javascript">
			alert("Student Deleted Successfully");
			window.location = "teacherDash.php";
		</script>
        </body>
