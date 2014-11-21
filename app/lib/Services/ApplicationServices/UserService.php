<?php
namespace app\lib\Services\ApplicationServices;
use app\lib\Domain\ValueObjects\User as User;
Class UserService{
    
    public function process_login($config)
    {
    $user_config['password'] = new User\Password(User\Password::encrypt($config['password']));
    $user_config['email'] = new User\Email($config['email']);
     $user_entity = Factory::create($user_config);
    }
   
    
}
?>
