<?php

namespace Wrapper\Objects;

class Contact
{
    private string $idNumber;
    private string $passportNumber;
    private string $firstName;
    private string $lastName;
    private \DateTime $birthDate;
    private string $gender;
    private string $yourReference;
    private int $transactionId;

    /**
     * Get the value of idNumber
     */ 
    public function getIdNumber(): string
    {
        return $this->idNumber;
    }

    /**
     * Set the value of idNumber
     *
     * @return  self
     */ 
    public function setIdNumber(string $idNumber): self
    {
        $this->idNumber = $idNumber;

        return $this;
    }

    /**
     * Get the value of passportNumber
     */ 
    public function getPassportNumber(): string
    {
        return $this->passportNumber;
    }

    /**
     * Set the value of passportNumber
     *
     * @return  self
     */ 
    public function setPassportNumber(string $passportNumber): self
    {
        $this->passportNumber = $passportNumber;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate(): \DateTime
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate(\DateTime $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of yourReference
     */ 
    public function getYourReference(): string
    {
        return $this->yourReference;
    }

    /**
     * Set the value of yourReference
     *
     * @return  self
     */ 
    public function setYourReference(string $yourReference): self
    {
        $this->yourReference = $yourReference;

        return $this;
    }

    /**
     * Get the value of transactionId
     */ 
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * Set the value of transactionId
     *
     * @return  self
     */ 
    public function setTransactionId(int $transactionId): self
    {
        $this->transactionId = $transactionId;

        return $this;
    }
}