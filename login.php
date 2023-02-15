
<?php
include("databaseConnection.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'" or die(mysqli_error());
	$res = mysqli_query($dbc,$query);
    $numRow=mysqli_num_rows($res);


	
	if($numRow == 1){
		$row = mysqli_fetch_assoc($res);
         if(password_verify($password ,$row['password']))
         {
             $error[] ='Username already exists';;
         }


}	
		
 ?>

<form class="form" method="post" name="login" >
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="submit" name="Submit" class="login-button"/>
        <p class="link">Create Account ? <a href="register.php">Registration Here</a></p>
  </form>
  
</body>
</html>
