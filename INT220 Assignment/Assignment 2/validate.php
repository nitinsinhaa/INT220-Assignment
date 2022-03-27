<?php

    $pattern = "/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/";

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
            if(preg_match($pattern, $email)){
                if(isset($_POST['email'])){
                    setcookie('email', $email, time()+60*60*7);
                    setcookie('pass', $pass, time()+60*60*7);
                    
                }
                session_start();
                $_SESSION['email'] = $email;
                header("location: welcome.php");
                
            }
            
            else { 
                echo "Email or Password is invalid.<br> Click here to <a href='login.php'>login again</a>";
            }
    } else {
        header("location: login.php");
    }

?>