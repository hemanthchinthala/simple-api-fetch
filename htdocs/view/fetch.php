<?php 

header('Content-Type: application/json'); 
$id = " id is not null "; 
$name=$where=$totalmarks=''; 
$tm='>'; 

if (isset($_GET['name'])) { 
   $n1 = $_GET['name']; 
   $name=" and name LIKE '%{$n1}%' "; 
} 

if (isset($_GET['tm'])) { 
   $tm2 = $_GET['tm']; 

   if($tm2=='low'){ 
      $tm='<'; 
   }else{ 
      $tm='>'; 
   } 
 
} 

if (isset($_GET['totalmarks'])) { 
   $tm1 = $_GET['totalmarks'];  
   $name=" and totalmarks{$tm}{$tm1} "; 
} 


$sql = "SELECT * FROM student_details where {$id} {$name} {$totalmarks}";
$result = conn()->query($sql);

if ($result->num_rows > 0) { 
  $techarray = array();
  while($row = $result->fetch_assoc()) { 
    $jsonstore[] = $row;  

  }
} else {
  $jsonstore[] = "no data found";  
}

echo json_encode($jsonstore, JSON_PRETTY_PRINT); 

?> 




