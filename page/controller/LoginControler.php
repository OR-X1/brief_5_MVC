<?php
include_once __DIR__.'/../model/Mlogin.php';



    class LoginControler{

        function seConnect(){

            session_start();

            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];

                $Mlogin = new Mlogin;
                $query = $Mlogin->seConnect($email,$pwd);

                // die(print_r($query));
                // die(print_r($row));
                if($row = $query->fetchAll()){

                    $_SESSION['user'] = $row;
                    
                    header('location: http://localhost/www/brief%205%20MVC/page/salle');

                }else{
                    $_SESSION['erreurLogin']="<strong>Erreur!</strong> Login ou mote de passe incorrecte !";
                    header('location: http://localhost/www/brief%205%20MVC/page');
                }

            }

            

        }


        function deConnect(){

            session_start();

            session_unset();


            session_destroy();



            header('location: http://localhost/www/brief%205%20MVC/page');
            

        }

        function erreur(){
            session_start();
            if(isset($_SESSION['erreurLogin'])){
                $erreur = $_SESSION['erreurLogin'];
            }else{
                $erreur = "";
            }
            session_destroy();
        }
    }

?>