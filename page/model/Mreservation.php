<?php
include_once __DIR__.'/../database/DB.php';

    class Mreservation{
        function getSelect(){

            
            $user = $_SESSION['user'][0]['id'];

            $sql="select c.*, s.libelle as 'libelleS', g.libelle as 'libelleG' from cours c , salle s, groupe g
                    where c.idG = g.id and c.idS = s.id and idUser=$user";
            $query=DB::connect()->query($sql);
            return $query->fetchAll();
        }



        function res2CreneauHoraire($groupe,$dateSeance){

            // session_start();
            $user = $_SESSION['user'][0]['id'];

            $sql="select creneauHoraire from cours where dateSéance='$dateSeance' and idG=$groupe
            union select creneauHoraire from cours where dateSéance='$dateSeance' and idUser=$user";

            $query=DB::connect()->query($sql);

            if($row = $query->fetchAll(PDO::FETCH_COLUMN,0)){
                return $row;
            }else{
                return $row=[];
            }

        }
        function res3Salle($groupe,$dateSeance,$creneauHoraire){

            $sqlGroupeEf="SELECT effectif FROM groupe WHERE id=$groupe";
            // die($sqlGroupeEf);
            $queryGroupeEf=DB::connect()->query($sqlGroupeEf);
            $rowGroupeEf = $queryGroupeEf->fetch(PDO::FETCH_NUM);
            $effectif=(int)$rowGroupeEf[0];

            $sql="select id as salleId from salle where capacity >= $effectif
            except select idS from cours where dateSéance='$dateSeance' and creneauHoraire='$creneauHoraire'";
            
            $query=DB::connect()->query($sql);

            if($row = $query->fetchAll(PDO::FETCH_COLUMN,0)){
                return $row;
                
                
            }else{
                return $row=[];
            }
            
        }

        function save($groupe,$dateSeance,$creneauHoraire,$salle){

            session_start();
            $user = $_SESSION['user'][0]['id'];
                    
                    $sql="INSERT INTO `cours`(`dateSéance`, `creneauHoraire`, `idG`, `idS`,`idUser`) VALUES ('$dateSeance','$creneauHoraire',$groupe,$salle,$user)";
                    $query=DB::connect()->query($sql);
        }


        function delete($id){
        
            $sql="delete from cours where id=$id";
            $query=DB::connect()->query($sql); 
        }

        

        function edit($id){

            $sql="select * from cours where id=$id";

            $query=DB::connect()->query($sql);
            return $query->fetchAll();
        }

        function update($Libelle,$effectif,$id){
           
            $sql="UPDATE cours SET libelle='$Libelle',effectif='$effectif' WHERE id = $id";
            // die($sql);
            $query=DB::connect()->query($sql);
        }
    }



?>