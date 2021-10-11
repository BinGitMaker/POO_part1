<?php

// Bicycle.php

//c'est la classe qui genere les instances de l'index
//propriete de la class

class Bicycle
{
      private string $color; //propriete
      private int $currentSpeed; //propriete
      private int $nbSeats = 1; //propriete
      private int $nbWheels = 2; //propriete

      public function __construct(
            string $color,
            /* int $nbSeat,
            int $nbWheels */
        )
        {
            $this->color = $color;
            /* $this->nbSeats = $nbSeats;
            $this->nbWheels = $nbWheels; */
        }

      /**
     * Get the value of color
     */
    public function getColor():string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
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
    $this->currentSpeed = $currentSpeed;
      }


    public function forward(): string{
        $this->currentSpeed = 15;
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

      public function dump()
        {
              var_dump($this);
        }
}




