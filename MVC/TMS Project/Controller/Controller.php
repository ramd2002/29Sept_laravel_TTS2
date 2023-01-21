<?php

echo "<pre>";
print_r($_SERVER['PATH_INFO']);
$BaseURL="http://localhost/ass/MVC/";
if (isset(($_SERVER['PATH_INFO']))) {
  
  switch ($_SERVER['PATH_INFO'])
  {
    case '/home':
    include_once("Views/header.php");
    include_once("Views/footer.php");
    include_once("Views/homepage.php");
    break;
  
  
    case '/Contact':
      include_once("Views/header.php");
         echo "<h1> contact us </h1>";
      include_once("Views/footer.php");
      break;
  
      case '/About':
        include_once("Views/header.php");
        echo "<h1> About us </h1>";
        include_once("Views/footer.php");
        
        break;
  
  
        case '/Materials':
          include_once("Views/header.php");
          echo "<h1> Materials us </h1>";
          include_once("Views/footer.php");
          
          break;
   
   }
   
  
} 
else {
     header("location:http://localhost/ass/MVC/TMS%20Project/index.php/home");
 }
?>