<?php
include_once __DIR__.'/../database/DB.php';

    class Mlogin{

        function seConnect($email,$pwd){

            
            
                $sql = "select * from user where email = '$email' and pwd = $pwd";
                $query = DB::connect()->query($sql);
                
                return $query;

                

                
            }

        }
    

?>