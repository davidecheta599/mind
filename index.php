
        <?php
       
        include 'abstract_character.php';
        
         include 'Game.php';
        include 'player.php';
        include 'bot.php';
        
        
        $game = new Game();
        $game ->create('player','ted');
        $game->player->setHP('200');
        $game->player->setDmg('200');
        $game->player->show();
        
         $game->create('bot','ted');
        $game->bot->setHP('2400');
        $game->bot->setDmg('200');
        $game->bot->show();
        
        
        
        
        
        
        
        
        
        
        
     /*  $game = new Game();  //                 $type          &            ,$name) from the public function create($type,$name)
       $game->create('player','ted');  //(the class-name and    the variables to  crate,)
       $game->create('bot','barny');
      $game->create('edd','boter');//default class not found
        */
        
        
        
        
        
        
        ?>
