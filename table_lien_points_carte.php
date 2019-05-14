<?php 


        $mysqli = new mysqli("localhost", "root", "Wesa2979", "hotspot");
        
        if($mysqli->connect_error){
            die('Connexion Error('.$mysqli->connect_errno.')'.$mysqli->connect-error);}
            
        //récupération des valeurs
        $id=$_POST['id'];
        $id_sommet=$_POST['id_sommet'];
        $successeurs=$_POST['successeurs'];
      
        
        
        //commande sql d'insertion
        
        $sql= "INSERT INTO Lien_points_carte_BTS (id,id_sommet,successeurs) VALUES('$id','$id_sommet','$successeurs')"; 
        
        $mysqli->query($sql);
        echo $mysqli->error;
        
         
        header('Location: Page_web_BDD.php');
        exit();
       
        ?>
