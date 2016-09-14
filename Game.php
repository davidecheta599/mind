<?php

class Game extends  Abstract_character  {
    
    public $player;
    public $bot;
    
    
    
    public function __construct(){
    echo "Game started<br />";
    
    }
    public function create($type,$name)
    {
     $type = strtolower($type); //the variables of type is defines in index.php
     switch($type)
     {
         
         case 'player';
             $this->player = new player($this,$name);
             break;
         case 'bot';
             $this->bot = new Bot($this,$name);
             break;
         default:
             echo 'tou r tryin to crate wot do not exit <br/>';
         
     }
        
        
    }
}
    
/*//this function wil handle the instantiation on index page(eg)$game->createplayer('ted');
    public function createplayer($name){
    $this->player = new player($this,$name); //instantiating
    }
    
      //this function wil handle the instantiation on index page too
     public function createBot($name)
             {
    $this->bot = new Bot($this,$name); //instantiating
    }  */
    
    


