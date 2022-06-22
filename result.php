<?php
       
       include('server.php');

       ?>
       <body>

       <?php
    
         $sem=$_POST['sem'];                     
         $stuid=$_POST['stuid'];
         $internal=$_POST['internal'];
         $sub1 = $_POST['sub1'];
         $sub2 = $_POST['sub2'];
         $sub3 = $_POST['sub3'];
         $sub4 = $_POST['sub4']; 
         $sub5 = $_POST['sub5']; 
         $sub6 = $_POST['sub6']; 
         $sub1m = $_POST['sub1m']; 
         $sub2m = $_POST['sub2m']; 
         $sub3m = $_POST['sub3m']; 
         $sub4m = $_POST['sub4m']; 
         $sub5m = $_POST['sub5m']; 
         $sub6m = $_POST['sub6m']; 
                         
         $N = count($stuid);
         //echo("<script>console.log('N value: " . $N . "');</script>");
         for($i=0; $i < $N; $i++)
         { 
      
   

     
                    $query2 = "INSERT INTO internal_one
               (Semester,Student_ID,Internals,Subjectone_name,Subjectone_mark,Subjecttwo_name,Subjecttwo_mark,Subjectthree_name,Subjectthree_mark,Subjectfour_name,Subjectfour_mark,Subjectfive_name,Subjectfive_mark,Subjectsix_name,Subjectsix_mark)
               VALUES ('".$sem[$i]."','".$stuid[$i]."','".$internal[$i]."','".$sub1."','".$sub1m[$i]."','".$sub2."','".$sub2m[$i]."','".$sub3."','".$sub3m[$i]."','".$sub4."','".$sub4m[$i]."','".$sub5."','".$sub5m[$i]."','".$sub6."','".$sub6m[$i]."')";
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
