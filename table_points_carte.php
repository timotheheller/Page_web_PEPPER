<?php 


        $mysqli = new mysqli("localhost", "root", "Wesa2979", "hotspot");
        
        if($mysqli->connect_error){
            die('Connexion Error('.$mysqli->connect_errno.')'.$mysqli->connect-error);}
            
        //récupération des valeurs
        $id=$_POST['id'];
        $id_sommet=$_POST['id_sommet'];
        $label=$_POST['label'];
        $type=$_POST['type'];
        $x=$_POST['x'];
        $y=$_POST['y'];
      
        
        //commande sql d'insertion
        
        $sql= "INSERT INTO Points_carte_BTS(id,id_sommet,label,type,x,y) VALUES('$id','$id_sommet','$label',
       '$type','$x','$y')"; 
        
        $mysqli->query($sql);
        echo $mysqli->error;
        
         
        header('Location: Page_web_BDD.php');
        exit();
       
        ?>
