<?php

class User
{

    private $firstname;

    private $lastname;

    private $stackLearn = [];

    private $password;

    private $sex;

    private $age;

    private $growth;

    private $listFruit;

    public static $salt = 'ara$%4f2423*$^d21&23';

//    public static function getSalt()
//    {
//        return self::$salt;
//    }
    public static function getSalt()
    {
        return self::$salt;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getFullName()
    {
        return $this ->firstname . ' ' . $this->lastname;
    }
    public function isValidFullName()
    {
        return
        strlen($this->firstname) >= 3 &&
        strlen($this->lastname) >=3;
    }

    public function setStackLearn($stackLearn)
    {
        $this->stackLearn = $stackLearn;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setGrowth($growth)
    {
        $this->growth = $growth;
    }

    public function setListFruit($listFruit)
    {
        $this->listFruit = $listFruit;
    }

    public function getStackLearn()
    {
        return $this->stackLearn;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getGrowth()
    {
        return $this->growth;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getSex()
    {
        return $this->sex;
    }
//    public function __construct()
//    {
//        var_dump(1);
//        die();
//    }

}