<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable types</title>
</head>
<body>
    <h1>Types of variable PHP</h1>
    <?php
    $name = "Dzheylyan";
    $age = 35;
    $colorEyes = "brown";
    $family = array(
        0 => "Okan",
        1 => "Tedzhan",
        2 => "Leylya",
        3 => "Dzhaner"
    );
    $hungry = true;
    ?>
    <p>Hi My name is <?php echo $name;?>.</p>
    <p>I am <?php echo $age; ?> years old.</p>
    <p>My eyes are <?php echo $colorEyes;?>.</p>
    <p>The first person in my family is <?php echo $family[0]?>.</p>
    <p>Are you hungry? <?php echo $hungry;?></p>
</body>
</html>