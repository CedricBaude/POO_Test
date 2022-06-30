<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php

    // include_once './objects/character.php';
    include_once './objects/warrior.php';

    // Model View Controller
    // $warriorOne = new Character;
    // $warriorOne->describe();

    // $warriorOne->setLife(20);
    // $warriorOne->setDef(6);
    // $warriorOne->describe();
    
    // $warriorTwo = new Character(20, 6);
    // $warriorTwo->describe();

    $warriorOne = new Warrior;
    $warriorOne->describe();

    $warriorTwo = new Warrior(12, 30, 3000);
    $warriorTwo->describe();

    ?>
</body>
</html>