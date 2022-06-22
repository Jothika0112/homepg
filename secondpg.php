
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>VCET</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fontawesome.com/icons/" rel="stylesheet">

<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

<style type="text/CSS">
    
body
{
margin: 0;
padding: 0;
font-family: sans-serif;
overflow: hidden;
}
.container
{
position: relative;
width: 1800px;
height: 500px; 
margin: 140px auto;
margin-left: 350px;
margin-top: 290px;
overflow: hidden;

}
.container .box
{
position: relative; 
width: calc(580px - 50px);
height: calc(500px - 50px);
background: #000; 
float: left;
margin: 15px; 
box-sizing: border-box;
overflow: hidden;
border-radius: 10px;
}
.container .box .icon
{
position: absolute;
top: 0; 
left: 0;
width: 100%; 
z-index: 1;
height: 100%;
background: #f00; 
transition: 0.5s;

}
.container .box:hover .icon
{
top: 20px;
left: calc(50% - 40px);
width: 80px;
height: 80px;
border-radius: 50%;
}
.container .box .icon .fa 
{
position: absolute;
top: 50%; 
Left: 50%;
transform: translate(-50%, -50%); 
font-size: 80px;
transition: 0.5s;
color: #fff;
}
.container .box:hover .icon .fa
{
font-size: 40px;
}
.container .box .content
{
position: absolute;
top: 100%;
text-align: center;
padding: 20px;
height: calc(100% - 100px); 
transition: 0.5s;
box-sizing: border-box;
opacity: 0;
}
.container .box:hover .content
{
top: 100px;
opacity: 1;
}
.container .box .content h3
{
margin: 0 0 10px;
padding: 0;
color: #fff;
font-size: 24px;
} 
.container .box .content p 
{
margin: 0; 
padding: 0;
color: #fff;
}
.container .box:nth-child(1) .icon
{
background: #319635;
}
.container .box:nth-child (1)
{
background: #4caf50;

}

.container .box:nth-child(2) .icon
{
background: #d03852;
}
.container .box:nth-child (2)
{
background: #eeb6bb;
}
.container .box:nth-child(3) .icon
{
background: #319635;
}
.container .box:nth-child (3)
{
background: #4caf50;

}
.h3
{
    color: aqua;
}
.a
{
    text-decoration: none;
}
.a:hover
{
    text-decoration: none;
}

</style>
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
      
<div class="container">
<h1 class="page-header">Add Results</h1>
<div class="box">
<div class="icon"><a style="text-decoration:none" href=http://localhost/homepg/questionwise.php><i class="fa fa-user" aria-hidden="true"></i></a>
</div>
<div class="content">
<a style="text-decoration:none" href=http://localhost/homepg/questionwise.php><h3>Question-wise Mark Entry</h3></a>
    <p>Select the semester,internal and the subject name. Click the update button. Now, the selected data will be appearing in the form of a table
    . Enter the question-wise mark of all the students who have appeared for the examination in the table.</p>
</div>
</div>
<div class="box">
<div class="icon"><a style="text-decoration:none" href=http://localhost/homepg/internal.php><i class="fa fa-user" aria-hidden="true"></i></a>
</div>
<div class="content">
<a style="text-decoration:none" href=http://localhost/homepg/internal.php><h3>Subject-wise Mark Entry</h3></a>
    <p>Select the semester and internal. Click the update button. Now, Enter all the subjects that are present in that particular semester and 
    enter the subject-wise mark scored by all the students who have appeared for the examination in the table.</p>
</div>
</div>
<div class="box">
<div class="icon"><a style="text-decoration:none" href=http://localhost/homepg/addresult.php><i class="fa fa-user" aria-hidden="true"></i></a>
</div>
<div class="content">
<a style="text-decoration:none" href=http://localhost/homepg/addresult.php><h3>Average Mark</h3></a>
    <p>Select the semester and the subject name for which the average mark should be calculated. Now, Enter the marks of Internal-1, Internal-2 and model.
     Click update button.Now, the entered data will be appearing in the table along with the average mark calculated from the previously entered data.
    
    </p>
</div>
</div>
</div>
</div>
</div>
</body>
</html>