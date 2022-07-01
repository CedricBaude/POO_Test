<?php
include_once './settings/db.php';

class Manager {

    // Attributes
    private $bdd;

    // Constructor
    public function __construct(PDO $db){
        $this->setBdd($db);
        
    }
    // Getters


    // Setters
    public function setBdd(PDO $db){
        $this->bdd = $db;
    }

    // Methods
    public function create($perso) {
        //if Warrior
        // ...

        if (get_class($perso) == "Warrior") {
            // INSERT INTO `warrior` (`id` , `life`, `def`, `sword`) VALUES (NULL, '20', '40', '30')
            $sql = $this->bdd->prepare("INSERT INTO `warrior` (`life`, `def`, `sword`) VALUES (:life, :def, :sword)");
            //var_dump($sql);

            // Secure
            $sql->bindValue(":life" , $perso->getLife(), PDO::PARAM_INT);
            $sql->bindValue(":def" , $perso->getdef(), PDO::PARAM_INT);
            $sql->bindValue(":sword" , $perso->getSword(), PDO::PARAM_INT);

            $sql->execute();
        }

        // elseif Wizard
        // ...

        // elseif Archer
        // ...

        // else unknown object
        // ...

    }

    public function read($perso) {

        echo '<pre>';
        print_r($perso);
        echo '</pre>';
        // var_dump($perso);

        // else unknown object
        // ...

    }

    public function update($perso) {

        // if Warrior
        // ...

        // elseif Wizard
        // ...

        // elseif Ark
        // ...

        // else unknown object
        // ...

    }

    public function delete($perso) {

        // if Warrior
        // ...

        // elseif Wizard
        // ...

        // elseif Ark
        // ...

        // else unknown object
        // ...

    }

}