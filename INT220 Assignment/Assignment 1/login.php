<?php
   ob_start();
   session_start();
?>

<html lang = "en">
   
   <head>
      <title>Login Form</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet" href="style.css">
      
   </head>
	
   <body>
      
      <h1>Login</h1> 
      <div class = "container form-signin">
         
         <?php
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {

               $name = $_POST("username");
               $age = $_POST("Age");
               $email = $_POST("email");
                  
               echo 'Login Successfully';
            } 
            
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "session.php" method = "post">
            <input type = "text" class = "form-control" 
               name = "username" placeholder="Username"
               required autofocus></br><br>
            <input type = "calendar" class = "form-control" 
               name = "age" placeholder="Age"
               required autofocus></br><br>
            <input type = "text" class = "form-control" 
               name = "email" placeholder = "Email" 
               required autofocus></br><br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
               <br><br>
            <button class = "bt" type = "submit" 
               name = "login">Login</button>
         </form>
			<br><br>
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>