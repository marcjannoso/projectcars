<?php
    include('db.php');
    
    $name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $telephone=$_POST['telephone'];
     $email=$_POST['email'];
    


    if(mysql_query("INSERT INTO user VALUES('$name','$age','$address','$telephone','$email')"))
    	echo "Successfully Inserted";

    else
    	echo "Insertion Failed";
    

    header("location:index2.html");
    

?>
