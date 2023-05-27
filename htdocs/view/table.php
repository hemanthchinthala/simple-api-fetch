<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" /> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

<style>
table, th, td { 
  border: 1px solid black;
  padding-right: 10px;
  padding-left: 10px; 
  font-size:20px; 
}
table {
    border-collapse: collapse;
}

tr:nth-child(even) {
  background-color: lightgrey;
}

th {
  background-color: skyblue;
}

#event-table {
  margin-left: 20px;
  margin-top: 50px;
}

</style>


<?php 

$jsondata = file_get_contents('http://localhost/fetch'); 
$studentdata = json_decode($jsondata); 

?> 


<div id="event-table">

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="margin: 10px;"> 

<a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none"><span class="fs-4 "><span class="fad fa-crown" style="color:gold"></span> Sample TABLE </span></a>  </header>


<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Total Marks</th>
    <th>Phone Number</th>
  </tr>
  
  <?php 
      
  foreach ($studentdata as $sdata) { 

  ?>
  <tr>
    <td> <?= $sdata->id; ?> </td>
    <td> <?= $sdata->name; ?> </td>
    <td> <?= $sdata->totalmarks; ?> </td>
    <td> <?= $sdata->phonenumber; ?> </td>
  </tr>
   <?php } ?> 

</table>
 </div>