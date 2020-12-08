<?php

namespace Wrapper\Objects;

use DateTime;

class Address 
{
    private string $addressLine1;
    private string $addressLine2;
    private string $addressLine3;
    private string $addressLine4;
    private string $postalCode;
    private string $addressType;
    private \DateTime $lastUpdated;
    private \DateTime $createdDate;

    /**
     * Get the value of addressLine1
     */ 
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }

    /**
     * Set the value of addressLine1
     *
     * @return  self
     */ 
    public function setAddressLine1(string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get the value of addressLine2
     */ 
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }

    /**
     * Set the value of addressLine2
     *
     * @return  self
     */ 
    public function setAddressLine2(string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get the value of addressLine3
     */ 
    public function getAddressLine3(): string
    {
        return $this->addressLine3;
    }

    /**
     * Set the value of addressLine3
     *
     * @return  self
     */ 
    public function setAddressLine3(string $addressLine3): self
    {
        $this->addressLine3 = $addressLine3;

        return $this;
    }

    /**
     * Get the value of addressLine4
     */ 
    public function getAddressLine4(): string
    {
        return $this->addressLine4;
    }

    /**
     * Set the value of addressLine4
     *
     * @return  self
     */ 
    public function setAddressLine4(string $addressLine4): self
    {
        $this->addressLine4 = $addressLine4;

        return $this;
    }

    /**
     * Get the value of postalCode
     */ 
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     *
     * @return  self
     */ 
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of addressType
     */ 
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * Set the value of addressType
     *
     * @return  self
     */ 
    public function setAddressType(string $addressType): self
    {
        $this->addressType = $addressType;

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

    /**
     * Get the value of createdDate
     */ 
    public function getCreatedDate(): \DateTime
    {
        return $this->createdDate;
    }

    /**
     * Set the value of createdDate
     *
     * @return  self
     */ 
    public function setCreatedDate(\DateTime $createdDate): self
    {
        $this->createdDate = $createdDate;

        return $this;
    }
}