<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */

class Person {
   
    public function __construct(
        public string $first_name, 
        public string $last_name, 
        private int $age,
    ) {}
 
    public function afficheInfos() {
        return $this->first_name . ' ' . $this->last_name. ' ' .$this->age;
    }

        /**
         * Get the value of first_name
         */
        public function getFirstName(): string
        {
                return $this->first_name;
        }

        /**
         * Set the value of first_name
         */
        public function setFirstName(string $first_name): self
        {
                $this->first_name = $first_name;

                return $this;
        }

        /**
         * Get the value of last_name
         */
        public function getLastName(): string
        {
                return $this->last_name;
        }

        /**
         * Set the value of last_name
         */
        public function setLastName(string $last_name): self
        {
                $this->last_name = $last_name;

                return $this;
        }
}

$utilisateur = new Person("Winner","KODJO", 19);

echo "Utilisateur : {$utilisateur->afficheInfos()}";

?>