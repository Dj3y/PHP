<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>
</head>

<body>
    <h1>Contidions PHP</h1>
    <?php
        // $temperature = 19;
        //     if( $temperature >= 15) {
        //         // code to execute if the condition results TRUE
        //         $clothes = "T-shirt";
        //         $should_i_wear_a_scarf = false;
        //     } else {
        //         // code to execute if the condition results FALSE
        //         $clothes = "Pull-over";
        //         $should_i_wear_a_scarf = true;
        //     }
        //     echo '<p>' . $clothes . '</p>';
        //     echo '<p> . $should_i_wear_a_scarf . '</p>';
    /**
     * Series of exercises on PHP conditional structures.
    */  
    // 1.1 Clean your room Exercise 
        //modification de booléen pour tester le code  
        // $room_is_filthy = false;

        // if($room_is_filthy){
        //     echo "<p>Yuk, Room is dirty : let's clean it up !</p>";
        //     cleanup_room();
        //     echo "<p>Room is now clean!</p>";
        //     $room_is_filthy = false;
        // } else {
        //     echo "<p>Nothing to do, room is neat.</p>";
        // }
        // // création de la fonction 
        // function cleanup_room(){
        //     echo "<pbr> Cleaning the room.</p>";
        // }
    // 1.2. Improve it
        // Let's now make our script a little smarter by allowing more than 2 possible values. The room could be either "health hazard", "filthy", "dirty", "clean", "immaculate" in that order. Store them in an array $possible_states.
        // Use a if/ elseif / else for that. Invent the messages to display for each use case.
        // création d'un tableau pour toutes les états de la chambre
        // $possible_states = ["health hazard", "filthy", "dirty", "clean"];
        // // pour tester le code il faut changer l'index pour avoir toutes les états
        // $room_is_filthy = $possible_states[3];

        // if($room_is_filthy == "health hazard"){
        //     echo "<p>Yuk, Room is Disgusting! Let's clean it up !</p>";
        // }
        // else if($room_is_filthy == "filthy"){
        //     echo "<p>Yuk, Room is filthy : let's clean it up !</p>";
        // }
        // else if($room_is_filthy == "dirty"){
        //     echo "<p>Yuk, Room is dirty : let's clean it up!</p>";
        // }
        // else{
        //     echo "<p>Nothing to do, room is neat.</p>";
        // }
    // 2. Display a different greeting message depending on the time of the day.
        // You know what's worse than a stupid robot? A stupid impolite robot. Let's fix that.
        // Write a script that implements these specifications :  
        //     If the time is between 05h00 and 09h00, display "Good morning !".
        //     If the time is between 09h01 and 12h00, display "Good day !".
        //     If the time is between 12h01 and 16h00, display "Good afternoon !".
        //     If the time is between 16h01 and 21h00, display "Good evening !".
        //     If the time is between 21h01 and 04h59, display "Good night !".   
        // Tip: you can combine multiple conditions (using AND / OR).
        // afficher la date et l'heure actuelle
        // $date = new DateTime();
        // // affiche l'heure et les minutes; si on veut afficher la date il faut ajouter : Y-m-d 
        // $now = $date->format('H:m');
        // echo $now . "<br>";
        // // pour afficher le type de la variable
        // // echo "<p>" . gettype($now) ."</p>";
        // if ($now >= "05:00" && $now <= "09:00") {
        //     echo "<p>Good morning!</p>";
        // } elseif ($now >= "09:01" && $now <= "12:00") {
        //     echo "<p>Good day!</p>";
        // } elseif ($now >= "12:01" && $now <= "16:00") {
        //     echo "<p>Good afternoon!</p>";
        // } elseif ($now >= "16:01" && $now <= "21:00") {
        //     echo "<p>Good evening!</p>";
        // } else {
        //     echo "<p>Good night!</p>";
        // }
    // 3. Display a different greeting according to the user's age.
        // Let's continue to make our robot a little more civil and greet humans properly, taking into account their age.
        // Here is the user experience we aim for :
        // First, users see a form asking for their age :
        //     Please type your age : __
        // When they submit the form, the page displays the right message:
        //     if age is less than 12 years old, display "Hello kiddo!"
        //     if age is between 12 and 18 years old, display "Hello Teenager !"
        //     if age is between 18 and 115 years old, display Hello Adult !"
        //     if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"
        // Have both the form and the processing script in the same file. Use the GET method.
    // 4. Display a different greeting according to the user's age and gender.
        // Improve the previous form to add another question: "Man or Woman?". Use an input of type radio to capture the data.
        // If gender is "Woman", the displayed message should be adapted accordingly.
    // 5. Display a different greeting according to the user's age, gender and mothertongue.
        // Improve the previous form to add yet another question: "Do you speak English ? ". Use an input of type radio to capture the data. Possible answers: "yes" or "no".
        // on vérifie si la variable age existe, qui est communiqué avec la méthode GET
        // if(isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['answer'])){
        //     $answer = $_GET['answer'];
        //     $gender = $_GET['gender'];
        //     $age = $_GET['age'];
        //     if($age < 12){
        //         if($gender == "woman" && $answer == "yes"){

        //             echo "<p>Hello miss kiddo!</p>";
        //         }
        //         else if($gender == "woman" && $answer == "no"){

        //             echo "<p>Aloha girl</p>";
        //         }
        //         else if($gender == "man" && $answer == "yes"){

        //             echo "<p>Hello mister kiddo!</p>";
        //         }
        //         else{
        //             echo "<p>Aloha boy!</p>";
        //         }
        //     }
        //     else if($age >= 12 && $age < 18){
        //         if($gender == "woman" && $answer == "yes"){
        //             echo "<p>Hello  miss tenager!</p>";
        //         }
        //         else if($gender == "woman" && $answer == "no"){

        //             echo "<p>Aloha miss tenager!</p>";
        //         }
        //         else if($gender == "man" && $answer == "yes"){
        //             echo "<p>Hello  mister tenager!</p>";
        //         }
        //         else{
        //             echo "<p>Aloha mister tenager!</p>";
        //         }
        //     }
        //     else if($age >= 18 && $age <115){
        //         if($gender == "woman" && $answer == "yes"){
        //             echo "<p>Hello miss adult!</p>";
        //         }
        //         else if($gender == "woman" && $answer == "no"){
        //             echo "<p>Aloha miss adult!</p>";
        //         }
        //         else if($gender == "man" && $answer == "yes"){
        //             echo "<p>Hello  mister adult!</p>";
        //         }
        //         else{
        //             echo "<p>Aloha mister adult!</p>";
        //         }
        //     }
        //     else{
        //         if($gender == "woman" && $answer == "yes"){
        //             echo "<p>Wow! Still alive ? Are you a miss robot, like me ? Can I hug you ?</p>";
        //         }
        //         else if($gender == "woman" && $answer == "no"){
        //             echo "<p>Aloha miss robot?</p>";
        //         }
        //         else if($gender == "man" && $answer == "yes"){
        //             echo "<p>Wow! Still alive ? Are you a mister robot, like me ? Can I hug you ?</p>";
        //         }
        //         else{
        //             echo "<p>Aloha mister robot?</p>";
        //         }
        //     }
        // }
    ?>
    <!-- Formulaire pour demander l'age, le genre et s'il parle anglais  -->
    <!-- <form action="" method="GET">
        <p>Do you speak English?</p>
        <input type="radio" name="answer" id="yes" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" name="answer" id="no" value="no">
        <label for="no">No</label><br>
        <p>What is your gender?</p>
        <input type="radio" name="gender" id="man" value="man"> 
        <label for="man">Man</label><br>
        <input type="radio" name="gender" id="woman" value="woman"> 
        <label for="woman">Woman</label><br>
        <label for="age">Please type your age: </label>
        <input type="text" name="age" id="age">
        <button type="submit">Greet me now</button>
    </form> -->
    <?php
    // 6. The Girl Soccer team
        // You want to create a soccer team for girls between 21 and 40 years old.
        // Create a form asking for the age, gender and name of the person. Use the $age and $gender variables in an if/else to display a "welcome to the team !" or "Sorry you don't fit the criteria" message.
        // if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])){
        //     $name = $_GET['name'];
        //     $age = $_GET['age'];
        //     $gender = $_GET['gender'];
            // if($age >= 21 && $age <= 40  && $gender == "woman"){
                //     echo "<p>welcome to the team !</p>";
                // }
                // else{
                    //     echo "<p>Sorry you don't fit the criteria!</p>";
                    // }                
    // 7. Achieve the same, without the ELSE.
        // A key aspect of coding conditions is to keep them as simple as possible. Improve the previous exercise by using only an if statement (without the else), and a default value that changes only if the condition is true.
        // ajout d'un message par defaut
            // $message = "Sorry you don't fit the criteria!";
        //     if($age >= 21 && $age <= 40  && $gender == "woman"){
        //         $message = "welcome to the team !";
        //     }
        //     echo '<p>' . $message . '</p>';
        // }
    ?>
    <!-- formulaire pour l'équipe de foot des filles -->
    <!-- <form action="" method="GET">
        <label for="name">What is your name?</label>
        <input type="text" name="name" id="name"><br>
        <label for="age">How old you?</label>
        <input type="text" name="age" id="age">
        <p>What is your gender?</p>
        <input type="radio" name="gender" id="man" value="man"> 
        <label for="man">Man</label><br>
        <input type="radio" name="gender" id="woman" value="woman"> 
        <label for="woman">Woman</label><br>
        <button type="submit">Submit</button>
    </form> -->
    <?php
    // 8. "School sucks!" Exercise
    // Start a new form that would allow a (nasty) teacher to grade a student.
    // It would display a different message according to the number annotated :
    //     note below 4 : "This work is really bad. What a dumb kid! "
    //     note between 5 and 9 : "This is not sufficient. More studying is required."
    //     note equals 10 : "barely enough!"
    //     note is 11, 12, 13 or 14 : "Not bad!"
    //     note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
    //     note is 19 or 20 : "Too good to be true : confront the cheater!"
    ?>
</body>

</html>