<?php

include('server.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher | Dashboard</title>
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
          <li><a href="firstpg.php">Log Out</a></li>
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
        <h1 class="page-header">Teacher Dashboard</h1>

        <div class="row placeholders">
          <div class="col-xs-6 col-sm-3 placeholder">
            <a href="student.php"> <img src="assets/img/student.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            </a>
            <h4>Total Students</h4>

          </div>
          <div class="col-xs-6 col-sm-3 placeholder">
            <a href="secondpg.php"> <img src="assets/img/result.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            </a>
            <h4>Add Results</h4>

          </div>
          <div class="col-xs-6 col-sm-3 placeholder">
            <a href="deleteStudent.php?action=delete"> <img src="assets/img/student2.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            </a>
            <h4>Delete Student</h4>

          </div>
          <div class="col-xs-6 col-sm-3 placeholder">
            <a href="adminbranchyear.php"><img src="assets/img/classroom.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            </a>
            <h4>Hall Allocation</h4>

          </div>
        </div>

        <h2 class="sub-header">All Teachers</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $query = 'SELECT * FROM teacher';
              $result = mysqli_query($db, $query) or die(mysqli_error($db));

              while ($row = mysqli_fetch_assoc($result)) {

                echo '<tr>';
                echo '<td>' . $row['ID'] . '</td>';

                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['last_name'] . '</td>';
                

               
                
                echo '<td>' . $row['email'] . '</td>';

                echo '</tr> ';
              }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!--  Core Bootstrap Script -->
  <script src="assets/js/bootstrap.js"></script>
  <!--  Flexslider Scripts -->
  <script src="assets/js/jquery.flexslider.js"></script>
  <!--  Scrolling Reveal Script -->
  <script src="assets/js/scrollReveal.js"></script>
  <!--  Scroll Scripts -->
  <script src="assets/js/jquery.easing.min.js"></script>
  <!--  Custom Scripts -->
  <script src="assets/js/custom.js"></script>

</body>

</html>