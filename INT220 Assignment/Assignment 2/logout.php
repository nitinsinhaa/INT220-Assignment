<?php

    session_start();
    session_destroy();
    
    echo "You are successfully logged out. Click here to <a href='login.php'>login again</a>";

?>