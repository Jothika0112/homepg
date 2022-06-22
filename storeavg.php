<?php
       
       include('server.php');
      
       ?>
       <body>

       <?php
      
    
        // $seme=$_GET['semes'];   
         $seme=$sem;                  
        // $stuid=$_GET['studid'];
        //  $coid=&$cid;
        //  $inte1=&$int1;
        //  $inte2=&$int2;
        //  $modele=&$model;
        //  $avge=&$avg;

        //  $coid=$_GET['course'];
        //  $inte1=$_GET['internal1'];
        //  $inte2=$_GET['internal2'];
        //  $modele=$_GET['model'];
        
         echo("<script>console.log('N value: " . $seme . "');</script>");               
         $N = count($stuid);
         //echo("<script>console.log('N value: " . $N . "');</script>");
         for($i=0; $i < $N; $i++)
         { 
      
   

     
                    $query2 = "INSERT INTO averageresult
               (Semester,Course_name,Student_id,internal_1,internal_2,model,average)
               VALUES ('".$seme[$i]."','".$coid[i]."','".$stuid[$i]."','".$inte1[$i]."','".$inte2[$i]."','".$modele[$i]."','".$avge[$i]."')";
                  $result2 = mysqli_query($db, $query2) or die( '<script type="text/javascript">
                  alert("Student is not Registered,Please register first");
                  window.location = "firstpg.php";
              </script>');
            }
               
        ?>
        <script type="text/javascript">
			alert("Result Added Successfully");
			//window.location = "dispavg.php";
		</script>
        </body>
