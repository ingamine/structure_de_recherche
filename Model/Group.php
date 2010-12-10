<?php

namespace Bundle\DoctrineUserBundle\Model;

abstract class Group implements MutableRoleHolderInterface
{
    protected $id;
    protected $name;
    protected $roles;
    
    public function __construct($name, array $roles = array())
    {
        $this->name = $name;
        $this->roles = $roles;
    }
    
    public function addRole($role)
    {
        if (!$this->hasRole($role)) {
            $this->roles[] = strtoupper($role);
        }
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function hasRole($role)
    {
        return in_array(strtoupper($role), $this->roles, true);
    }
    
    public function getRoles()
    {
        return $this->roles;
    }
    
    public function removeRole($role)
    {
        if (false !== $key = array_search(strtoupper($role), $this->roles, true)) {
            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }
}