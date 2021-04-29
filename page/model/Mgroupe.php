<?php

    class Mgroupe{
        function getSelect(){

            $sql="select * from groupe";
            $query=DB::connect()->query($sql);
        }
    }

?>