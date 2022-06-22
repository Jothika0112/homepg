<?php

include('server.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Result</title>
    <link href="assets/css/sample.css" rel="stylesheet" />
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


        <div class="col-sm-9  col-md-10  main">
            <h1 class="page-header">Add Results</h1>
            <form action="result.php" method="post">
            <div class="table-responsive" width="100%">
                <table class="table table-striped" width="100%">
                <tbody width="100%">
                <?php
                        
                        $query = 'SELECT * FROM courses';
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        $i=0;

                        while ($row = mysqli_fetch_assoc($result)) { 
                        }
                        ?>
               
                <tr>
                        <td>Semester</td>
                        <td>Student Id</td>
                        <td><input type="text" id="sub1" name="sub1"></input></th> 
                        <td><input type="text" id="sub2" name="sub2" placeholder="Enter the subject name"/></td>
                        <td><input type="text" id="sub3" name="sub3" placeholder="Enter the subject name"/></td>
                        <td><input type="text" id="sub4" name="sub4" placeholder="Enter the subject name"/></td>
                        <td><input type="text" id="sub5" name="sub5" placeholder="Enter the subject name"/></td>
                        <td><input type="text" id="sub6" name="sub6" placeholder="Enter the subject name"/></td>
                        <td>Status</th>
                    </tr>
                   
                    
                 <?php
                        $query = 'SELECT * FROM student';
                        $sid=$_POST['sid'];
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        $i=0;
                        

                        while ($row = mysqli_fetch_assoc($result)) { 
                             
                        ?>

                    

                           
                   
                    <tr>
                        <td><input type="text" id="sem" name="sem[]" value="<?php  echo $sid; ?>"></td>
                        <td><input type="text" id="stuid" name="stuid[]" value="<?php  echo $row['ID']; ?>"></td>
                        <td><input type="number" id="sub1m" name="sub1m[]"></td>
                        <td><input type="number" id="sub2m" name="sub2m[]"></td>
                        <td><input type="number" id="sub3m" name="sub3m[]"></td>
                        <td><input type="number" id="sub4m" name="sub4m[]"></td>
                        <td><input type="number" id="sub5m" name="sub5m[]"></td>
                        <td><input type="number" id="sub6m" name="sub6m[]"></td>
                        <td><input type="text" id="status" name="status[]"></td>
                        
                    </tr>
                    <?php
                        
                        $i++;
                        }
                        ?>
                        <tr>
                        <td><input type="submit" class="btn btn-xs btn-warning" name="edit" id="edit" value="Update Marks" required>
                    </tr>
                        </tbody>
                </table>
                    </form>
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