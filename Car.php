<?php

/* Car class definition */
class Car
{ 
    private int $nbWheels = 4;
    private int $currectSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

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
    

    /**
     * Get the value of color
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Get the value of nb of seats
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of energy
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

   
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function start(): string{
        return "let's Go !" . PHP_EOL; 
        }

    public function forward(): string{
        $this->currentSpeed = 3;
        return "Go !" . PHP_EOL; 
        }
    
    public function brake(): string{
        $sentence = "";
            
        while ($this->currentSpeed > 0){
                $this->currentSpeed--;
                $sentence .= "Brake !!!" . PHP_EOL;
                }
        $sentence .= "I'm stopped !";
        return $sentence; 
        }

    
}