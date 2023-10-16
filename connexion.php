<?php

   try{
    $access=new pdo("mysql:host=localhost;dbname=vaovao_speed;charset=utf8","root","");

    
    $access->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

   }catch (Exception $e) 
   {
       echo $e->getMessage();
   }   

    
?>