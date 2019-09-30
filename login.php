<?php

session_start();

if(!isset($_SESSION['user'])){
    
   if(isset($_REQUEST['username']) || isset($_REQUEST['password']))
    {

        $user = $_REQUEST['username'];
        $pass = $_REQUEST['password'];

        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;

        echo "<script> location.href='admin.php' </script>";
    } 
} else{
        echo "<script> location.href='admin.php' </script>";
    }


?>

 <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title> PHP Login Session </title>
        
        <style>
            
            :focus{
                outline: none;
            }
        
            body{
                height: 400px;
                background-image: linear-gradient(rgb(51, 153, 255), rgba(147, 0, 255, 0.71), #ffffff);
                background-repeat: no-repeat;
            }
            
            .form1{
                
                width: 600px;
                height: 350px;
                margin: auto;
                margin-top: 20%;
                
            }
            
            .form1 input{
                padding: 7px;
                border-radius: 5px;
            }
            
            
            .form1 input[type=submit]{
                background-color: red;
                color: aliceblue;
                letter-spacing: 2px;
            }
        
        </style>
        
    </head>
    
    <body>
        
    <div class="userForm">
        
        <form align="center" class="form1" action="" method="post">
            
            
            <tr>
                <td><input type="text" name="username" placeholder="User Name" required></td>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>
            
            <input type="submit" value="LOGIN">
            
        </form>
    </div>
    </body>
</html>