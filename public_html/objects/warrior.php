<?php
include_once './objects/character.php';

class Warrior extends Character {

    // Attributes
    private $sword;

    // Constructor
    public function __construct($s = 12, $a = 10, $b = 0) {
        parent::__construct($a, $b);
        $this->setSword($s);
    }

    // Getters
    public function getSword() {
        return $this->sword;
    }

    // Setters
    public function setSword($sword) {
        // Secure ...
        $this->sword = $sword;
    }

    // Methods

}