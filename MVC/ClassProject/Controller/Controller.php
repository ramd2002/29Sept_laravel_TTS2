<?php
include_once("Model/model.php");
    // echo "<pre>";
    // print_r($_SERVER['PATH_INFO']);
    class Controller extends Model{
         public function __construct() {
            parent::__construct();
            echo "called controller";
            $baseURL= "http://localhost/ass/MVC/ClassProject/";
          if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/homepage.php");
                    include_once("Views/footer.php");          
                    break;
                
                case '/contact':
                        include_once("Views/header.php");
                          echo "<h1>  contact us </h1>";
                        include_once("Views/footer.php");          
                        break;
                       
                case '/about':
                            include_once("Views/header.php");
                            echo "<h1> about us </h1>";
                            include_once("Views/footer.php");          
                            break;

                case '/login':
                                include_once("Views/header.php");
                                include_once("Views/loginpage.php");
                                include_once("Views/footer.php");          
                                break;

               case '/registration':
                                  include_once("Views/header.php");
                                  include_once("Views/registration.php");
                                  include_once("Views/footer.php");
                                  if(isset($_REQUEST['register'])){
                                    echo "<pre>";
                                    print_r($_REQUEST);
                                    echo "</pre>";

                                  }
                                  break;
         
                case '/services':
                                include_once("Views/header.php");
                                echo "<h1>Services data page </h1>";
                                include_once("Views/footer.php");          
                                break;
                default:
                    # code...
                    break;         
                
                
          }

        }else{
                header("location:home");
        }

      }

    }     


$Controller = new  Controller;
?>