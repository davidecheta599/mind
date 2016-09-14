<?php

class player extends  Abstract_character
{
    
    
   public function  __construct(Game $g,$name)//__construct(the class name ,and the variable u r passing to
           
   {
       $this->_name = $name;
      echo "player {$this->_name} was created <br >"; 
   }
  
     }    
   
