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
                
                <form action="questionwisemarks.php" method="post">
                <div class="col-sm-5">
                        <label for="student id" class="col-sm-2 col-form-label">Semester</label>
                        <input type="number" class="form-control" name="sid" id="sid" placeholder="Semester" required><br/>
                        <label for="student id" class="col-sm-2 col-form-label">Internal(1/2)/Model</label>

                        <!-- <div class="col-sm-5"> -->
                           
                            <input type="number" class="form-control" name="iid" id="iid" placeholder="Internal" required><br/>
                            <label for="course name" class="col-sm-2 col-form-label">Course Name</label><br/><br/>
                            <input type="text" class="form-control" name="cid" id="cid" placeholder="course Name" required><br/>


                    
                           <a href="questionwisemarks.php"><input type="submit" class="btn btn-xs btn-warning" name="edit" id="edit" value="Update Marks" required></a><br/><br/>
                         
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