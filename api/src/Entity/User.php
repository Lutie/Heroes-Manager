<?php

namespace App\Entity;

use AppBundle\Entity\IdTrait;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="user")
 * @UniqueEntity(fields={"login", "email"})
 */
class User
{

    use IdTrait;

    /**
     * @ORM\Column(type="string", unique=true, length=150, nullable=false)
     */
    private $login;

    /**
     * @ORM\Column(type="string", unique=true, length=150, nullable=false)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=150, nullable=false)
     */
    private $password;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }


}