<?php

declare(strict_types=1);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

protected class Beverage {
    private function  __construct($color, $price, $temperature="cold"){
        $this->color=$color;
        $this->price=$price;
        $this->temperature=$temperature;
    } 

public function getInfo(){
    return "This beverage is {$this->temperature} and {$this->color}";
 }
}


   // $cola = new Beverage("brown",2,"cold"); 
   // echo $cola->getInfo();

   class Beer extends Beverage
   {
       var $name;
       var $alcoholpercentage;
       public function __construct($color, $price, $name,$alcoholpercentage, $temperature="cold"){
       
       parent::__construct($color, $price, $temperature); 
       $this->name=$name;
       $this->alcoholpercentage=$alcoholpercentage;  
       
       
   }
   private function getAlcoholpercentage(){
       return "<br>The alcohol percentage of this beverage is {$this->alcoholpercentage} %"; 
   }
   }
   $duvel = new Beer('blond',3.5,"duvel",8.5,);
   echo $duvel->getAlcoholpercentage()."<br>";
   echo $duvel->getInfo()."<br>";
   echo $duvel->color;
   print_r($duvel->getAlcoholpercentage());
   //print_r($cola->getAlcoholpercentage());