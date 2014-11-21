<?php
use app\lib\Services\Notification as Notification;

class UserController extends BaseController{
    
    public function show_login_page()
    {
     return View::make('login');  
    }
    
    public function process_login_page()
    {
     $config=array(
     $email = Input::get('email'), 
     $password = Input::get('password')
     );
     
    }
    
}
?>

