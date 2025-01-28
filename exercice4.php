<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

 class Article {

    public function __construct(public string $titre, 
                                public string $content,
                                public int $maxLength
                               ){}

 public function getSummary($maxLength){
    if (strlen($this->content) > $maxLength) {
        return substr($this->content, 0, $maxLength) . '…';
 }
 

}

    /**
     * Get the value of titre
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     */
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

/**
 * Get the value of content
 */
public function getContent(): string
{
                                return $this->content;
}

/**
 * Set the value of content
 */
public function setContent(string $content): self
{
                                $this->content = $content;

                                return $this;
}

/**
 * Get the value of maxLength
 */
public function getMaxLength(): int
{
                                return $this->maxLength;
}

/**
 * Set the value of maxLength
 */
public function setMaxLength(int $maxLength): self
{
                                $this->maxLength = $maxLength;

                                return $this;
}
}
$article = new Article("Dessin","Bonjour tout le monde", 7);

echo "Article : {$article->getSummary(7)}";


?>