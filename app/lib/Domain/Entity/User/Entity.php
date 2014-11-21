<?php
namespace app\lib\Domain\Entity\User;
use app\lib\Exceptions as Exceptions;
use app\lib\Domain\ValueObjects\Username as Username;
Class Entity{
 public function __construct(){
        
    }
  public function __set($name, $value){
      switch($name)
      {
         case 'username':
                if (!($value instanceof Username))
                    throw new Exceptions\UserEntityNotValidException();
                break; 
               case 'id':
                if (!($value instanceof Id))
                    throw new Exceptions\IdNotValidException();
                break;
                  case 'Email':
                if (!($value instanceof Email))
                    throw new Exceptions\EmailNotValidException();
                break; 
                if (!($value instanceof Password))
                   throw new Exceptions\PasswordEntityNotValidException();
                break;
      }
      $this->name = $value;
    }
    public function __get($name) {
        return isset($this->$name) ? $this->$name : FALSE;
    }

    
}
?>
