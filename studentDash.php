<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Dashboard</title>
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
            <li><a href="viewcourse.php">View Courses</a></li>
            <li><a href="viewresult.php">View Results</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Student Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
            <a href="viewresult.php">  <img src="assets/img/result.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
          </a> <h4>Results</h4>
            </div>           
            <div class="col-xs-6 col-sm-3 placeholder">
            <a href="viewcourse.php?action=course"><img src="assets/img/service.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            </a> <h4>Courses</h4>             
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
            <a href="selectoneof3.php"><img src="assets/img/classroom.png" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            </a> <h4>Hall Plan</h4>             
            </div>
          </div> 
          <img src="assets/img/teacher-student.jpg" width="100%" height="auto"/>     
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