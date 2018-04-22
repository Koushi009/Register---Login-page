<?php

require('connect.php');

//we check if the user already exists 

if (isset($_POST['username']) && isset($_POST['password'])){
 
	
	$username= $_POST['username'] ;
	$password= md5($_POST['password']) ;
	$salt = password_hash($_POST['password']);
	
	$query = "INSERT INTO 'accounts' (username,password,salt) VALUES ('$username','$password','$salt')" ;
	
	$result = mysqli_query($connection,$query);
	
	if ($result) {
		
		$smsg = "User Created Successfully";
		}else{
        $fmsg ="User Registration Failed";

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
