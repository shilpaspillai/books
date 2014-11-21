
<?php
 namespace app\lib\Domain\ValueObjects;
 use  app\lib\Exceptions\UserNameNotValidException as UserNameNotValidException;
  Class Username{
      protected $username = '';
      public function __construct($username) {
          $this->check_validity($username);
          $this->username = $username;
      }
     public function check_validity($username=null)
     {
      if(($username == null) || ($username == ''))   
          {Throw new UserNameNotValidException();}
     }
     
     public function get_username()
     {
         return $this->username;
     }
  }
  ?>

