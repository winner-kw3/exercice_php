<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */


 class Math {

    public function __construct(public float $a, 
                                public float $b,
                               ){}
    public static function add($a, $b) {
        return $a + $b;
    }
    public static function subtract($a, $b) {
        return $a - $b;
    }
    public static function multiply($a, $b) {
        return $a * $b;
    }
    

    /**
     * Get the value of a
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * Set the value of a
     */
    public function setA(float $a): self
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get the value of b
     */
    public function getB(): float
    {
                                    return $this->b;
    }

    /**
     * Set the value of b
     */
    public function setB(float $b): self
    {
                                    $this->b = $b;

                                    return $this;
    }
 }
 $addition = new Math(1,2);
 $soustraction = new Math(1,2);
 $multiplication = new Math(1,2);

echo "Addition : {$addition->add()}";
echo "Soustraction : {$soustraction->subtract()}";
echo "Multiplication : {$multiplication->multiply()}";



?>