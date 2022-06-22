<?php
 include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datai.css">
  <title>filling of seating arrangement</title>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/cloclfiles\clockfiles/jquery.min.js"></script>
  <script src="assets/cloclfiles\clockfiles/bootstrap.min.js"></script>
  <!--this are the file require for clockpicker-->
<link rel="stylesheet" href="assets/cloclfiles\clockfiles/bootstrap-clockpicker.css"/>
<link rel="stylesheet" href="assets/cloclfiles\clockfiles/bootstrap-clockpicker.min.css"/>
<link rel="stylesheet" href="assets/cloclfiles\clockfiles/jquery-clockpicker.css"/>
<link rel="stylesheet" href="assets/cloclfiles\clockfiles/jquery-clockpicker.min.css"/>
<link rel="stylesheet" href="assets/cloclfiles\clockfiles/clockpicker.css"/>
<link rel="stylesheet" href="assets/cloclfiles\clockfiles/standalone.css"/>
      <script type="text/javascript" src="assets/cloclfiles\clockfiles/bootstrap-clockpicker.js"></script>
      <script type="text/javascript" src="assets/cloclfiles\clockfiles/jquery-clockpicker.min.js"></script>
      <script type="text/javascript" src="assets/cloclfiles\clockfiles/jquery-clockpicker.js"></script>
      <script type="text/javascript" src="assets/cloclfiles\clockfiles/jquery-clockpicker.min.js"></script>
      <script type="text/javascript" src="assets/cloclfiles\clockfiles/clockpicker.js"></script>
</head>
<body>

  
    <?php
     
      $depttake= $_POST['department'];
      $yeartake=$_POST['year'];
      if($depttake && $yeartake)
    {
    foreach ($depttake as $d )
    {
    $deptname=mysqli_real_escape_string($db,$d);
    }
    foreach ($yeartake as $y )
    {
    $yearname=mysqli_real_escape_string($db,$y);
    }
    }

      $sub="SELECT subject from subjecttable where department='$deptname' AND year='$yearname'";#subject is selected here
      $retvalsubject = mysqli_query( $db,$sub);
      $count=mysqli_num_rows($retvalsubject);
    ?>
<!-- <nav class="navbar  navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
<!-- 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right nave-pills">
        <li class="dropdown ">
          <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user white"></span><span class="caret"></span></a>
          <ul class="dropdown-menu ">
            <li  ><a href="profile.php" class="glyphicon glyphicon-user"> Profile</a></li>
            <li><a href="setting.php" class="glyphicon glyphicon-cog"> Setting</a></li>
            <li><a href="clear.php" class="glyphicon glyphicon-trash"> ClearDB</a></li>
            <li><a href="logout.php" class="glyphicon glyphicon-off"> Signout</a></li>
          </ul>
        </li>
      </ul> -->
   <!-- </div><!-- /.navbar-collapse -->
 <!-- </div><!-- /.container-fluid --> 
<!-- </nav> -->

  <div class="container vertical-align">
    <div class="row">
      <div class="col-xs-4 col-xs-push-4">
        <div class="heading-control">
        <center><h2>SEATING ARRANGEMENT FILLING<h2></center>
        </div>
          <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal  content" action="datainsertintodb.php" method="post" role="form">
              <div class="form-group text-control">
              <div class="row">
                <div class="col-xs-7">
                  <label for="departmentname" class="to-control">Department :</label>
                  <input type="text" class="form-control" name="department" value="<?php echo $deptname?>" readonly></input>
             </div>
             <label for="yearname" class="to-control">Year :</label>
             <input type="text" class="form-control" name="year" value="<?php echo $yearname?>" readonly></input>
           </div>
         </div>
             <div class="form-group text-control">
               <div class="row">
                 <div class="col-xs-7">
               <label for="numberstart" class="enroll-control">Start number :<font style="color:#FF0000">*</font></label>
                <input type="text" class="form-control " name="enrollnumber" id="number" placeholder="Enter start number">
              </div>
                  <label for="numberstart "class="to-control">End number :<font style="color:#FF0000">*</font></label>
                  <input type="text" class="form-control"name="enrollendnumber" id="number" placeholder="Enter end number">
            </div>
          </div>
         
            <div class="form-group ">
              <!--subject is selected here-->
              <label for="SelectSubejct" class="sub-control" >Select Subject :<font style="color:#FF0000">*</font>
              </label>
              <select class="form-control" name="subject[]">
        <?php

        while($rows=mysqli_fetch_assoc($retvalsubject)) {

        echo "<option>".$rows['subject']."</option>";
      }
      
?>
   </select>
   </div>
                 <!--classroom is selected here-->
                    <div class="form-group">
                      <label for="SelectClass" class=" class-control">Select classroom :<font style="color:#FF0000">*</font></label>
                          <select name="classroom[]"class="form-control">
                            <option>LH001</option>
                            <optioN>LH002</option>
                            <option>LH003</option>
                            <option>LH004</option>
                            <option>LH005</option>
                            <option>LH006</option>
                            <option>LH101</option>
                            <option>LH102</option>
                            <option>LH103</option>
                            <option>LH104</option>
                            <option>LH105</option>
                            <option>LH106</option>
                            <option>LH201</option>
                            <option>LH202</option>
                            <option>LH203</option>
                            <option>LH204</option>
                            <option>LH205</option>
                            <option>LH206</option>
                            <option>LH207</option>
                            <option>LH208</option>
                            <option>LH210</option>
                              </select>
                             
                            </div>
                            <div class="form-group">
                              <!--date is inserted here-->
                            	  <label for="examdate" class="class-control">Date :<font style="color:#FF0000">*</font></label><br />
                              <input class="form-control" placeholder="DD/MM/YYYY" type="date" name="examdate" id="examdate"></input>
                            </div>
                           
                         <div class="form-group">
                                  <div class="row">
                                    <div class="col-xs-7">
                                      <!--time i.e starttime and end time is inserted here-->
                                     	  <label for="examptime1" class="class-control">Start Time:<font style="color:#FF0000">*</font></label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input  placeholder="HH:MM" type="text" class="form-control ic" name="starttime"  >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                        <script type="text/javascript">
                                        $('.clockpicker').clockpicker();
                                        </script>
                                      </div>
                                        <label for="examptime2" class="class-control">End time :<font style="color:#FF0000">*</font></label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input type="text" placeholder="HH:MM" name="endtime" class="form-control ic"  >
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>
                                            </span>
                                        </div>
                                        <script type="text/javascript">
                                        $('.clockpicker').clockpicker();
                                        </script>

                                       </div>
</div>

<div class="form-group">
<center><input type="submit" name="submit" value="insert" class="btn btn-lg btn-success"></input><a href="adminbranchyear.php" class="btn btn-lg btn-success">cancel</a></center>
</div>

</form>
</div>
</div>
</div>
</div>
</div>

</body>
</html>
