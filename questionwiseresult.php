<?php
       
       include('server.php');

       ?>
       <body>

       <?php
    
         $sem=$_POST['sem'];                     
         $stuid=$_POST['stuid'];
         $internal=$_POST['internal'];
         $cid=$_POST['cid'];
         
         $sub1m = $_POST['sub1m']; 
         $sub2m = $_POST['sub2m']; 
         $sub3m = $_POST['sub3m']; 
         $sub4m = $_POST['sub4m']; 
         $sub5m = $_POST['sub5m']; 
         $sub6m = $_POST['sub6m']; 
         $sub7m = $_POST['sub7m']; 
         $sub8m = $_POST['sub8m']; 
         $sub9m = $_POST['sub910m']; 
         $sub10m = $_POST['sub1112m']; 
         $sub11m = $_POST['sub1314m']; 
                         
         $N = count($stuid);
         //echo("<script>console.log('N value: " . $N . "');</script>");
         for($i=0; $i < $N; $i++)
         { 
      
   

     
                    $query2 = "INSERT INTO question
               (Semseter,Internal,Student_id,Course_name,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11)
               VALUES ('".$sem[$i]."','".$internal[$i]."','".$stuid[$i]."','".$cid[$i]."','".$sub1m[$i]."','".$sub2m[$i]."','".$sub3m[$i]."','".$sub4m[$i]."','".$sub5m[$i]."','".$sub6m[$i]."','".$sub7m[$i]."','".$sub8m[$i]."','".$sub9m[$i]."','".$sub10m[$i]."','".$sub11m[$i]."')";
                  $result2 = mysqli_query($db, $query2) or die( '<script type="text/javascript">
                  alert("Student is not Registered,Please register first");
                  window.location = "firstpg.php";
              </script>');
            }
               
        ?>
        <script type="text/javascript">
			alert("Result Added Successfully");
			//window.location = "studentidwise.php";
		</script>
        </body>
