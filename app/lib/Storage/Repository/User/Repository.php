<?php
  use app\lib\Domain\Factory\user\Factory as UserFactory;
  use app\lib\Domain\RepositoryInterface\User\RepositoryInterface as RepositoryInterface;
  use app\lib\Domain\ValueObjects\User as User;
  
Class Repository implements UserInterface{
 
      public static function create($user_entity) {

                  $user = User::create(array(
                        
                        'username' => $user_entity->username->get_username(),
                        'password' => $user_entity->password->get_password(),
                        'email' => $user_entity->email->get_email(),
            ));
                  return $user;
}
 public static function save($user_entity)
 {
     
      $user->username = $user_entity->username->get_username();
      $user->password = $user_entity->password->get_password();
      $user->email = $user_entity->email->get_email();
 }

      }
?>
