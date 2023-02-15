<?php
include 'databaseConnection.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
     
    $username = $_POST['username'];  
    $password = md5($_POST['password']);
    $email = $_POST['email'];

   mysqli_query($conn,"insert into user (username, password, email)
values ('$username', '$password', '$email')"); 


}
		
 ?>
 	
 <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
         <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Have an account? <a href="login.php">Login</a></p>
    </form>
  
</body>
</html>
