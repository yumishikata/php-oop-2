<?php 

class User 
 {
    public $name;
    public $surname;
    private $username;
    private $password;
    public $email;
    public $role;

    public function __construct($_name, $_surname)
    {
        $this->name = $_name;
        $this->surname = $_surname;

    }

    public function setUsername($_username)
    {
        $this->username = $_username;
    }

    public function setPassword($_password)
    {
        $this->password = $_password;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }



}