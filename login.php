<?php

session_start();

include("includes/db.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Practical 5</title>
        <link href="./css/Logincss.css" rel="stylesheet">
    </head>
    <body>
        <section>
            <div class="heading">
                <h1>Login Form</h1>
            </div>
            <div class="image">
                <img src="./images/img_avatar.png" alt="user avatar">
            </div>
            
            <form action="" method="POST">
                <div class = "myform">
                    <div>
                        <label for="fullName">Name</label><br>
                        <input class="divElement" type="text" name="username" id="fullName" required>
                    </div>
                    <div>
                        <label>Password</label>  <br>                
                        <input class="divElement" type="password" name="password" id="password" required><br>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMe">
                        <label for="checkbox">Remember me</label>
                    </div> 
                    <button class="login" name="login" id="login" >Login</button>
                                       
                    <div class="bottom-wrapper">
                        <button class="cancelbtn">Cancel</button>
                        <span class="bottom">
                            <a href="#">Forgot password?</a>
                        </span>
                    </div>
                </div>                   
            </form> 
        </section>  

        
    </body>
</html>


<?php

if(isset($_POST['login'])){

	$uname = mysqli_real_escape_string($Con,$_POST['username']);

	$pass = mysqli_real_escape_string($Con,$_POST['password']);

	$get_admin = "select * from users where username='$uname' AND password='$pass'";

	$run_admin = mysqli_query($Con,$get_admin);

	$count = mysqli_num_rows($run_admin);

	if($count==1){

		$_SESSION['username']=$uname;
	//
	//$sess = $_SESSION['username'];

	echo "<script>alert('You are Logged in into system ')</script>";

	echo "<script>window.open('index.php?overview','_self')</script>";

	}
	else {

	echo "<script>alert('Username or Password is Wrong')</script>";

	}

}

?>