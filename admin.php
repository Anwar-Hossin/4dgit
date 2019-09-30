<br/>
<?php
    
session_start();

    echo "Hi ".$_SESSION['user']." Welcome to Admin Panel";

if(isset($_REQUEST['logout']))
    {
        session_unset();
        session_destroy();

        echo "<script> location.href='login.php' </script>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
</head>
<body>
   <br/>
   <br/>
   <form action="" method="post">
        <input type="submit" name="logout" value="LOGOUT">
    </form>
    
    
</body>
</html>