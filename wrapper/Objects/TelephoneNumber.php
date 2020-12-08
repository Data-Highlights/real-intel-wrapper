<?php

namespace Wrapper\Objects;

class TelephoneNumber
{
    private string $number;
    private string $type;
    private \DateTime $LastUpdated;
    private \DateTime $CreatedDate;

    /**
     * Get the value of number
     */ 
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of LastUpdated
     */ 
    public function getLastUpdated(): \DateTime
    {
        return $this->LastUpdated;
    }

    /**
     * Set the value of LastUpdated
     *
     * @return  self
     */ 
    public function setLastUpdated(\DateTime $LastUpdated): self
    {
        $this->LastUpdated = $LastUpdated;

        return $this;
    }

    /**
     * Get the value of CreatedDate
     */ 
    public function getCreatedDate(): \DateTime
    {
        return $this->CreatedDate;
    }

    /**
     * Set the value of CreatedDate
     *
     * @return  self
     */ 
    public function setCreatedDate(\DateTime $CreatedDate): self
    {
        $this->CreatedDate = $CreatedDate;

        return $this;
    }
}