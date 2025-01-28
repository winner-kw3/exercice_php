<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */


class ShoppingCart {
    private $items = array();
    private $total ;

     public function __construct(array $items, float $total)
    {
        $this->items = $items;
        $this->total = $total;
        
        
    }

    public function ajouterPanier {
        $this->items[] = array('name' => $name, 'price' => $
        }
        
    public function afficherItems {
        return $this->items;
    }
    public function calculerTotal {
        return $this->total;
    }

?>