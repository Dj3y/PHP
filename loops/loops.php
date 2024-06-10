<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS</title>
</head>
<body>
    <h1>exercices boucles</h1>
    <?php
    // * Capitalize the first lettter of the array and save it back in the array
    // $names= array('John', 'jeanne', 'Joan', 'émile');
    // echo"<pre>";
    // var_dump($names);
    // echo"</pre>";
    // foreach ($names as $key => $value){
    //     $names[$key] = ucfirst($value);
    // }
    // echo"<pre>";
    // var_dump($names);
    // echo"</pre>";

    // * Using foreach, build a loop that displays each element of the array. Then, modify your loop so as to conjugate the verb "to code" in the present tense. Use a <br> to go to the next line.
    // $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
    // foreach ($pronouns as $pronoun){
    //     if($pronoun == "He/She"){
    //         echo $pronoun . " codes<br>";
    //     }
    //     else{
    //         echo $pronoun . " code<br>";
    //     }
    // }

    // * Write a script that prints the numbers from 1 to 120 using  while 
    // $nb = 1;
    // while ($nb <= 120){
    //     echo $nb . "<br>";
    //     $nb++;
    // }

    // * Write a script that prints the numbers from 1 to 120 using  for 
    // for($nb = 1; $nb <= 120; $nb++){
    //     echo $nb . "<br>";
    // }

    // * Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.
    $persons = ["Houda", "Zouzana", "Beni"];
    foreach($persons as $person){
        echo  $person . "<br>";
    }

    // * Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form.
    // $countries = [ "Argentina", "Belgium", "Bulgaria" , "Germany", "Italy", "Japan", "Portugal",  "Spain", "Türkiye", "United Kingdom"];
    $countriesISO = ['AR' => 'Argentina' , 'BE' => 'Belgium', 'BG' => 'Bulgaria', 'DE' => 'Germany', 'IT' => 'Italy', 'JP' => 'Jaman' ,'PT' => 'Portugal', 'ES' => 'Spain', 'TR' => 'Türkiye', 'GB' => 'United Kingdom'];
    ?>
    <!-- <div>
        <label for="countries">Choose a country:</label>
        <select name="countries" id="countries">
            <?php
            // foreach($countries as $country){
            //     echo'<option value= "' . $country. '">' . $country . '</option>';
            // }
            ?>
        </select>
    </div> -->
    <div>
        <label for="countriesISO">Choose a country:</label>
        <select name="countriesISO" id="countriesISO">
            <?php
            foreach($countriesISO as $key => $value){
                echo $countriesISO[$key];
                echo'<option value= "' . $countriesISO[$key]. '">' . $value . '</option>';
            }
            ?>
        </select>
    </div>
</body>
</html>