<?php
namespace app\lib\Services;
Class Notification {
    public $errors = array(
        '1000' =>'email not valid',
        '1001' => 'id not valid',
        '1002' => 'password is required and more than 6 characters',
        '1003' => 'password Invalid',
        '1004' => 'User not valid',
        '1005' => 'Invalid username'
    );
    
    public function __construct() {
        return $this;
    }
    
}
?>
