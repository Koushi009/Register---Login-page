<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require('connect.php');

//we check if the user already exists 

if (isset($_POST['username']) && isset($_POST['password'])){
 
	
	$username= $_POST['username'] ;
	$passtemp= $_POST['password'] ;
	$password = md5($passtemp);
	$salt = password_hash($passtemp,PASSWORD_DEFAULT);
	
	 // $query = "INSERT INTO 'accounts' (username,password,salt) VALUES ('$username','$password','$salt')" ;
       $sql = "INSERT INTO 'accounts' (username, password, salt) VALUES ('$username', '$password', '$salt')"; 
		$query = mysqli_query($connection,$sql)	;
		
	if($query)
{
echo "Success executing : $sql";
}
else
{
echo "Failed executing : $sql";
}
}


?>


	<html>
		<head>
			<meta charset="UTF-8">
			<title>Register page</title>
   			<link href="Style.css" rel="stylesheet" type="text/css">
		</head>

		<body>
        
        
       		<div class="loginbox" >
            <img src="images/avatar.png" alt="avatar" class="avatar" >
            
            <h1>Register</h1> 
            <form method="post"> 
            <p>Username</p>
            <input type="text" name="username"   placeholder="Enter username">
            <p>Password</p>
            <input type="password" name="password"   placeholder="Password">
            <input type="submit" name="register" value="register">
             

            </form>

           
            
        	</div>
     
        
        
        
		</body>
</html>
