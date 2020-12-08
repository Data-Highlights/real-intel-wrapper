<?php

namespace Wrapper\Objects;

class EmailAddress
{
    private string $emailAddress;
    private \DateTime $lastUpdated;

    /**
     * Get the value of emailAddress
     */ 
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * Set the value of emailAddress
     *
     * @return  self
     */ 
    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get the value of lastUpdated
     */ 
    public function getLastUpdated(): \DateTime
    {
        return $this->lastUpdated;
    }

    /**
     * Set the value of lastUpdated
     *
     * @return  self
     */ 
    public function setLastUpdated(\DateTime $lastUpdated): self
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }
}