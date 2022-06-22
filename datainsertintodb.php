<?php
       
       include('server.php');

       ?>
       <body>
<?php
 $startnumber=$_POST['enrollnumber'];
 $endnumber=$_POST['enrollendnumber'];

$subtake=$_POST['subject'];
$dd=$_POST['department'];
$yy=$_POST['year'];

 
 $classtake=$_POST['classroom'];
   
 $examdate=$_POST['examdate'];
   
$stime=$_POST['starttime'];
$etime=$_POST['endtime'];

if($subtake && $classtake && $examdate && $stime && $etime){
  foreach ($subtake as $s)
   {
     $in1=mysqli_real_escape_string($db,$s);

   }
 foreach ($classtake as $c)
  {
    $in2=mysqli_real_escape_string($db,$c);

}
$num=0;
for($i=$startnumber;$i<=$endnumber;$i++)
{

$number=$i;
$classroom=$in2;
$subject=$in1;
$starttime=$stime;
$endtime=$etime;
if($number){
mysqli_query($db,"INSERT INTO trisub(year,department,enrollnumber,subject,classroom,examdate,starttime,endtime) VALUES('$yy','$dd','$number','$subject','$classroom','$examdate','$starttime','$endtime')");
}
}
$msg="data is inserted successfully";
echo "<script type='text/javascript'>alert('$msg');</script>";
}
 ?>