<?php

include('server.php');

?>
<?php
$query = 'SELECT * FROM courses WHERE Subject_Code ='.$_GET['id'];
$result = mysqli_query($db, $query) or die(mysqli_error($db));
while ($row = mysqli_fetch_array($result)) {
    $s=$row['Semester'];
    $f=$row['Faculty_Name'];
    $m=$row['Subject_Code'];
    $i = $row['Subject_Name'];
    
}
$id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
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
                    <li class="active"><a href="teacherDash.php">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="addcourse.php">Courses</a></li>
                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Edit Courses</h1>

                <form method="POST" action="editc.php">
                <div class="form-group row">
                        <label for="student id" class="col-sm-2 col-form-label">Subject Code</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  value="<?php echo $m; ?>" name="rid" id="rid" placeholder="Subject Code" readonly="readonly">
                        </div>
                    </div>
                <div class="form-group row">
                        <label for="student id" class="col-sm-2 col-form-label">Faculty Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  value="<?php echo $f; ?>" name="fid" id="fid" placeholder="Faculty Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="student id" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control"  value="<?php echo $s; ?>" name="semid" id="semid" placeholder="Semester" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cname" class="col-sm-2 col-form-label">Subject Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $i; ?>" name="cname" id="cname" placeholder="Subject Name" required>
                        </div>
                    </div>
                    
                   

                    <button type="submit" class="btn btn-primary mb-2">Update Course </button>
                </form>

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