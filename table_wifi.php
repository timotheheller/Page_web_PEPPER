
        <?php 


        $mysqli = new mysqli("localhost", "root", "Wesa2979", "hotspot");
        
        if($mysqli->connect_error){
            die('Connexion Error('.$mysqli->connect_errno.')'.$mysqli->connect-error);}
            
        //récupération des valeurs
        $id=$_POST['id'];
        $date=$_POST['date'];
        $SSID=$_POST['SSID'];
        $reseau=$_POST['reseau'];
        $authentification=$_POST['authentification'];
        $chiffrement=$_POST['chiffrement'];
        $bssid=$_POST['bssid'];
        $puissance_signal=$_POST['puissance_signal'];
        $radio=$_POST['radio'];
        $canal=$_POST['canal'];
        $poids=$_POST['poids'];
        
        
        //commande sql d'insertion
        
        $sql= "INSERT INTO wifi (id,date,SSID,reseau,authentification,chiffrement,bssid,puissance_signal,radio,canal,poids) 
        VALUES('$id','$date','$SSID','$reseau','$authentification','$chiffrement','$bssid','$puissance_signal','$radio','$canal','$poids')"; 
        
        $mysqli->query($sql);
        echo $mysqli->error;
        
        header('Location: Page_web_BDD.php');
        exit();
       
        ?>
