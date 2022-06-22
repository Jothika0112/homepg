

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VCET</title>
    <style type="text/CSS"> 
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.full-page
{
    height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(assets/img/logo.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}

.navbar
{
    display: flex;
    align-items: center;
    padding: 20px;
    padding-left: 150px;
    padding-right: 30px;
    padding-top: 50px;
    
}
nav
{
    flex: 1;
    text-align: right;
}
nav ul 
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
nav ul li button:hover
{
    color: aqua;
}
nav ul li a:hover
{
    color: aqua;
}
a
{
    text-decoration: none;
    color: palevioletred;
    font-size: 28px;
}
#login-form
{
    display: none;
	/* background: white; */
}
.form-box
{
    width:380px;
	height:480px;
	position:relative;
	margin:2% auto;
	background:rgba(0,0,0,0.3);
	padding:10px;
    overflow: hidden;
	background: #f3e9e9;
}
.button-box
{
	width:220px;
	margin:35px auto;
	position:relative;
	box-shadow: 0 0 20px 9px #ADD8E6;;
	border-radius: 30px;
}
.toggle-btn
{
	padding:10px 30px;
	cursor:pointer;
	background:transparent;
	border:0;
	outline: none;
	position: relative;
}
#btn
{
	top: 0;
	left:0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: #ADD8E6;
	border-radius: 30px;
	transition: .5s;
}
.input-group-login
{
	top: 150px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-group-register
{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.input-field
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: transparent;
	
}
.submit-btn
{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: #ADD8E6;
	border: 0;
	outline: none;
	border-radius: 30px;
}
.check-box
{
	margin: 30px 10px 34px 0;
}
span
{
	color:#777;
	font-size:12px;
	bottom:68px;
	position:absolute;
}
#login
{
	left:50px;
}
#login input
{
	color:black;
	font-size:15;
}
#register
{
	left:450px;
}
#register input
{
	color:black;
	font-size: 15;
}
/*#mail
{
	color: white;
}
#passw
{
	color: white;
}*/

.input-field
{
	color: white;
}
/* #rempass
{
	bottom:50px;
	left:50px;
	color: white;
}
	<!---we had linked our css file-----> */
    
    </style>
</head>
<body>
	
    <div class="full-page">
        <div class="navbar">
            <div>
            
                <h1 style="color: white;">Velammal College of Engineering and Technology</h1>
                
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href=http://localhost/homepg/firstpg.php>Home</a></li>
                    <li><a href='http://vcet.ac.in/'>About Us</a></li>
					
                    <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Student Login</button></li>
					<li><a href='http://localhost/homepg/firstpg2.php'><button class='loginbtn'>Faculty Login</button></a></li>
                 </ul>
            </nav>
        </div>
        <div id='login-form'class='login-page'>
	
  	
	<div class="form-box">
		<div class='button-box'>
			<div id='btn'></div>
			<button type='button'onclick='login()'class='toggle-btn'>Log In</button>
			<button type='button'onclick='register()'class='toggle-btn'>Register</button>
		</div>
		
		<form method="post" action="server.php" id='login' class='input-group-login'>
			<input type='text' name='email' class='input-field' autocomplete="off" placeholder='Emaill Id' required >
	<input type='password' name='pass' class='input-field' autocomplete="off" placeholder='Enter Password' required><br><br><br><br><br>
	
	<button type='submit'class='submit-btn' name="login_user">Log in</button>
	
	
 </form>
 <form method="post" action="server.php" id='register' class='input-group-register'>
     <input type='text'class='input-field' name='id' autocomplete="off" placeholder='Student Id' required>
	 <input type='text'class='input-field' name='fname' autocomplete="off" placeholder='First Name' required>
	 <input type='text'class='input-field' name='lname' autocomplete="off" placeholder='Last Name ' required>
	 <input type='email'class='input-field' name='email' autocomplete="off" placeholder='Email Id' required>
	 <input type='password'class='input-field' name='password_1' autocomplete="off" placeholder='Enter Password' required>
	 <input type='password'class='input-field' name='password_2' autocomplete="off" placeholder='Confirm Password'  required><br><br>
	 
			<button type='submit'class='submit-btn' name='reg_user'>Register</button>
	 </form>
	</div>

</div>
		
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
		
	</script>
	
</body>
</html>
