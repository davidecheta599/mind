<?php
abstract class Abstract_character
{
    
    
protected $_name; 
protected $_hp;
protected $_dmg;
     // public function setPlayerHP($int)  //$int is the type of data we  r passing
       public function setHP($int)       
              {
            $this->_hp = (int) $int; 
              }
            
                    
                
     public function setDmg($int) {
         $this->_dmg = (int) $int;
     }           
                
    public function show(){
               
               echo $this;                        //this wil echo out all in the player class
               
           }
 public function  __tostring() //this function is used to see our list items
             
             {
         
        return "Name: {$this->_name} | HP: {$this->_hp} | DEG:{$this->_dmg}<br >"; 
         
         
     } 
     }