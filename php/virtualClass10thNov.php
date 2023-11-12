<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10th November Virtual Class</title>
</head>
<body>
    <?php
    # Exercice 1
    echo 'Exercice 1 <br><br>';

    $chaine = "voici une chaine de caractère";
    echo $chaine.'<br>';
    // Première lettre de chaque mots en majuscule
    $chaineMAJ = ucwords($chaine);
    echo $chaineMAJ.'<br><br><br>';


    # Exercice 2
    echo 'Exercice 2 <br><br>';

    $chaine = 'PHP MySQL';
    $taille = strlen($chaine);
    echo $taille.'<br>';
    for($i = 0; $i <= $taille; $i++){
        echo $chaine[$i].'<br>';
    };
    echo '<br><br><br>';


    # Exercice 3
    echo 'Exercice 3 <br><br>';


    # Exercice 4
    echo 'Exercice 4 <br><br>';

    $chaine = '<form action="script.php">';
    $chaineAffichee = htmlspecialchars($chaine, ENT_QUOTES);
    echo $chaineAffichee;


    # Exercice 6
    echo 'Exercice 6 <br><br>';

    function phrase($phrase){
        $zut = strpos($phrase, 'zut');
        if($phrase == $zut){
            echo 'La phrase ne peut pas être affichée';
        };
    };


    # Exercice 8
    echo 'Exercice 8 <br><br>';

    // Expression régulière pour valider un âge inférieur à 100 ans.
    function valide($age){
        if($age < 100){
            echo 'C\est valider !';
        };
    };
    valide(50);
    echo '<br><br><br>';


    # Exercice 9
    echo 'Exercice 9 <br><br>';

    $chaine = 'PHP \n est meilleur \n que ASP \n et JSP \n réuni';
    echo $chaine.'<br>';
    $nouvelleChaine = str_replace('\n', '<br>', $chaine);
    echo $nouvelleChaine;




    ?>
</body>
</html>