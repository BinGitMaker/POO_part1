<?php

  // Bicycle.php

  class Bicycle
  {

    /* ---------- PROPRIETES (public, private, protected------------ */
    private string $color; /* >> visibilite privee */
    private int $currentSpeed = 15;
    private int $nbSeats = 1;
    private int $nbWheels = 2;
    private $hasLuggageRack = 0;


    /* ---------- METHODE MAGIQUE ------------ */
    /* permet de mettre en place un comportement par defaut */
    /* Un constructeur ne doit jamais rien retourner. Son but est seulement d'initialiser tout ou partie des propriétés de ton objet. */
    /* BONNE PRATIQUE:  ton constructeur en toute première méthode de ton fichier (juste sous les propriétés) */

    public function __construct(string $color) 
    {
    $this->color = $color; 
    /* $this->color: correspond à la propriété de la classe définie avec private $color */
    /* (string $color): parametre qui correspond à l'attribu $color de $this->color */
    }

    /* ---------- METHODES ------------ */

    public function forward(): string
    {
    $this->currentSpeed = 5;  /* vitesse du velo 15 */

    return "Go !"; /* pas de echo dans une methode */
    }

    public function brake(): string 
    {
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;   /* si vitesse du velo 10 et currentSpeed 5 affichera 5 Brake avant d'ecrire stopped */
       $sentence .= "Brake !!!"; /* si vitesse du velo 15 et currentSpeed 10 affichera 5 Brake avant d'ecrire stopped */
    }
   $sentence .= "I'm stopped !";
   return $sentence;
    }

    /* ---------- GETTER SETTER ------------ */

    public function getColor(): string /* renvoi la chaine de caracteres correspondant a la couleur >> visibilite public */
    {
        return $this->color;
    }
    
    public function setColor(string $color): void   
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }




  }