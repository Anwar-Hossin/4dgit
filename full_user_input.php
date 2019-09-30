<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dropdown Menu/List</title>
</head>
<body>
    
<?php
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    
    $code = $_POST['code'];
    $phone = $_POST['phone'];
    $sports = $_POST['sports'];
    $commentbox = $_POST['Comment'];
    
    echo "Name: ".$fname." ".$lname."<br />";
    echo "Email: ".$email."<br />";
    echo "Gender: ".$gender."<br />";
    echo "Country: ".$country."<br />";
    echo "Phone: ".$code." ".$phone."<br />";
    echo "Sports: ".$sports."<br />";
    echo "Comment: ".$commentbox;



?>


<br/>
<br/>

<a href="full_user_input.html">Go Back</a>

</body>
</html>