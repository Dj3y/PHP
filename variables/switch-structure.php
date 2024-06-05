<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1>Switch</h1>
    <?php
     // 8. "School sucks!" Exercise
        // Start a new form that would allow a (nasty) teacher to grade a student.
        // It would display a different message according to the number annotated :
        //note below 4 : "This work is really bad. What a dumb kid! "
        //note between 5 and 9 : "This is not sufficient. More studying is required."
        //note equals 10 : "barely enough!"
        //note is 11, 12, 13 or 14 : "Not bad!"
        //note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
        //note is 19 or 20 : "Too good to be true : confront the cheater!"
        if(isset($_GET['note'])){
            $note = $_GET['note'];
            switch(true){
                case($note <=4):
                    echo"<p>This work is really bad. What a dumb kid!</p>";
                    break;
                case($note >= 4 && $note <= 9):
                    echo"<p>This is not sufficient. More studying is required.</p>";
                    break;
                case($note == 10):
                    echo"<p>barely enough!</p>";
                    break;
                case($note >= 11 && $note <= 14);
                    echo"<p>Not bad!</p>";
                    break;
                case($note >= 15 && $note <= 18):
                    echo"<p>Bravo, bravissimo!</p>";
                    break;
                case($note >= 19 && $note <= 20):
                    echo"<p>Too good to be true : confront the cheater!</p>";
                    break;
                default:
                    echo "<p>Invalid note.</p>";
                    break;
            }
        }
    ?>
    <form action="" method="GET">
        <label for="note">What is the note?</label>
        <input type="text" name="note" id="note">
        <button type="submit">Submit</button>  
    </form> 
</body>
</html>