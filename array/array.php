<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1> 
    <?php
        // $countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
        // echo 'index 2: '. $countries[2] . "<br>" . "<br>";
        // $family = ["Okan", "Caner", "Anissa", "Leyla", "Tezcan"];
        // *print_r(): affiche le tableau avec l'index ou la label et la valeur stocké
        // print_r($family);
        // echo "<br>";
        // $recipes = ['pizza', "lasagne", "hamburger", "fries"];
        // print_r($recipes);
        // echo "<br>" . "<br>";
        // $films = ["Fast and Furious", "Harry Potter", "The blind side", "Taxi", "Last Vegas"];
        // echo $films[2];
        // *pre: aide à afficher le tableau avec les index et l'élément
        // echo '<pre>';
        // print_r($countries);
        // echo '</pre>';
        // echo '<pre>';
        // *var_dump(): affihe le tableau avex plus d'infos: nom de clé, index, taille de l'élément, le type est l'élément en lui-même
        // var_dump($countries);
        // echo '</pre>';
    // *Describe yourself using an associative array: $me. Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.
        $me =[
            'firstname' => 'Dzheylyan',
            'lastname' => 'Canak',
            'age' => 35,
            'season' => 'spring',
            'soccer' => true,
            "favorite_mouvies" => ["Fast and Furious", "Harry Potter", "The blind side", "Taxi", "Last Vegas"],
            "hobies" => ["read", "listen to music", "puzzles", "cooking"],
            "mother" => [
                'firstname' => 'Leyla',
                'age' => 56,
                'season' => 'spring',
                'soccer' => false,
                "favorite_mouvies" => ["Fast and Furious", "The blind side", "Taxi", "Last Vegas", "Maman, j'ai raté l'avion"],
                "hobies" => [ "listen to music", "puzzles", 'cooking']
            ]
        ];
        // echo '<pre>';
        // print_r($me);
        // echo '</pre>';
        // echo '<pre>';
        // print_r($me['mother']);
        // echo '</pre>';
        // var_dump($me);
        // *count(): calcule la taille du tableau
        // echo "taille du tableau me: " . count($me) . "<br>";
        // echo "taille du tableau mother: " . count($me['mother']) . "<br>";
        // $mesHobiesCount = count($me['hobies']);
        // echo "nombre de mes hobies: " . $mesHobiesCount . "<br>";
        // $motherHobiesCount = count($me['mother']['hobies']);
        // echo "nombre de hobies de ma mère: " . $motherHobiesCount . "<br>"; 
        // $totalHobies = $mesHobiesCount + $motherHobiesCount;
        // echo "total hobies: " . $totalHobies;
        // *ajouter un nouveau element dans un tableua 
        // // array_push($me['hobies'], "Taxidermy");
        // $me["hobies"][] = "Taxidermy";
        // echo '<pre>';
        // print_r($me);
        // echo '</pre>';
        // $me['lastname'] = "Durand";
        // echo '<pre>';
        // print_r($me);
        // echo '</pre>';
        $soulmate =[
            'firstname' => 'Okan',
            'lastname' => 'Canak',
            'age' => 40,
            'season' => 'spring',
            'soccer' => true,
            "favorite_mouvies" => ["Fast and Furious", "The blind side", "Taxi", "Last Vegas"],
            "hobies" => [ "listen to music", "puzzles", "cooking", "draw", "running"]
        ];
        $possible_hobbies_via_intersection = array_intersect($me['hobies'], $soulmate['hobies']);
        echo '<pre>';
        print_r($possible_hobbies_via_intersection);
        echo '</pre>';
        $possible_hobbies_via_merge = array_merge($me['hobies'], $soulmate['hobies']);
        echo '<pre>';
        print_r($possible_hobbies_via_merge);
        echo '</pre>';
        // array_combine
    ?>
</body>
</html>