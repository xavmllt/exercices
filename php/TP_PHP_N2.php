<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP N2</title>
</head>
<body>
    <?php
        // TP PHP N2
        echo 'TP PHP N2 <br><br><br><br>';


        // Exercice 1 :
        
            echo 'Exercice 1 : <br><br>';

            echo 'Les variables qui ont un nom valide sont : $mavar, $var5, $_mavar, $_5var, $__élément1. <br><br><br>';


        // Exercice 2 :

            echo 'Exercice 2 : <br><br>';

            echo 'Les valeurs de $x, $y, $z à la fin du script seront :<br>';
            echo '$x : PHP 8 <br>'; 
            echo '$y : PHP 8 <br>'; 
            echo '$z : PostgreSQL <br><br><br>'; 

        
        // Exercice 3

            echo 'Exercice 3 : <br><br>';

            echo 'Lecture des variables grâce à un tableau : <br><br>';

            $GLOBAL = array(
                '$x' => 'PHP 8',
                '$y' => 'PHP 8',
                '$z' => 'PostgreSQL'
            );

            foreach($GLOBAL as $vari => $valeur){
                echo $vari.' : '.$valeur.'<br>';
            };

            echo '<br><br>';


        // Exercice 4 
            
            echo 'Exercice 4 : <br><br>';

            echo 'La version de PHP est : '.phpversion().'<br>';
            echo 'Le système d\'exploitation du serveur est : '.php_uname('s');

            echo '<br><br><br>';


        // Exercice 5
            
            echo 'Exercie 5 : <br><br>';

            $x = 'PHP7';
            echo '$x vaut : '.$x.'<br>';
            $a[] = &$x;
            echo '$a[] vaut : '.$a.'<br>';
            $y = '8e version de PHP';
            echo '$y vaut : '.$y.'<br>';
            $z = $y * 10;
            echo '$z vaut : '.$z.'<br>';
            $x = $y;
            echo '$x vaut maintenant : '.$x.'<br>';
            $y = $z;
            echo '$y vaut maintenant : '.$y.'<br>';
            $a[0] = 'MySQL';
            echo '$a vaut maintenant : '.$a[0].'<br><br><br>';


        // Exercie 6

            echo 'Exercice 6 : <br><br>';

            $x = '7 personnes';
            $y = (integer)$x;
            $x = '9E3';
            $z = (double)$x;

            echo 'À la fin du script : <br>';
            echo '$x vaudra : '.$x.'<br>';
            echo '$y vaudra : '.$y.'<br>';
            echo '$z vaudra : '.$z.'<br><br><br>';


        // Exercice 7 

            echo 'Exercice 7 : <br><br>';

            $a = '0';
            $b = 'TRUE';
            $c = FALSE;
            $d = ($a or $b);
            $e = ($a and $c);
            $f = ($a xor $b);

            echo '$a a comme valeur : ';
            var_dump($a);
            echo '<br><br>';
            echo '$b a comme valeur : ';
            var_dump($b);
            echo '<br><br>';
            echo '$c a comme valeur : ';
            var_dump($c);
            echo '<br><br>';
            echo '$d a comme valeur : ';
            var_dump($d);
            echo '<br><br>';
            echo '$e a comme valeur : ';
            var_dump($e);
            echo '<br><br>';
            echo '$f a comme valeur : ';
            var_dump($f);
            echo '<br><br>';
    ?>
</body>
</html>