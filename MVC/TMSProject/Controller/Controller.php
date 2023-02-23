<?php
// include_once("Model/model.php");
class controller   
// extends model
{
    public function __construct()
    {
        // parent::__construct();

        $BaseURL = "http://localhost/ass/MVC/TMSProject/assets/";
        // $admin_url = "http://localhost/php/tmsProject/assets/adminassets/";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once('Views/header.php');
                    include_once('Views/homepage.php');
                    include_once('Views/footer.php');
                    break;
                    // if(isset($_REQUEST['inquiry'])){
                    //     array_pop($_REQUEST);
                    //     $Res=$this->insert("inquiry",$_REQUEST);
                    //     if($Res['Code'] == 1){
                    //         header("location:contact");
                    //     }
                    //     else{
                    //         echo "Error";
                    //     }

                    // }

                case '/contact':
                    include_once('Views/header.php');
                    include_once('Views/contact.php');
                    include_once('Views/footer.php');
                    break;

                case '/login':
                    include_once('Views/login.php');
                    break;

                case '/logout':
                    setcookie("access_id", '', time() - 7000000);
                    header("location:home");

                case '/register':
                    include_once('Views/header.php');
                    include_once('Views/registration.php');
                    include_once('Views/footer.php');
                    break;

                    // case '/material':
                    //     include_once('Views/header.php');
                    //     include_once('Views/materials.php');
                    //     include_once('Views/footer.php');
                    //     break;
                case '/jee':
                    include_once('Views/header.php');
                    include_once('Views/jee.php');
                    include_once('Views/footer.php');
                    break;
                case '/neet':
                    include_once('Views/header.php');
                    include_once('Views/neet.php');
                    include_once('Views/footer.php');
                    break;
                case '/privacy':
                    include_once('Views/header.php');
                    include_once('Views/privacy.php');
                    include_once('Views/footer.php');
                    break;

                case '/ourcorse':
                    include_once('Views/header.php');
                    include_once('Views/ourcorse.php');
                    include_once('Views/footer.php');
                    break;
                case '/about':
                    include_once('Views/header.php');
                    include_once('Views/about.php');
                    include_once('Views/footer.php');
                    break;
                case '/condition':
                    include_once('Views/header.php');
                    include_once('Views/conditions.php');
                    include_once('Views/footer.php');
                    break;
                case '/userprofile':
                    // include_once('Views/header.php');
                    include_once('Views/userprofile.php');
                    // include_once('Views/footer.php');
                    break;
                case '/admindashboard':
                    include_once('Views/admin/adminheader.php');
                    include_once('Views/admin/adminhome.php');
                    include_once('Views/admin/adminfooter.php');
                    break;
                case '/allusers':
                    include_once('Views/admin/adminheader.php');
                    include_once('Views/admin/allusers.php');
                    include_once('Views/admin/adminfooter.php');
                    break;
                case '/edituser':
                    include_once('Views/admin/adminheader.php');
                    include_once('Views/admin/edituser.php');
                    include_once('Views/admin/adminfooter.php');
                    break;
                case '/inquirydata':
                    include_once('Views/admin/adminheader.php');
                    include_once('Views/admin/inquirydata.php');
                    include_once('Views/admin/adminfooter.php');
                    break;


                default:

                    break;
            }
        } else {
            header("location:home");
        }
    }
}
$controller = new controller;























































































































































































































// <!-- <?php

// // echo "<pre>";
// // print_r($_SERVER['PATH_INFO']);
//     class controller{
//       public function __construct(){

//  $BaseURL="http://localhost/ass/MVC/TMSproject";
// if (isset(($_SERVER['PATH_INFO']))) {
//   switch ($_SERVER['PATH_INFO'])
//   {
//     case '/home':
//     include_once("Views/header.php");
//     include_once("Views/homepage.php");
//     include_once("Views/footer.php");
//     break;
  
  
//     case '/Contact':
//       include_once("Views/header.php");
//          echo "<h1> contact us </h1>";
//       include_once("Views/footer.php");
//       break;
  
//       case '/About':
//         include_once("Views/header.php");
//         echo "<h1> About us </h1>";
//         include_once("Views/footer.php");
//         break;
  
  
//         case '/Materials':
//           include_once("Views/header.php");
//           echo "<h1> Materials us </h1>";
//           include_once("Views/footer.php");        
//           break;
   
  
//       }       
//  }else {
//             header("location:home");
//        }   
//   } 
//     }
//   $Controller = new Controller;  
// ?>