
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Page</title>
    
    <style>
    
        body{
            height: 400px;
            background-image: linear-gradient(rgba(170, 252, 223, 0.83), rgba(153, 250, 243, 0.7), #ffffff);
            background-repeat: no-repeat;
        }
        
        #main{
            height: 400px;
            width: 500px;
            margin:auto;
            margin-top: 5%;
            
            
            border-radius: 8px;

            background-color: aliceblue;
            
        }
        
        form table{
            margin: 0 auto;
        }
        
        input #sub{
            margin: 0 auto;
        }
        
        .link{
            margin-top: 60%;
            margin-left: 42%;
        }
        
        .link a{
            text-decoration: none;
            font-size: 20px;
            color: brown;
        }
        
        .link a:hover{
            color: darkgreen;
        }
    
    </style>
    
</head>
<body>
    
<div  id="main">
<?php

/*

$mnth=array("January"=>31,"February"=>28,"March"=>31,"April"=>30,"May"=>31,"June"=>30,"July"=>31,"August"=>31,"September"=>30,"October"=>31,"November"=>30,"December"=>31);


echo "February Has ".$mnth['February']." "."Days."



$marks=array("Dip"=>array("Physics"=>40,"Maths"=>45,"Chemistry"=>48),"Hassan"=>array("Physics"=>33,"Maths"=>41,"Chemistry"=>50),"Jassim"=>array("Physics"=>53,"Maths"=>63,"Chemistry"=>73));

echo "Result for Hassan = ".$marks['Hassan']['Maths'];



$arr = array(
    array("Dip","Banana",10),
    array("Hassan","Tea",6),
    array("Jassim","Bun",12) 
    );




for($i=0; $i<count($keys); $i++){
    
    echo $keys[$i] ." = " . $arr[$keys[$i]] . "<br/>";
}



foreach($arr as $fullArray){
    
    echo "=> ";
    
    foreach($fullArray as $data){
        echo $data." ";
    }
    
    echo "<br/>";
}



$tomorrow=mktime(0,0,0,date("m"),date("d")+1,date("Y"));

echo "Tomorrow is ".date("m/d/Y ",$tomorrow);
    
$_SESSION["username"]="Aronno";

   
    $arr = array("Apple", "Mango", "Orange");
    
    $price = array("Apple"=>10, "Orange"=>12, "Mango"=>15, "Jackfruit"=>8);
    
    echo "Apple Price: ".$price['Apple']." Taka per pice";
    
    */
    
    
    
$marks = array(
    
    array("Dip = ", "PHP = ", "$100"), array("Jassim = ", "JAVA = ", "$200"), array("Hassn = ", "PYTHON = ", "$150")
);
    
   
    
    foreach($marks as $allArray){
        
        foreach($allArray as $info){
            echo $info;
        }
        
        echo "<br />";
} 
    

    
    
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

?>



<br/>
<br/>

<div class="link"><a href="index.html">Go Back</a></div>

</div>

</body>
</html>