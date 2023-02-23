<?php
  error_reporting(0);
   class model{
            public function __construct(){
                echo "called Model";
                try{
                    $connection = new mysqli("localhost","root1","","masterdatabase");
                    echo "called try";
                } catch(Exception $e){
                    // echo "called catch";
                    // echo "<pre>";
                    // print_r($e->getmessage());
                    // echo "</pre>";
                    $ErrorMsg= $e->getmessage();
                    echo "<h2>$ErrorMsg</h2>";
                }
                echo "<pre>";
                print_r($connection);
                echo "</pre>";
            }
                   
                 public function select(){}
                 public function insert(){}
                 public function update(){}
                 public function delete(){}

   }

?>