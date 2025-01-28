<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/
class BankAccount {
    private $balance;
    public function __construct($balance = 0) {
        $this->balance = $balance;
        }
    public function deposit($amount) {
            $this->balance += $amount;
            echo "Vous avez déposé $amount. Votre nouveau solde est de $this->balance.";
            }
    public function withdraw($amount) {
                if ($amount > $this->balance) {
                    echo "Vous n'avez pas suffisamment d'argent dans votre compte.\n";
                    }
                    else {
                        $this->balance -= $amount;
                        echo "Vous avez retiré $amount. Votre nouveau solde est de $this->balance";
                        }
                        }
    }
    $account = new BankAccount(100);
    $account->deposit(50);
    $account->withdraw(75);
    $account->withdraw(150);
                        ?>
