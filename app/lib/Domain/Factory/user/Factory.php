<?php
namespace app\lib\Domain\Factory\user;
use app\lib\Domain\Entity\User\Entity as Entity;

Class Factory{

     public static function create($user_config)
    {  
        $user_entity=new Entity();
        foreach($user_config as $key=>$value)
        {
            $user_entity->$key=$value;
        }
        
        return $user_entity;
    }
    }

?>