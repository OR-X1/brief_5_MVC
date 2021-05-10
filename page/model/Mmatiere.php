<?php
include_once __DIR__.'/../database/DB.php';

    class Mmatiere{
        function getSelect(){

            $sql="select * from matiere";
            $query=DB::connect()->query($sql);
            return $query->fetchAll();
        }

        function delete($id){

            $sql="delete from matiere where id=$id";
            $query=DB::connect()->query($sql);

            
        }

        function save($Libelle){

            $sql="INSERT INTO `matiere`(`libelle`) VALUES ('$Libelle')";
            $query=DB::connect()->query($sql);
        }

        function edit($id){
   
            $sql="select * from matiere where id=$id";

            $query=DB::connect()->query($sql);
            return $query->fetchAll();
        }

        function update($Libelle,$id){
           
            $sql="UPDATE matiere SET libelle='$Libelle' WHERE id = $id";
            // die($sql);
            $query=DB::connect()->query($sql);
        }
    }



?>