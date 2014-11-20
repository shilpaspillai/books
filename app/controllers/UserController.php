<?php
class UserController extends BaseController{
    
    public function show_login_page()
    {
     return View::make('login');  
    }
    
    public function process_login_page()
    {
        
    }
    
}
?>

