<?php

include('server.php');

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
                <a class="navbar-brand" href="studentDash.php">Student Result Management</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="studentRegister.php">Log Out</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="studentDash.php">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="viewcourse.php">View Courses</a></li>
                    <li><a href="#">View Results</a></li>

                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">View Result</h1>
                <form method="POST" action=" ">
                    <div class="form-group row">
                        <label for="student id" class="col-sm-2 col-form-label">Register Number</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="sid" id="sid" placeholder="Student ID" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cname" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="sem" id="sem" placeholder="Semester" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cname" class="col-sm-2 col-form-label">Internal</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="internal" id="internal" placeholder="Internal" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">View Result </button>
                </form>


                <h2 class="sub-header">Result</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Course_Name</th>
                                <!-- <th>Subject 1</th>
                                <th>Subject 2</th>
                                <th>Subject 3</th>
                                <th>Subject 4</th> -->
                                <th>Marks</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['sid']) && isset($_POST['sem']) && isset($_POST['internal'])) {
                                    $id=$_POST['sid'];
                                    $sem=$_POST['sem'];
                                    $internal=$_POST['internal'];
                                $query = "SELECT * FROM internal_one where Student_id='$id' AND Semester='$sem' AND Internals='$internal'";

                                $result2 = mysqli_query($db, $query) or die('<script type="text/javascript">
                                alert("Result Not Found");
                                window.location = "viewresult.php";
                            </script>');
                               
                                while ($row = mysqli_fetch_array($result2)) {

                                    echo '<tr>';
                                    echo '<td>' . $row['Student_id'] . '</td>';
                                    echo '<td>' .$row['Subjectone_name']. '</td>';
                                    echo '<td>' .$row['Subjectone_mark']. '</td>';
                                    if($row['Subjectone_mark'] >= 50){
                                    echo '<td>Pass</td>';
                                    }
                                    else{
                                        echo '<td>Fail</td>';
                                    }
                                    echo '</tr> ';
                                    echo '<tr>';
                                    echo '<td>' . $row['Student_id'] . '</td>';
                                   
                                    echo '<td>' .$row['Subjecttwo_name']. '</td>';
                                    echo '<td>' .$row['Subjecttwo_mark']. '</td>';
                                    if($row['Subjecttwo_mark'] >= 50){
                                        echo '<td>Pass</td>';
                                        }
                                        else{
                                            echo '<td>Fail</td>';
                                        }
                                  
                                    echo '</tr> ';
                                    echo '<tr>';
                                    echo '<td>' . $row['Student_id'] . '</td>';
                                  
                                    echo '<td>' .$row['Subjectthree_name']. '</td>';
                                    echo '<td>' .$row['Subjectthree_mark']. '</td>';
                                    if($row['Subjectthree_mark'] >= 50){
                                        echo '<td>Pass</td>';
                                        }
                                        else{
                                            echo '<td>Fail</td>';
                                        }
                                    echo '</tr> ';
                                    echo '<tr>';
                                    echo '<td>' . $row['Student_id'] . '</td>';
                                  
                                    echo '<td>' .$row['Subjectfour_name']. '</td>';
                                    echo '<td>' .$row['Subjectfour_mark']. '</td>';
                                    if($row['Subjectfour_mark'] >= 50){
                                        echo '<td>Pass</td>';
                                        }
                                        else{
                                            echo '<td>Fail</td>';
                                        }
                                    echo '</tr> ';
                                    echo '<tr>';
                                    echo '<td>' . $row['Student_id'] . '</td>';
                                    
                                    echo '<td>' .$row['Subjectfive_name']. '</td>';
                                    echo '<td>' .$row['Subjectfive_mark']. '</td>';
                                    if($row['Subjectfive_mark'] >= 50){
                                        echo '<td>Pass</td>';
                                        }
                                        else{
                                            echo '<td>Fail</td>';
                                        }
                                    echo '</tr> ';
                                    echo '<tr>';
                                    echo '<td>' . $row['Student_id'] . '</td>';
                                    
                                    echo '<td>' .$row['Subjectsix_name']. '</td>';
                                    echo '<td>' .$row['Subjectsix_mark']. '</td>';
                                    if($row['Subjectsix_mark'] >= 50){
                                        echo '<td>Pass</td>';
                                        }
                                        else{
                                            echo '<td>Fail</td>';
                                        }
                                    echo '</tr> ';

                                    

                                }
                            }
                        
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/scrollReveal.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>