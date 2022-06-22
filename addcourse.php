<?php
       
       include('server.php');

       ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
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
                    <li><a href="#">Courses</a></li>
                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Add Course</h1>
                <form method="POST" action="course.php?action=cs">
                <div class="form-group row">
                        <label for="fname" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="sid" id="sid" autocomplete="off" placeholder="Semester" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-2 col-form-label">Faculty Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="fid" id="fid" autocomplete="off" placeholder="Faculty Handling" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-2 col-form-label">Subject Code</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="cid" id="cid" autocomplete="off" placeholder="Subject code" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lname" class="col-sm-2 col-form-label">Subject Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="cname" id="cname" autocomplete="off" placeholder="Subject Name" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-2" >Add Course   </button>
                </form>

          
    <h2 class="sub-header">All Courses</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Semester</th>
                <th>Faculty Name</th>
                  <th>Subject Code</th>
                  <th>Subject Name</th>
                  
                  <th>Actions</th>

                  
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = 'SELECT * FROM courses';
                  $result = mysqli_query($db, $query) or die (mysqli_error($db));
                
                      while ($row = mysqli_fetch_assoc($result)) {
                                           
                          echo '<tr>';
                          echo '<td>'. $row['Semester'].'</td>';
                          echo '<td>'. $row['Faculty_Name'].'</td>';
                          echo '<td>'. $row['Subject_Code'].'</td>';
                          echo '<td>'. $row['Subject_Name'].'</td>';
                          
                          echo '<td> ';
                          echo ' <a  type="button" class="btn btn-xs btn-warning" href="editcourse.php?  id='.$row['Subject_Code'] . '"> EDIT </a> ';
                          echo ' <a  type="button" class="btn btn-xs btn-danger" href="delcourse.php?type=course&delete & id=' . $row['Subject_Code'] . '">DELETE </a> </td>';
                          
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
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/scrollReveal.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>