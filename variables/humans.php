<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi!</title>
</head>

<body>
    <!-- Pour executer le code il faut écrire la valeur de la variable name dans le URL car utilisation de méthode GET. Exemple:http://localhost/BeCode/PHP/_variable/humans.php?name=Alexandre -->
    <?php if(isset($_GET['name'])){?>
    <h1>Aloha <?php echo $_GET['name'] ?>!</h1>
    <?php } ?>
    <?php
        $a = 5;
        $a = $a + 37;
        echo $a;
    ?>
</body>

</html>