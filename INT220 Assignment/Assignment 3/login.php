<?php
   ob_start();
   session_start();
?>

<html lang = "en">
   
   <head>
      <title>Login Form</title>
      <link rel = "stylesheet" href = "css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      
   </head>
	
   <body>
      
      <h2>Login Form</h2> 
      <div class = "container form-signin">
         
         <?php
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'nitinsinha008@gmail.com' && 
                  $_POST['password'] == '12345') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'nitinsinha008@gmail.com';
                  
                  echo 'Login Successfully';
                 
                  $to = (isset($_GET['username']));
                  $subject = "Login Successfully";
                  $txt = "You are logged in our server.";
                  $headers = "From: nitinsinha008@gmail.com" . "\r\n" .
                  "CC: somebodyelse@example.com";
                  
                  mail($to,$subject,$txt,$headers);
                 
                  header('Refresh: 2; URL=fupload.php');

               }
            }
         ?>
      </div> 
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Email" 
               required autofocus></br><br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
               <br><br>
            <button class = "bt" type = "submit" 
               name = "login">Login</button>
               
         </form>
			<br><br>
        
         
      </div> 
      
   </body>
</html>