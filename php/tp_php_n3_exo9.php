<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9</title>
</head>
<body>
    <h1>TP PHP N3</h1>

    <h2>Exercice 9</h2>

    <?php
    // connexion au serveur
    $serv_name = 'localhost';
    $user = 'root';
    $password = 'root'; // je met un password car je suis sur mac
    $connexion = mysqli_connect($serv_name, $user, $password);

    
    // test si connexion réussi
    if(!$connexion){
        die('Echec de la connexion'.mysqli_connect_error());
    }else{
        echo 'Connexion réussi';
    };
    echo '<br><br>';

    echo 'Connexion à la base casse2 <br><br>';
    # Connexion à la base de donnée
    $cnx = mysqli_connect('localhost', 'root', 'root', 'casse2');
    if (mysqli_connect_errno()){
        echo 'Erreur de connexion à la base de donnée';
    }else{
        echo 'Bien connecté à la base de donnée';
    };

    echo '<br><br>';

    // je défini les requêtes
    $sql = "SELECT * FROM personne WHERE ville = 'Paris'";
    $sql1 = "SELECT * FROM personne WHERE ville = 'Bordeaux'";
    $sql2 = "SELECT * FROM personne WHERE age >= 25 AND age <= 40";
    $sql3 = "SELECT * FROM personne WHERE nom LIKE '%n%'";
    
    // affichage des requêtes

    echo 'Affichage de toutes les personnes vivant à Paris : <br><br>';
    if($result = mysqli_query($cnx, $sql)){
        echo 'Pour cette requête <br>'.$sql.'<br><br>';
        echo 'il y a : '.mysqli_num_rows($result).' réponses<br>';
        echo '<br><br>';
        echo '<html><style>';
        echo 'table, th, td{
            border: 1px solid black;
            text-align: center;
            }';
        echo '</style>';
        echo '<body><table width=500>';
        echo '<th>'.'NumAch'.'</th>';
        echo '<th>'.'Nom'.'</th>';
        echo '<th>'.'Âge'.'</th>';
        echo '<th>'.'Ville'.'</th>';
        echo '<th>'.'Sexe'.'</th>';
        // pour l'ensemble des lignes du jeu de résulats, répète :
        while($row = mysqli_fetch_row($result)){
            echo '<tr>';
            echo '<td>'.$row[0].'</td>';
            echo '<td>'.$row[1].'</td>';
            echo '<td>'.$row[2].'</td>';
            echo '<td>'.$row[3].'</td>';
            echo '<td>'.$row[4].'</td>';
            echo '</tr>';
        }
        echo '</table></body></html>';
    }
    // annule le jeu de résultat
        mysqli_free_result($result);

        echo '<br><br><br>';

        echo 'Affichage de toutes les personnes vivant à Bordeaux :<br><br>';
        if($result1 = mysqli_query($cnx, $sql1)){
            echo 'Pour cette requête <br>'.$sql.'<br><br>';
            echo 'il y a : '.mysqli_num_rows($result1).' réponses<br>';
            echo '<br><br>';
            echo '<html><style>';
            echo 'table, th, td{
                border: 1px solid black;
                text-align: center;
                }';
            echo '</style>';
            echo '<body><table width=500>';
            echo '<th>'.'NumAch'.'</th>';
            echo '<th>'.'Nom'.'</th>';
            echo '<th>'.'Âge'.'</th>';
            echo '<th>'.'Ville'.'</th>';
            echo '<th>'.'Sexe'.'</th>';
            // pour l'ensemble des lignes du jeu de résulats, répète :
            while($row = mysqli_fetch_row($result1)){
                echo '<tr>';
                echo '<td>'.$row[0].'</td>';
                echo '<td>'.$row[1].'</td>';
                echo '<td>'.$row[2].'</td>';
                echo '<td>'.$row[3].'</td>';
                echo '<td>'.$row[4].'</td>';
                echo '</tr>';
            }
            echo '</table></body></html>';
        }
        mysqli_free_result($result1);

        echo '<br><br><br>';

        echo 'Affichage de toutes les personnes ayant entre 25 et 40 ans :<br><br>';
        if($result2 = mysqli_query($cnx, $sql2)){
            echo 'Pour cette requête <br>'.$sql.'<br><br>';
            echo 'il y a : '.mysqli_num_rows($result2).' réponses<br>';
            echo '<br><br>';
            echo '<html><style>';
            echo 'table, th, td{
                border: 1px solid black;
                text-align: center;
                }';
            echo '</style>';
            echo '<body><table width=500>';
            echo '<th>'.'NumAch'.'</th>';
            echo '<th>'.'Nom'.'</th>';
            echo '<th>'.'Âge'.'</th>';
            echo '<th>'.'Ville'.'</th>';
            echo '<th>'.'Sexe'.'</th>';
            // pour l'ensemble des lignes du jeu de résulats, répète :
            while($row = mysqli_fetch_row($result2)){
                echo '<tr>';
                echo '<td>'.$row[0].'</td>';
                echo '<td>'.$row[1].'</td>';
                echo '<td>'.$row[2].'</td>';
                echo '<td>'.$row[3].'</td>';
                echo '<td>'.$row[4].'</td>';
                echo '</tr>';
            }
            echo '</table></body></html>';
        }
        mysqli_free_result($result2);

        echo '<br><br><br>';

        echo 'Affichage de toute les personnes dont le nom comprend la lettre n : <br><br>';
        if($result3 = mysqli_query($cnx, $sql3)){
            echo 'Pour cette requête <br>'.$sql.'<br><br>';
            echo 'il y a : '.mysqli_num_rows($result3).' réponses<br>';
            echo '<br><br>';
            echo '<html><style>';
            echo 'table, th, td{
                border: 1px solid black;
                text-align: center;
                }';
            echo '</style>';
            echo '<body><table width=500>';
            echo '<th>'.'NumAch'.'</th>';
            echo '<th>'.'Nom'.'</th>';
            echo '<th>'.'Âge'.'</th>';
            echo '<th>'.'Ville'.'</th>';
            echo '<th>'.'Sexe'.'</th>';
            // pour l'ensemble des lignes du jeu de résulats, répète :
            while($row = mysqli_fetch_row($result3)){
                echo '<tr>';
                echo '<td>'.$row[0].'</td>';
                echo '<td>'.$row[1].'</td>';
                echo '<td>'.$row[2].'</td>';
                echo '<td>'.$row[3].'</td>';
                echo '<td>'.$row[4].'</td>';
                echo '</tr>';
            }
            echo '</table></body></html>';
        }
        mysqli_free_result($result3);

        // ferme la connexion à la base de donnée
        mysqli_close($cnx);
    ?>
</body>
</html>