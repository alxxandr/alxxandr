<?php
class user 
{
    public $username;
    public $password;

    public function __construct($username, $password) 
    {
        $this->username = $username;
        $this->password = $password;
    }
    public function __toString() 
    {
        return $this->username;
    }
    public function changePassword($newPassword) 
    {
        $this->password = $newPassword;
    }
}

class admin extends user 
{
    public function __construct($username, $password) 
    {
        $this->username = $username;
        $this->password = $password;
    }

}

$users = array( new user('alex', '1234'),
                new user('ion', '12345'),
                new admin('admin', 'admin')
            );