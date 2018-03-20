<?php

namespace app\models;

class User
{
    private $firstname;

    private $lastname;

    private $password;

    private $sex;

    private $age;

    private $growth;

    private $stackLearn = [];

    private $listFruits;

    public static $salt = '&&%F238gG%@#';

    public static function getSalt() {
        return self::$salt;
    }


    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function isValidFullName()
    {
        return
            strlen($this->firstname) >= 3 &&
            strlen($this->lastname) >= 3;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param integer $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $growth
     */
    public function setGrowth($growth)
    {
        $this->growth = $growth;
    }

    /**
     * @return mixed
     */
    public function getGrowth()
    {
        return $this->growth;
    }

    /**
     * @param mixed $listFruits
     */
    public function setListFruits($listFruits)
    {
        $this->listFruits = $listFruits;
    }

    /**
     * @return mixed
     */
    public function getListFruits()
    {
        return $this->listFruits;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    public function setStackLearn($stackLearn)
    {
        $this->stackLearn = $stackLearn;
    }

    /**
     * @return array
     */
    public function getStackLearn()
    {
        return $this->stackLearn;
    }

    public function validate() {
        if (!$this->getFirstname()) {
            throw new \Exception('Имя не указано');
        } elseif (!$this->getLastname()) {
            throw new \Exception('Фамилия не указана');
        }

        return true;
    }
}