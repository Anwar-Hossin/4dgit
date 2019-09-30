<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dropdown Menu/List</title>
</head>
<body>
    
<?php
    
    if(isset($_REQUEST['item'])){
        
        $item = $_REQUEST['item'];
        $quantity = $_REQUEST['quantity'];

    echo "Product: ".$item." <br/> "."Quantities: ".$quantity;
    }



?>


<br/>
<br/>

<a href="dropdown.html">Go Back</a>

</body>
</html>