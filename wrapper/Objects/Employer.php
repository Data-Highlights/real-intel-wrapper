<?php

namespace Wrapper\Objects;

class Employer
{
    private string $branchCode; 
    private string $employerName;
    private string $occupation;
    private \DateTime $lastUpdated;
    private \DateTime $createdDate;

    /**
     * Get the value of branchCode
     */ 
    public function getBranchCode(): string
    {
        return $this->branchCode;
    }

    /**
     * Set the value of branchCode
     *
     * @return  self
     */ 
    public function setBranchCode(string $branchCode): self
    {
        $this->branchCode = $branchCode;

        return $this;
    }

    /**
     * Get the value of employerName
     */ 
    public function getEmployerName(): string
    {
        return $this->employerName;
    }

    /**
     * Set the value of employerName
     *
     * @return  self
     */ 
    public function setEmployerName(string $employerName): self
    {
        $this->employerName = $employerName;

        return $this;
    }

    /**
     * Get the value of occupation
     */ 
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * Set the value of occupation
     *
     * @return  self
     */ 
    public function setOccupation(string $occupation): self
    {
        $this->occupation = $occupation;

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