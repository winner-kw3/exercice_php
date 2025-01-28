<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */



 require_once("exercice2.php");
 class Employee extends Person{


    public function __construct(private float $salary, 
                                private string $position,
                                string $firstname,
                                string $lastName,
                                int $age){
        parent::__construct($firstname, $lastName, $age);
 }



 public function afficheInfos(): string{
        return parent::afficheInfos()." - ".$this->getPosition()." gagne ".$this->getSalary();
 }

    /**
     * Get the value of salary
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     */
    public function setSalary(float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }
    }

    $employee = new Employee("10000","Dev","Winner","KODJO", 19);
    
    echo "<br>employee : {$employee->afficheInfos()}";
 ?>