<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - BLUEBOOK</title>
</head>
<body>
    <?php
        session_start();
         echo $_SESSION["uid"];

    ?>
    <a href="logout.php">logout</>
</body>
</html>