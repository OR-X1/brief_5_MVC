<?php
include_once __DIR__.'/../database/DB.php';

    class Msale{
        function getSelect(){

            $sql="select * from salle";
            $query=DB::connect()->query($sql);
            return $query->fetchAll();
        }

        function getSelectSalleFilter($res3Salles){

            if(empty($res3Salles)){
                $res3Salles[0]=0;
            }

            $sql="select * from salle where id in (".implode(',', $res3Salles).")";
                
            $query=DB::connect()->query($sql);

                    if($row=$query->fetchAll(PDO::FETCH_ASSOC)){
                        return $row;
                    }
                    else{
                        return $row=[];
                    }
                    $query=null;
        }

        function delete($id){

            $sql="delete from salle where id=$id";
            $query=DB::connect()->query($sql);

            
        }

        function save($Libelle,$capacite){

            $sql="INSERT INTO `salle`(`libelle`, `capacity`) VALUES ('$Libelle','$capacite')";
            $query=DB::connect()->query($sql);
        }

        function edit($id){
   
            $sql="select * from salle where id=$id";

            $query=DB::connect()->query($sql);
            return $query->fetchAll();
        }

        function update($Libelle,$capacite,$id){
           
            $sql="UPDATE salle SET libelle='$Libelle',capacity='$capacite' WHERE id = $id";
            // die($sql);
            $query=DB::connect()->query($sql);
        }
    }



?>