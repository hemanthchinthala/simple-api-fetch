<?php 
include 'inc/db.php';  
include 'inc/route.php'; 
include 'inc/nav.php';  
 
use HemanthProject\Route;

Route::add('/fetch', function() {  
  require 'view/fetch.php';  
}, ['get']);

Route::add('/table', function() {  
  require 'view/table.php';  
}, ['get','post']);


Route::add('/', function() { 
  require 'view/home.php'; 
});  
 

Route::pathNotFound(function($path) { 
  require 'view/404.php';
  header('HTTP/1.0 404 Not Found'); 

});   

Route::run('/');


?>
 