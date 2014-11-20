<?php
 namespace app\lib\Domain\ValueObjects;
 use  app\lib\Exceptions\PasswordNotValidException as PasswordNotValidException;


class Password {
   
    public function __construct($password){
        $this->check_validity($password);
        $this->password=$password;
    }
    
    public static function encrypt($password){
        return md5($password);
    }
    
    public function check_validity($password=null)
    {
        if(($password == null) || (strlen($password < 6)))
        {throw new PasswordNotValidException();}
    }
    public function get_password()
    {
        return $this->password;
    }
    
} 
?>