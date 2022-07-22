<?php

 class connection
 {
    public function connect()
    {
        try{
              $db = new PDO('mysql:host=localhost;dbname=gestion-conges-contrats', 'root', '');
              $db->exec('SET NAMES "UTF8"');
              echo 'connexion reussit'; 
            }
         catch(PDOException $e)
            {
               echo  'erreur :'.$e->getMessage();
  
            }
  
      
    }
  

 }

        


?>