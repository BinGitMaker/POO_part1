<?php

// Car.php

class Car
{
    /* ---------- PROPRIETES (public, private, protected------------ */
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 5;
    private int $nbWheels = 4;
    private string $energy;
    private int $energyLevel;

    /* ---------- METHODE MAGIQUE ------------ */
    public function __construct(
        string $color,
        int $nbSeats,
        string $energy
        )
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
       
    }
    /* ---------- METHODES ------------ */
    
    public function forward(): string
    {
        $this->currentSpeed = 30;
        return "Vrrrroum! Vrouuuum!";
    }

    public function brake(): string 
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Ralenti!!! <br>";

        }
    $sentence .= "Je suis arretée !";
    return $sentence;
    }

    /* ---------- GETTER SETTER ------------ */
            /* 
            >>>>>>>>>>>GET-SET NbofWheels<<<<<<<<<<
            */
    public function getNbWheels(): int/* renvoi la chaine de caracteres correspondant a la couleur >> visibilite public */
    {
       return $this->nbWheels;
    }
    
    public function setNbWheels(int $nbWheels): self   
    {
        $this->nbWheels = $nbWheels;
    } 

            /* 
            >>>>>>>>>>>GET-SET CurrentSpeed<<<<<<<<<<
            */
    public function getCurrentSpeed(): int /* renvoi la chaine de caracteres correspondant a la couleur >> visibilite public */
    {
        return $this->currentSpeed;
    }
            
        public function setCurrentSpeed(int $currentSpeed): void   
    {
        $this->currentSpeed = $currentSpeed;
    } 
    
    
            /* 
            >>>>>>>>>>>GET-SET COLOR<<<<<<<<<<
            */
    public function getColor(): string /* renvoi la chaine de caracteres correspondant a la couleur >> visibilite public */
    {
       return $this->color;
    }
    
    public function setColor(string $color): void   
    {
        $this->color = $color;
    } 

        /* 
            >>>>>>>>>>>GET-SET NbSeats<<<<<<<<<<
            */
    public function getNbSeats(): int 
    {
       return $this->nbSeats;
    }
    
    public function setNbOfSeats(int $nbSeats): void   
    {
        $this->nbSeats = $nbSeats;
    }


            /* 
            >>>>>>>>>>>GET-SET Energy<<<<<<<<<<
            */
    public function getEnergy(): string
    {
       return $this->energy;
    }
    
    public function setEnergy(string $energy): void   
    {
        $this->energy = $energy;
    }

    /* 
            >>>>>>>>>>>GET-SET Energy<<<<<<<<<<
            */
    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }
            
    public function setEnergyLevel(int $energyLevel): void   
    {
        $this->energyLevel = $energyLevel;
    }
}