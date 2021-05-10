<?php
include_once __DIR__.'/../model/Mlogin.php';


    class RegisterControler{

        
        function register(){

            require_once __DIR__.'/../view/register.php';
            
            if(isset($_POST['submit'])){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];
                $matiere = $_POST['matiere'];

                

                $Mlogin = new Mlogin;
                $query = $Mlogin->register($nom,$prenom,$email,$pwd,$matiere);

                    header('location: http://localhost/www/brief%205%20MVC/page/');

            }
        }

    }

?>