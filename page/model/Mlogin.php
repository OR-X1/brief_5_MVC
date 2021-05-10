<?php
include_once __DIR__.'/../database/DB.php';

    class Mlogin{

        function seConnect($email,$pwd){

            
            
                $sql = "select * from user where email = '$email' and pwd = '$pwd'";
                $query = DB::connect()->query($sql);
                
                return $query;
                
            }

            function register($nom,$prenom,$email,$pwd,$matiere){

                
                
                $sql="INSERT INTO `user`(`nom`, `prenom`, `email`, `pwd`, `role`) VALUES ('$nom','$prenom','$email','$pwd','enseignant')";
                
                $query=DB::connect()->query($sql);

                $sqllastId="SELECT id FROM user ORDER BY id DESC LIMIT 1";

                $queryLastId=DB::connect()->query($sqllastId);

                $rowId=$queryLastId->fetch();
                $lastId = $rowId[0];


                $sqlEns="INSERT INTO `enseignant`(`idUser`, `idMatiere`) VALUES ($lastId,$matiere)";
                
                
                $queryEns=DB::connect()->query($sqlEns);

                

                
            }
            

        }
    

?>