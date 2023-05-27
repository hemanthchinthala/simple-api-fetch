<?php 

function conn(){   
$servername = "localhost";
$username = "hemanth1";
$password = "hemanth1user";
$dbname = "studentdb";

try{
   global $conn;  
   $conn = new mysqli($servername, $username, $password, $dbname); 
   return $conn; 
}catch(Exception $dberrorcon){
			echo 'connection errror';
			//echo $dberrorcon->getMessage(); 
     }
} 


?>