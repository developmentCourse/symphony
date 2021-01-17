<?php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document(repositoryClass="AppBundle\Repository\UserRepository")
  */
class User implements AdvancedUserInterface {
    /**
     * @MongoDB\Id
     */
    protected $id;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $username;
    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;
    /**
     * @MongoDB\Collection()
     */
    protected $roles = array();
    /**
     * @MongoDB\Field(type="string")
     */
    protected $salt;
    /**
     * @MongoDB\Field(type="boolean")
     */
    protected $isActive;
    /**
     * @MongoDB\Field(type="boolean")
     */
    protected $isLoggedIn;


    public function __construct()
    {
        $this->isActive = true;
        $this->salt = '';
    }
    public function isEqualTo(UserInterface $user)
    {
        return $user->getUsername() === $this->username;
    }

    public function eraseCredentials()
    {
    }
    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setRole($role)
    {
        $this->roles[] = $role;
        $this->role = $role;
    }
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }


    public function setSalt($salt)
    {
        $this->salt = $salt;
    }
    public function getUsername()
    {
        return $this->username;
    }


    public function getPassword()
    {
        return $this->password;
    }


    public function getRoles()
    {
        //return $this->groups->toArray();
        /*$tmpRoles = $this->roles;

        if(in_array('USER_ROLE', $tmpRoles) === false){
            $tmpRoles[] = 'ROLE_USER';
        }
        return $tmpRoles;*/
        return $this->roles;
    }


    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isLoggedIn
     *
     * @param boolean $isLoggedIn
     * @return $this
     */
    public function setIsLoggedIn($isLoggedIn)
    {
        $this->isLoggedIn = $isLoggedIn;
        return $this;
    }

    /**
     * Get isLoggedIn
     *
     * @return boolean $isLoggedIn
     */
    public function getIsLoggedIn()
    {
        return $this->isLoggedIn;
    }
}
