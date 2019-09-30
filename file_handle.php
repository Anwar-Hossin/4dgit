<?php

    //print_r($_FILES['myfile']['tmp_name']);
    
move_uploaded_file($_FILES['myfile']['tmp_name'], 'img/'.$_FILES['myfile']['name']);

echo "File Uploaded Successfully!!";


?>


<br/>
<br/>

<a href="file_handle.html">Go Back</a>
