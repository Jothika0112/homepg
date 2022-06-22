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

  
            <div class="col-sm-9  col-md-10  main">
                <h1 class="page-header">Add Results</h1>
                <form action="questionwiseresult.php" method="post">
                <div class="table-responsive" width="100%">
                    <table class="table table-striped" id="tab" style="table-layout:auto;width:60px;" >
                    <tbody width="100%">   
                    <?php
                            
                            $query = 'SELECT * FROM courses';
                            $result = mysqli_query($db, $query) or die(mysqli_error($db));
                            $i=0;

                            while ($row = mysqli_fetch_assoc($result)) { 
                            }
                            ?>
                   
                    <tr>
                            <td style="text-align:center;">Semester</th>
                            <td style="text-align:center;">Internal/Model</th>
                            <td style="text-align:center;">Student Id</th>
                            <td style="text-align:center;">Course Name</th>
                            <td style="text-align:center;">Q1</td> 
                            <td style="text-align:center;">Q2</td>
                            <td style="text-align:center;">Q3</td>
                            <td style="text-align:center;">Q4</td>
                            <td style="text-align:center;">Q5</td>
                            <td style="text-align:center;">Q6</td>
                            <td style="text-align:center;">Q7</td>
                            <td style="text-align:center;">Q8</td>
                            <td style="text-align:center;">Q9/Q10</td>
                            <td style="text-align:center;">Q11/Q12</td>
                            <td style="text-align:center;">Q13/Q14</td>

                            
                        </tr>
                       
                        
                     <?php
                            $query = 'SELECT * FROM student';
                            $sid=$_POST['sid'];
                            $iid=$_POST['iid'];
                            $cid=$_POST['cid'];

                            $result = mysqli_query($db, $query) or die(mysqli_error($db));
                            $i=0;
                            // $c = 'SELECT count(*) FROM student';
                            // $result = mysqli_query($db, $query) or die(mysqli_error($db));
                            // $k=0;
                            // while ($row = mysqli_fetch_assoc($result)) { 
                            //     $k++;
                            // }
                            // echo("<script>console.log('count: " . $k . "');</script>");

                            while ($row = mysqli_fetch_assoc($result)) { 
                                 
                            ?>

                        

                               
                       
                        <tr>
                            <td><input type="text" id="sem" name="sem[]" style="width:100px;" value="<?php  echo $sid; ?>"></td>
                            <td><input type="text" id="internal" name="internal[]" style="width:100px;" value="<?php  echo $iid; ?>"></td>
                            <td><input type="text" id="stuid" name="stuid[]" style="width:100px;" value="<?php  echo $row['ID']; ?>"></td>
                            <td><input type="text" id="cid" name="cid[]" style="width:100px;" value="<?php  echo $cid; ?>"></td>

                            <td><input type="number" id="sub1m" name="sub1m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub2m" name="sub2m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub3m" name="sub3m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub4m" name="sub4m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub5m" name="sub5m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub6m" name="sub6m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub7m" name="sub7m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub8m" name="sub8m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub910m" name="sub910m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub1112m" name="sub1112m[]" style="width:100px;"></td>
                            <td><input type="number" id="sub1314m" name="sub1314m[]" style="width:100px;"></td>

                            
                            
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