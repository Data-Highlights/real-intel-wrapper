<?php

namespace Wrapper\Objects;

class DocumentSummary
{
    private string $result;
    private ?string $resultReason;
    private string $documentType;
    private ?string $identityNumber;
    private string $firstName;
    private string $lastName;
    private string $englishFirstName;
    private string $englishLastName;
    private string $gender;
    private int $age;
    private string $dateOfBirth;
    private ?string $dateOfExpiry;
    private ?string $dateOfIssue;
    private string $issuingState;
    private string $issuingStateCode;
    private ?string $documentNumber;
    private ?string $authority;
    private ?int $termRemaining;

    /**
     * Get the value of result
     */ 
    public function getResult(): string
    {
        return $this->result;
    }

    /**
     * Set the value of result
     *
     * @return  self
     */ 
    public function setResult(string $result): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get the value of resultReason
     */ 
    public function getResultReason(): ?string
    {
        return $this->resultReason;
    }

    /**
     * Set the value of resultReason
     *
     * @return  self
     */ 
    public function setResultReason(?string $resultReason): self
    {
        $this->resultReason = $resultReason;

        return $this;
    }

    /**
     * Get the value of documentType
     */ 
    public function getDocumentType(): string
    {
        return $this->documentType;
    }

    /**
     * Set the value of documentType
     *
     * @return  self
     */ 
    public function setDocumentType(string $documentType): self
    {
        $this->documentType = $documentType;

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
     * Get the value of englishFirstName
     */ 
    public function getEnglishFirstName(): string
    {
        return $this->englishFirstName;
    }

    /**
     * Set the value of englishFirstName
     *
     * @return  self
     */ 
    public function setEnglishFirstName(string $englishFirstName): self
    {
        $this->englishFirstName = $englishFirstName;

        return $this;
    }

    /**
     * Get the value of englishLastName
     */ 
    public function getEnglishLastName(): string
    {
        return $this->englishLastName;
    }

    /**
     * Set the value of englishLastName
     *
     * @return  self
     */ 
    public function setEnglishLastName(string $englishLastName): self
    {
        $this->englishLastName = $englishLastName;

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
     * Get the value of age
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of dateOfBirth
     */ 
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    /**
     * Set the value of dateOfBirth
     *
     * @return  self
     */ 
    public function setDateOfBirth(string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get the value of dateOfExpiry
     */ 
    public function getDateOfExpiry(): ?string
    {
        return $this->dateOfExpiry;
    }

    /**
     * Set the value of dateOfExpiry
     *
     * @return  self
     */ 
    public function setDateOfExpiry(?string $dateOfExpiry): self
    {
        $this->dateOfExpiry = $dateOfExpiry;

        return $this;
    }

    /**
     * Get the value of dateOfIssue
     */ 
    public function getDateOfIssue(): ?string
    {
        return $this->dateOfIssue;
    }

    /**
     * Set the value of dateOfIssue
     *
     * @return  self
     */ 
    public function setDateOfIssue(?string $dateOfIssue): self
    {
        $this->dateOfIssue = $dateOfIssue;

        return $this;
    }

    /**
     * Get the value of issuingState
     */ 
    public function getIssuingState(): string
    {
        return $this->issuingState;
    }

    /**
     * Set the value of issuingState
     *
     * @return  self
     */ 
    public function setIssuingState(string $issuingState): self
    {
        $this->issuingState = $issuingState;

        return $this;
    }

    /**
     * Get the value of issuingStateCode
     */ 
    public function getIssuingStateCode(): string
    {
        return $this->issuingStateCode;
    }

    /**
     * Set the value of issuingStateCode
     *
     * @return  self
     */ 
    public function setIssuingStateCode(string $issuingStateCode): self
    {
        $this->issuingStateCode = $issuingStateCode;

        return $this;
    }

    /**
     * Get the value of documentNumber
     */ 
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    /**
     * Set the value of documentNumber
     *
     * @return  self
     */ 
    public function setDocumentNumber(?string $documentNumber): self
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    /**
     * Get the value of authority
     */ 
    public function getAuthority(): ?string
    {
        return $this->authority;
    }

    /**
     * Set the value of authority
     *
     * @return  self
     */ 
    public function setAuthority(?string $authority): self
    {
        $this->authority = $authority;

        return $this;
    }

    /**
     * Get the value of termRemaining
     */ 
    public function getTermRemaining(): ?int
    {
        return $this->termRemaining;
    }

    /**
     * Set the value of termRemaining
     *
     * @return  self
     */ 
    public function setTermRemaining(?int $termRemaining): self
    {
        $this->termRemaining = $termRemaining;

        return $this;
    }

    /**
     * Get the value of identityNumber
     */ 
    public function getIdentityNumber(): ?string
    {
        return $this->identityNumber;
    }

    /**
     * Set the value of identityNumber
     *
     * @return  self
     */ 
    public function setIdentityNumber(?string $identityNumber): self
    {
        $this->identityNumber = $identityNumber;

        return $this;
    }
}