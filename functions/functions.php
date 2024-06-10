<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php  
        //First, you need to declare the function to make it available. It is stored in memory, not ran.
        function say_hello($firstname){
                echo "<p>Hello $firstname!</p>";
                echo '<hr>';
        }
        $name = ["Maurice", "Alice", "John", "Eva", "Peter", "David"];
        // Function calls during "Runtime" :
        foreach($name as $firstname){
            say_hello($firstname);
        }
        function capitalize($world){
            echo ucfirst($world) . "<br>";
        }
        capitalize("emile");
        function displayTime($date, $time){
            $date = date("d M Y");
            $time = new DateTime();
            $now = $time->format('H:m:s');
            echo $now . " " .$date;
        }
        displayTime("date", "time");
        // TODO : finir exercices fonctions
    ?>
</body>
</html>