<html>
    <head>
        <title>Base de donnée PEPPER</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="fond">
        <style>
            
            .bleu {
                background-color: #dddddd;
            }
            
          .blanc {
                background-color: #ffffff;
            }
        </style>
      
      
        <?php
        $mysqli = new mysqli("localhost", "root", "Wesa2979", "hotspot");
        
        if($mysqli->connect_error){
            die('Connexion Error('.$mysqli->connect_errno.')'.$mysqli->connect-error);}
    
        $reponse = "SELECT * FROM wifi";
        $res = $mysqli->query($reponse);

        $reponse3 = "SELECT * FROM Points_carte_BTS";
        $res3 = $mysqli->query($reponse3);
        echo $mysqli->error;
    
        
        $reponse5 = "SELECT * FROM Lien_points_carte_BTS";
        $res5 = $mysqli->query($reponse5);
        echo $mysqli->error;
        
        ?>
        <?php
        //TABLE WIFI---------------------------------------------------------
        ?>
        <h1 align=center>Base de donn&eacute;e Projet Pepper</h1>
        <table border=1 align=center>
               <tr><th colspan=12><h2 align=center>Table WIFI</h2></th></tr>
                <tr>
                    <th>id</th>
                    <th>date</th>
                    <th>SSID</th>
                    <th>reseau</th>
                    <th>authentification</th>
                    <th>chiffrement</th>
                    <th>bssid</th>
                    <th>puissance_signal</th>
                    <th>radio</th>
                    <th>canal</th>
                    <th colspan=2>poids</th>
                    
                  
                </tr>
                
            <?php
            $cl = 1;
            while($donnees = mysqli_fetch_array($res))
            {
                $cl = 1 - $cl;
                if ($cl == 1) $classe="bleu";
                else $classe = "blanc";
            ?>
                <tr class=<?php echo "$classe" ?>>
                    <td><?php echo $donnees['id'];?></td>
                    <td><?php echo $donnees['date'];?></td>
                    <td><?php echo $donnees['SSID'];?></td>
                    <td><?php echo $donnees['reseau'];?></td>
                    <td><?php echo $donnees['authentification'];?></td>
                    <td><?php echo $donnees['chiffrement'];?></td>
                    <td><?php echo $donnees['bssid'];?></td>
                    <td><?php echo $donnees['puissance_signal'];?></td>
                    <td><?php echo $donnees['radio'];?></td>
                    <td><?php echo $donnees['canal'];?></td>
                    <td colspan=2><?php echo $donnees['poids'];?></td>
                </tr>
            <?php 
            }
            echo "<br>";
            echo "<br>";
            ?>
            
         <tr class="form1">  
        <form name="ajout_table_wifi" method="post" action="table_wifi.php">
            <td><input type="int" name="id" id="id" size="1"></td>
            <td><input type="datetime" name="date" id="date" size="17"></td>
            <td><input type="text" name="SSID" id="SSID" size="13"></td>
            <td><input type="text" name="reseau" id="reseau" size="10"></td>
            <td><input type="text" name="authentification" id="authentification" size="15"></td>
            <td><input type="text" name="chiffrement" id="chiffrement" size="8"></td>
            <td><input type="text" name="bssid" id="bssid" size="15"></td>
            <td><input type="int" name="puissance_signal" id="puissance" size="15"></td>
            <td><input type="text" name="radio" id="radio" size="5"></td>
            <td><input type="int" name="canal" id="canal" size="5"></td>
            <td><input type="int" name="poids" id="poids" size="5"></td>
           
            <td><input type="submit" name="ajout_table_wifi" value="ajouter"></td>
        </form>     
        </tr> 
        
        <?php 
           //----------------------------------------------------------------
            ?>
            <?php
            //TABLE Point_carte_BTS------------------------------------------------------
            ?>            
            <table border=1 align=center>
             <tr><th colspan=7><h2 align=center>Table Points carte BTS</h2></th></tr>
                <tr>
                    <th>id</th>
                    <th>id_sommet</th>
                    <th>label</th>
                    <th>type</th>
                    <th>x</th>
                    <th colspan=2 >y</th>
                </tr>
            <?php
            $cl =1;
            while($donnees = mysqli_fetch_array($res3))
            {
            $cl = 1 - $cl;
                if ($cl == 1) $classe="bleu";
                else $classe = "blanc";
            ?>
                <tr class=<?php echo "$classe" ?>>
                    <td><?php echo $donnees['id'];?></td>
                    <td><?php echo $donnees['id_sommet'];?></td>
                    <td><?php echo $donnees['label'];?></td>
                    <td><?php echo $donnees['type'];?></td>
                    <td><?php echo $donnees['x'];?></td>
                    <td colspan=2><?php echo $donnees['y'];?></td>
                </tr>
            <?php
            }
            echo "<br>";
            echo "<br>";
            ?>
            <tr class="form1">  
        <form name="ajout_table_points_carte" method="post" action="table_points_carte.php" >
            <td><input type="int" name="id" id="id2" size="3"></td>
            <td><input type="int" name="id_sommet" id="id_sommet" size="17"></td>
            <td><input type="text" name="label" id="label" size="13"></td>
            <td><input type="text" name="type" id="type" size="10"></td>
            <td><input type="float" name="x" id="x" size="15"></td>
            <td><input type="float" name="y" id="y" size="17"></td>
            <td><input type="submit" value="ajouter"></td>
        </form>     
        </tr> 
           
            <?php 
            //------------------------------------------------------------
            //TABLE Lien_points_carte_BTS-----------------------------------------------
            ?>
             <table border=1 align=center>
               
                <tr><th colspan=4><h2 align=center>Table Lien points carte BTS</h2></th></tr>
                <tr> 
                    <th>id</th>
                    <th>id_sommet</th>
                    <th colspan=2>successeurs</th>
                </tr>
            <?php
            $cl= 1;
            while($donnees = mysqli_fetch_array($res5))
            {
             $cl = 1 - $cl;
                if ($cl == 1) $classe="bleu";
                else $classe = "blanc";
            ?>
                <tr class=<?php echo "$classe" ?>>
                    <td><?php echo $donnees['id'];?></td>
                    <td><?php echo $donnees['id_sommet'];?></td>
                    <td colspan=2><?php echo $donnees['successeurs'];?></td>
                </tr>
            <?php
            }
            echo "<br>";
            echo "<br>";
            //------------------------------------------------------------
            ?>
            <tr class="form1">  
        <form name="ajout_table_lien_points" method="post" action="table_lien_points_carte.php">
            <td><input type="int" name="id" id="id3" size="2"></td>
            <td><input type="int" name="id_sommet" id="id_sommet" size="17"></td>
            <td><input type="varchar(11)" name="successeurs" id="successeurs" size="13"></td>
            <td><input type="submit" value="ajouter"></td>
        </form>     
        </tr> 
            <?php
            //--------------------------------------------------------------------------------------------------------
            ?>
        </table>
        <p class=lien align=center> Lien vers <a class=lien2 href="http://192.168.1.125/phpmyadmin" target="_blank">PHPmyadmin</a></p>
        </div>
    </body>
</html>
