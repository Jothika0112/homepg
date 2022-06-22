<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <title>All courses | Student</title>
</head>

<body>

</body>

</html>
<?php

include('server.php');

?>

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
                    <li><a href="studentregister.php">Log Out</a></li>
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
                    <li><a href="viewresult.php">View Results</a></li>
                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Courses</h1>
                <div class="col-lg-12">
                    <h2>List of all Courses</h2> <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Semester</th>
                                    <th>Faculty_Name</th>
                                    <th>Subject_Code</th>
                                    <th>Subject_Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT * FROM courses';
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));

                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    echo '<tr>';
                                    echo '<td>' . $row['Semester'] . '</td>';
                                    echo '<td>' . $row['Faculty_Name'] . '</td>';
                                    echo '<td>' . $row['Subject_Code'] . '</td>';
                                    echo '<td>' . $row['Subject_Name'] . '</td>';

                                    echo '</tr> ';
                                }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

</body>