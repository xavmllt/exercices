<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP N3</title>
</head>
<body>
    <h1>TP PHP N3</h1>

    <?php
    # Exercice 1
    echo 'Exercice 1 <br><br>';

    // Expression conditionnelle pour tester si un nombre est un multiple de 3 et 5
    function multiple($nbr){
        if($nbr%3 == 0 && $nbr%5 == 0){
            echo 'Ce nombre est un multiple de 3 et 5.';
        }else{
            echo 'Ce nombre n\'est pas un multiple de 3 et 5.';
        };
    };
    multiple(30);

    echo '<br>';
    echo '<br>';
    echo '<br>';


    # Exercice 2
    echo 'Exercice 2 <br><br>';

    // Expression conditionnelle pour vérifier un âge
    function ageSexe($age, $sexe){
        if($age >= 21 && $age <= 40 && $sexe == 'F'){
            echo 'Bienvenu madame !';
        }else{
            echo 'Vous n\'êtes pas le/la bienvenue !';
        };
    };
    ageSexe(40, 'F');

    echo'<br><br><br>';


    # Exercie 3
    echo 'Exercice 3 <br><br>';

    $compteur = 0;
    do{
        $x = rand(0, 1000);
        $y = rand(O, 1000);
        $z = rand(O, 1000);
        $compteur++;
        echo $x.', '.$y.', '.$z.'<br>';
    }
    while($x%2 == 1 || $y%2 == 0 || $z%2 == 0);
    echo 'Résultat obtenu en '.$compteur.' tours';

    echo '<br><br><br>';


    # Exercice 4
    echo 'Exercice 4 <br><br>';

    $initx = 89; // lettre P
    $inity = 72; // lettre H
    $initz = 80; // lettre P

    // Boucles imbriquées
    for($x = $initx; $x <= 99; $x++){
        for($y = $inity; $y <= 99; $y++){
            for($z = $initz; $z <= 99; $z++){
                for($num = 100; $num < 120; $num+= 100){
                    echo 'Numéro : '.$num.chr($x).chr($y).chr($z).' 75 <br><br>';
                }
                $initz = 65; // on repart à la lettre A pour le troisième caractère
            }
                $initx = 65; // on repart à la lettre A pour le deuxième caractère
        }
    };

    /* Pour ne conserver que les nombres multiples de 100 nous remplaçons l'instruction echo par le stockage des numéros dans un tableau.
    Il est affiché à la fin de toutes les boucles à l'aide de la fonction print_r() */
    for($x = $initx; $x <= 99; $x++){
        for($y = $inity; $y <= 99; $y++){
            for($z = $initz; $z <= 99; $z++){
                for($num = 100; $num < 120; $num+= 100){
                    $tab[] = $num.chr($x).chr($y).chr($z).' 75';
                }
                $initz = 65; // on repart à la lettre A pour le troisième caractère
            }
                $initx = 65; // on repart à la lettre A pour le deuxième caractère
        }
    };
    print_r($tab);

    echo '<br><br><br>';


    # Exercie 5
    echo 'Exercice 5 <br><br>';

    // nombre à trouver 
    $nb = 789;
    // compteur
    $coup = 0;
    // boucle de tirage
    echo 'Avec la boucle while :<br><br>';
    while($x != $nb){
        $x = rand(0, 1000);
        $coup++;
    };
    echo $nb.' trouvé(s) en '.$coup.' coups <br><br>';


    // avec la boucle for
    // nombre à trouver
    $nb1 = 650;
    // boucle tirage
    echo 'Avec la boucle for : <br><br>';
    for($coup = 1; $x != $nb1; $coup++){
        $x = rand(0, 1000);
    };
    echo $nb1.' trouvé(s) en '.$coup.' coups';

    echo '<br><br><br>';


    # Exercice 6
    echo 'Exercice 6 <br><br>';

    for($i = 11; $i < 36; $i++){
        $tab[$i] = chr(54 + $i);
    };

    // lecture avec for
    for($i = 11; $i < 36; $i++){
        echo 'Élément d\'indice '.$i.' : '.$tab[$i].'<br>';
    };

    echo '<hr>';

    // lecture avec foreach
    foreach($tab as $cle => $valeur){
        echo 'Élément d\'indice '.$cle.' : '.$valeur.'<br>';
    };

    echo '<br><br><br>';


    # Exercice 7
    echo 'Exercice 7 : <br><br>';

    $nbre = 57;
    $compt = 0;
    $x_ = rand(0, 1000);
    // boucle while
    while($x_ % $nbre != 0){
        $x_ = rand(0, 1000);
        $compt++;
    };
    echo $x_.' est multiple de '.$nbre.' : Résultat obtenu en '.$compt.' coups';

    ?>
</body>
</html>