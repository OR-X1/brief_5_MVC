<?php
include_once __DIR__.'/../model/Mlogin.php';
include_once __DIR__.'/../model/Mmatiere.php';



    class LoginControler{

        function seConnect(){

            session_start();

            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];

                $Mlogin = new Mlogin;
                $query = $Mlogin->seConnect($email,$pwd);

                if($row = $query->fetchAll()){

                    $_SESSION['user'] = $row;

                    if ($_SESSION['user'][0]['role']=='admin') {
                        header('location: http://localhost/www/brief%205%20MVC/page/salle');
                    }else{
                        header('location: http://localhost/www/brief%205%20MVC/page/reservation');
                    }
                    
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

        function register(){

            $matiere = new Mmatiere();
		$matieres=$matiere->getSelect();

            require_once __DIR__.'/../view/register.php';
            
            if(isset($_POST['submit'])){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $email = $_POST['email'];
                $pwd = $_POST['pwd'];

                $Mlogin = new Mlogin;
                $query = $Mlogin->register($nom,$prenom,$email,$pwd);

               
                    
                    header('location: http://localhost/www/brief%205%20MVC/page/');

                

            }
        }

     
    }

?>