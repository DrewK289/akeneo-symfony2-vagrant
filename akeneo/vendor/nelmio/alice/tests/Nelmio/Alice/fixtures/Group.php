<?php

namespace Nelmio\Alice\fixtures;

class Group
{
    private $name;
    private $owner;
    private $members = array();
    private $creationDate;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(User $owner)
    {
        $this->owner = $owner;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function addMember(User $member)
    {
        $this->members[] = $member;
    }

    public function setCreationDate(\DateTime $date)
    {
        $this->creationDate = $date;
    }

    public function getCreationDate()
    {
        return $this->creationDate;
    }
}
