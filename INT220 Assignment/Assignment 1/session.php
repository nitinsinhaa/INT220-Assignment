<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Session Page</h1>
    <?php
        
        echo $_POST["username"];
        echo "<br>";
        echo $_POST["age"];
        echo "<br>";
        echo $_POST["email"];
        echo "<br>";

    ?>

    <a href="logout.php">Click here to log out</a>
</body>
</html>