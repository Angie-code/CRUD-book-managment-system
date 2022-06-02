<?php

//development connection

//$conn= mysqli_connect("localhost","root","","lms");

 //remote conn
 $conn= mysqli_connect("us-cdbr-east-05.cleardb.net", "bdc7f0a905d4bf","5dea9c14 ","heroku_9657b2c173deb38");
 if(!$conn){
     echo "Connection Error".mysqli_connect_error( );
 }
 
?>