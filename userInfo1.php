<?php
    include('db1.php');
    
    $name=$_POST['name'];
    $model=$_POST['model'];
    $telephone=$_POST['telephone'];
     
    


if(mysql_query("INSERT INTO user VALUES('$name','$model','$telephone')"))
    	echo "Successfully submited";

    else
    	echo "submit Failed";
     header("location:index1.html");


    

    
    

?>
