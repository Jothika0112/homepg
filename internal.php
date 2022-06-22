<?php

include('server.php');



?>
<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Result</title>
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
                <a class="navbar-brand" href="teacherDash.php">Student Result Management</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="teacherRegister.php">Log Out</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="addcourse.php">Courses</a></li>
                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Add Results</h1>
                
                <form action="studentidwise.php" method="post">
                <div class="col-sm-5">
                        <label for="student id" class="col-sm-2 col-form-label">Semester</label>
                        <input type="number" class="form-control" name="sid" id="sid" placeholder="Semester" required><br/>
                        <label for="student id" class="col-sm-2 col-form-label">Internal(1/2)/Model</label>

                        <!-- <div class="col-sm-5"> -->
                           
                            <input type="number" class="form-control" name="iid" id="iid" placeholder="Internal" required><br/>

                        <!-- </div> -->
                   
                    <!-- <div class="form-group row">
                        <label for="student id" class="col-sm-2 col-form-label">Student ID</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="rid" id="rid" placeholder="Student ID" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cname" class="col-sm-2 col-form-label">Class Incharge Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="cname" id="cname" placeholder="Course Name" required>
                        </div>
                    </div> -->

                    
                           <a href="studentidwise.php"><input type="submit" class="btn btn-xs btn-warning" name="edit" id="edit" value="Update Marks" required></a><br/><br/>
                           <!-- <a href="studentidwise.php"><input type="submit" class="btn btn-xs btn-warning" name="edit" id="edit" value="Update Internal-2 Marks" required></a><br/><br/>
                           <a href="studentidwise.php"><input type="submit" class="btn btn-xs btn-warning" name="edit" id="edit" value="Update Model Marks" required></a> -->
                           </div>

                    <!-- <div class="form-group row">
                        
                        <label for="subject1" class="col-sm-2 col-form-label">Subject 1</label>
                       
                   
                            <div class="col-sm-5">
                            <input type="number" min="0" class="form-control" name="s1" id="s1" placeholder="Subject 1 marks" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject2" class="col-sm-2 col-form-label">Subject 2</label>

                        <div class="col-sm-5">
                            <input type="number" min="0" class="form-control" name="s2" id="s2" placeholder="Subject 2 marks" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject3" class="col-sm-2 col-form-label">Subject 3</label>

                        <div class="col-sm-5">
                            <input type="number" min="0" class="form-control" name="s3" id="s3" placeholder="Subject 3 marks" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject4" class="col-sm-2 col-form-label">Subject 4</label>

                        <div class="col-sm-5">
                            <input type="number" min="0" class="form-control" name="s4" id="s4" placeholder="Subject 4 marks" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>

                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="status" id="status" placeholder="Pass/Fail" required>
                        </div>
                    </div> --> 
                    <!-- <?php
                //   $query = 'SELECT Student_ID FROM result';
                //   $result = mysqli_query($db, $query) or die (mysqli_error($db));
                //    $row = mysqli_fetch_assoc($result);
                //       //while ($row = mysqli_fetch_assoc($result)) {
                //      echo '<a  type="button" class="btn btn-xs btn-warning" href="internal1.php?  id='.$row['Student_ID'] . '"> EDIT </a> ';
                //    //echo '<a  type="button" class="btn btn-xs btn-warning" href="internal1.php?  "> EDIT </a>';
                //      //}
                  ?> -->
                   </form>
                <!-- <h2 class="sub-header">All Results</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Semester</th>
                                <th>Student ID</th>
                                <th>Course_Name</th>
                                <th>Subject 1</th>
                                <th>Subject 2</th>
                                <th>Subject 3</th>
                                <th>Subject 4</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            // <?php
                            //$query = 'SELECT * FROM result';
                            //$result = mysqli_query($db, $query) or die(mysqli_error($db));

                            // while ($row = mysqli_fetch_assoc($result)) { -->

                            //     echo '<tr>';
                            //     echo '<td>' . $row['Semester'] . '</td>';
                            //     echo '<td>' . $row['Student_ID'] . '</td>';
                            //     echo '<td>' . $row['Course_Name'] . '</td>';
                            //     echo '<td>' . $row['Sub1'] . '</td>';
                            //     echo '<td>' . $row['Sub2'] . '</td>';
                            //     echo '<td>' . $row['Sub3'] . '</td>';
                            //     echo '<td>' . $row['Sub4'] . '</td>';
                            //     echo '<td>' . $row['Status'] . '</td>';
                            //     echo '<td> ';
                            //     echo ' <a  type="button" class="btn btn-xs btn-warning" href="editresult.php?  id='.$row['Student_ID'] . '"> EDIT </a> ';
                            //     echo ' <a  type="button" class="btn btn-xs btn-danger" href="delresult.php?type=student&delete & id=' . $row['Student_ID'] . '">DELETE </a> </td>';


                            //     echo '</tr> ';
                            // }
                            // ?>

                        </tbody>
                    </table>
                </div> -->
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