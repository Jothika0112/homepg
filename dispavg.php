<?php

include('server.php');
// include('avgmarks.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result | Student</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <script type="text/javascript">
        function display(){
            alert("Average updated successfully");
        }
        </script>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="teacherDash.php">Student Result Management</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="studentRegister.php">Log Out</a></li>
                </ul>

            </div>
        </div>
    </nav>

   <form action="dispavg.php" method="post">
            <h2>Average Result</h2> <br>
            <!-- <input type="submit" class="btn btn-xs btn-warning" name="edit" id="edit" value="Update Average" required> -->
            <button onclick="display()">Update</button>
                                <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                 <th>Student ID</th>
                                 <th>Course Name</th>
                                    <th>Semester</th>
                                    <th>Internal-1</th>
                                    <th>Internal-2</th>
                                    <th>Model</th>
                                    <th>Average</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $course_name=$_GET['courseName'];
                                echo("<script>console.log('course_name value: " . $course_name . "');</script>");
                                $query = 'SELECT * FROM average where Course_name="'.$course_name.'"';
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                                

                                while ($row = mysqli_fetch_assoc($result)) {
                                   
                                    $sem= $row['Semester'];
                                   
                                   // echo("<script>console.log('N value: " . $sem . "');</script>");
                                    $cid=$row['Course_name'];
                                    $sid=$row['Student_id'];
                                    $int1=$row['internal_1'];
                                    $int2=$row['internal_2'];
                                    $model=$row['model'];
                                 
                                    
                                    
                                    echo '<tr>';
                                    echo '<td>' . $row['Student_id'] . '</td>';
                                    echo '<td>' . $row['Course_name'] . '</td>';
                                    echo '<td>' . $row['Semester'] . '</td>';
                                    echo '<td>' . $row['internal_1'] . '</td>';
                                    echo '<td>' . $row['internal_2'] . '</td>';
                                    echo '<td>' . $row['model'] . '</td>';
                                    $sum = $row['internal_1'] + $row['internal_2'] + $row['model'];
                                    $avg =ceil( $sum / 3);
                                    echo '<td>' . $avg . '</td>';
                                    echo("<script>console.log('avg value: " . $avg . "');</script>");

                                    echo '</tr> ';

                                    
                    $query2 = "INSERT INTO averageresult
                    (Semester,Course_name,Student_id,internal_1,internal_2,model,average)
                    VALUES ('".$row['Semester']."','".$row['Course_name']."','".$row['Student_id']."','".$row['internal_1']."','".$row['internal_2']."','".$row['model']."','". $avg ."')";
                       $result2 = mysqli_query($db, $query2) or die( '<script type="text/javascript">
                       alert("Student is not Registered,Please register first");
                       window.location = "firstpg.php";
                   </script>');
                                }

                                // header("Location: storeavg.php?semes=".$sem);
                                // header("Location: storeavg.php?studid=".$sid);
                                // header("Location: storeavg.php?course=".$cid);
                                // header("Location: storeavg.php?internal1=".$int1);
                                // header("Location: storeavg.php?internal2=".$int2);
                                // header("Location: storeavg.php?model=".$model);

                                ?>

                            </tbody>
                        </table>
                    </div>
                            </form>