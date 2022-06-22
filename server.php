
<?php
session_start();

// initializing variables
$fname = "";
$lname = "";
$email    = "";
$errors = array(); 
//$usernamesend="";
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'userlogin');
//$conn = mysqli_connect('localhost', 'root', '', 'file-management');


//$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
//$usernamesend=$username;
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($id)) { array_push($errors, "ID is required"); }
  if (empty($fname)) { array_push($errors, "FirstName is required"); }
  if (empty($lname)) { array_push($errors, "LastName is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM student WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }

    // if ($user['email'] === $email) {
    //   array_push($errors, "email already exists");
    // }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO student (ID,first_name, last_name, email, password) 
  			  VALUES('$id','$fname','$lname', '$email', '$password')";
	// $query1 = "INSERT INTO files (userid)   VALUES('$username')";
  	mysqli_query($db, $query);
	//mysqli_query($conn, $query1);
  	// $_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: firstpg.php');
  }
}
if (isset($_POST['reg__user'])) {
  // receive all input values from the form
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
//$usernamesend=$username;
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($id)) { array_push($errors, "ID is required"); }
  if (empty($fname)) { array_push($errors, "FirstName is required"); }
  if (empty($lname)) { array_push($errors, "LastName is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM teacher WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }

    // if ($user['email'] === $email) {
    //   array_push($errors, "email already exists");
    // }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO teacher (ID,first_name, last_name, email, password) 
  			  VALUES('$id','$fname','$lname', '$email', '$password')";
	// $query1 = "INSERT INTO files (userid)   VALUES('$username')";
  	mysqli_query($db, $query);
	//mysqli_query($conn, $query1);
  	// $_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: firstpg2.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT email,password FROM student WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  //  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
      
  	  header('Location: studentDash.php');
  	}else {
  		// array_push($errors, "Wrong username/password combination");
      // echo '$errors';
      echo "Wrong username/password combination";
  	}
  }
}
if (isset($_POST['login__user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT email,password FROM teacher WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  //  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
      
  	  header('Location: teacherDash.php');
  	}else {
  		// array_push($errors, "Wrong username/password combination");
      // echo '$errors';
      echo "Wrong username/password combination";
  	}
  }
}


?>
