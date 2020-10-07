<?php 

interface ISuperUser
{
    function getInfo();
}

abstract class ABase 
{
    abstract function showInfo();   
}

class User extends ABase
{
    public $name;
    public $login;
    public $pass;

    function __construct($n, $l, $p)
    {
        $this->name = $n;
        $this->login = $l;
        $this->pass = $p;

    }

    public function showInfo()
    {
        echo  "Name: " . $this->name  . "<br>";
        echo  "User: " . $this->login  . "<br>";
        echo  "Password: " . $this->pass  . "<br>";
    }

}

echo "<br><br>";

$user = new User('Ihor D', 'ihor', '123&F*');
$user->showInfo();

echo "<br><br>";

$user2 = new User('Ihor Pot', 'ihorT', 'ho8u)*0');
$user2->showInfo();


class SuperUser extends User implements ISuperUser
{
    public $r;
    function __construct($n, $l, $p, $r) 
    {
        parent::__construct($n, $l, $p);
        $this->role = $r;
    }

    public function showInfo()
    {
        parent::showInfo();
        echo  "Role: " . $this->role . "<br>";

    }

    public function getInfo()
    {
        return $this;
    }

}

echo "<br><br>";

$user = new SuperUser('Piter Peroff', 'piter', '56ftfyg', 'Admin');
$user->showInfo();
$user->getInfo();



