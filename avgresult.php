<?php
       
       include('server.php');

       ?>
       <body>

       <?php
    
         $sem=$_POST['sem'];                     
         $stuid=$_POST['stuid'];
         $internal=$_POST['internal'];        
         $sub1m = $_POST['sub1m']; 
         $sub2m = $_POST['sub2m']; 
         $sub3m = $_POST['sub3m'];      
        //  $_COOKIE['course']=$internal;
       // 
        // $msg="hii";
        $courseName="";
                         
         $N = count($stuid);
         //echo("<script>console.log('N value: " . $N . "');</script>");
         for($i=0; $i < $N; $i++)
         { 
      
   

     
                    $query2 = "INSERT INTO average
               (Semester,Course_name,Student_id,internal_1,internal_2,model)
               VALUES ('".$sem[$i]."','".$internal[$i]."','".$stuid[$i]."','".$sub1m[$i]."','".$sub2m[$i]."','".$sub3m[$i]."')";
                  $result2 = mysqli_query($db, $query2) or die( '<script type="text/javascript">
                  alert("Student is not Registered,Please register first");
                  window.location = "firstpg.php";
              </script>');
            }
               
        ?>
        <script type="text/javascript">
			alert("Result Added Successfully");
			window.location = `dispavg.php?courseName=<?=$internal[0]; ?>`;
		</script>
        </body>
