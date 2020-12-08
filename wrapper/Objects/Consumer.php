<?php

namespace Wrapper\Objects;

class Consumer
{
    private string $idNumber;
    private string $passportNumber;
    private string $initials;
    private string $firstName;
    private string $secondName;
    private string $thirdName;
    private string $lastName;
    private string $gender;
    private \DateTime $birthDate;
    private string $titleDesc;
    private string $maritalStatus;
    private string $privacyStatus;
    private string $residentialAddress;
    private string $postalAddress;
    private string $homeTelephone;
    private string $workTelephone;
    private string $cellNo;
    private string $emailAddress;
    private string $employer;
    private string $yourReference;
    private int $transactionId;
    private iterable $contactsLinkedToCell;
    private string $deceasedStatus;
    private string $homeAffairsVerified;
    private float $creditScore;
    private iterable $addresses;                // Address[]
    private iterable $telephoneNumbers;         // TelephoneNumber[]
    private iterable $employers;                // Employer[]
    private iterable $emailAddresses;           // EmailAddress[]
    private iterable $shortTermInsurances;      // ShortTermInsurance[]
    private iterable $vehicleFinanceAccounts;   // VehicleFinanceAccount[]
    private DOVResult $dovResult;

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
     * Get the value of initials
     */ 
    public function getInitials(): string
    {
        return $this->initials;
    }

    /**
     * Set the value of initials
     *
     * @return  self
     */ 
    public function setInitials(string $initials): self
    {
        $this->initials = $initials;

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
     * Get the value of secondName
     */ 
    public function getSecondName(): string
    {
        return $this->secondName;
    }

    /**
     * Set the value of secondName
     *
     * @return  self
     */ 
    public function setSecondName(string $secondName): self
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get the value of thirdName
     */ 
    public function getThirdName(): string 
    {
        return $this->thirdName;
    }

    /**
     * Set the value of thirdName
     *
     * @return  self
     */ 
    public function setThirdName(string $thirdName): self
    {
        $this->thirdName = $thirdName;

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
     * Get the value of titleDesc
     */ 
    public function getTitleDesc(): string
    {
        return $this->titleDesc;
    }

    /**
     * Set the value of titleDesc
     *
     * @return  self
     */ 
    public function setTitleDesc(string $titleDesc): self
    {
        $this->titleDesc = $titleDesc;

        return $this;
    }

    /**
     * Get the value of maritalStatus
     */ 
    public function getMaritalStatus(): string
    {
        return $this->maritalStatus;
    }

    /**
     * Set the value of maritalStatus
     *
     * @return  self
     */ 
    public function setMaritalStatus(string $maritalStatus): self
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get the value of privacyStatus
     */ 
    public function getPrivacyStatus(): string
    {
        return $this->privacyStatus;
    }

    /**
     * Set the value of privacyStatus
     *
     * @return  self
     */ 
    public function setPrivacyStatus(string $privacyStatus): self
    {
        $this->privacyStatus = $privacyStatus;

        return $this;
    }

    /**
     * Get the value of residentialAddress
     */ 
    public function getResidentialAddress(): string
    {
        return $this->residentialAddress;
    }

    /**
     * Set the value of residentialAddress
     *
     * @return  self
     */ 
    public function setResidentialAddress(string $residentialAddress): self
    {
        $this->residentialAddress = $residentialAddress;

        return $this;
    }

    /**
     * Get the value of postalAddress
     */ 
    public function getPostalAddress(): string
    {
        return $this->postalAddress;
    }

    /**
     * Set the value of postalAddress
     *
     * @return  self
     */ 
    public function setPostalAddress(string $postalAddress): self
    {
        $this->postalAddress = $postalAddress;

        return $this;
    }

    /**
     * Get the value of homeTelephone
     */ 
    public function getHomeTelephone(): string
    {
        return $this->homeTelephone;
    }

    /**
     * Set the value of homeTelephone
     *
     * @return  self
     */ 
    public function setHomeTelephone(string $homeTelephone): self
    {
        $this->homeTelephone = $homeTelephone;

        return $this;
    }

    /**
     * Get the value of workTelephone
     */ 
    public function getWorkTelephone(): string
    {
        return $this->workTelephone;
    }

    /**
     * Set the value of workTelephone
     *
     * @return  self
     */ 
    public function setWorkTelephone(string $workTelephone): self
    {
        $this->workTelephone = $workTelephone;

        return $this;
    }

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
     * Get the value of cellNo
     */ 
    public function getCellNo(): string
    {
        return $this->cellNo;
    }

    /**
     * Set the value of cellNo
     *
     * @return  self
     */ 
    public function setCellNo(string $cellNo): self
    {
        $this->cellNo = $cellNo;

        return $this;
    }

    /**
     * Get the value of employer
     */ 
    public function getEmployer(): string
    {
        return $this->employer;
    }

    /**
     * Set the value of employer
     *
     * @return  self
     */ 
    public function setEmployer(string $employer): self
    {
        $this->employer = $employer;

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
     * Get the value of contactsLinkedToCell
     */ 
    public function getContactsLinkedToCell(): iterable
    {
        return $this->contactsLinkedToCell;
    }

    /**
     * Set the value of contactsLinkedToCell
     *
     * @return  self
     */ 
    public function setContactsLinkedToCell(iterable $contactsLinkedToCell): self
    {
        $this->contactsLinkedToCell = $contactsLinkedToCell;

        return $this;
    }

    /**
     * Get the value of deceasedStatus
     */ 
    public function getDeceasedStatus(): string
    {
        return $this->deceasedStatus;
    }

    /**
     * Set the value of deceasedStatus
     *
     * @return  self
     */ 
    public function setDeceasedStatus(string $deceasedStatus): self
    {
        $this->deceasedStatus = $deceasedStatus;

        return $this;
    }

    /**
     * Get the value of addresses
     */ 
    public function getAddresses(): iterable
    {
        return $this->addresses;
    }

    /**
     * Set the value of addresses
     *
     * @return  self
     */ 
    public function setAddresses(iterable $addresses): self
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * Get the value of telephoneNumbers
     */ 
    public function getTelephoneNumbers(): iterable
    {
        return $this->telephoneNumbers;
    }

    /**
     * Set the value of telephoneNumbers
     *
     * @return  self
     */ 
    public function setTelephoneNumbers(iterable $telephoneNumbers): self
    {
        $this->telephoneNumbers = $telephoneNumbers;

        return $this;
    }

    /**
     * Get the value of employers
     */ 
    public function getEmployers(): iterable 
    {
        return $this->employers;
    }

    /**
     * Set the value of employers
     *
     * @return  self
     */ 
    public function setEmployers(iterable $employers): self
    {
        $this->employers = $employers;

        return $this;
    }

    /**
     * Get the value of emailAddresses
     */ 
    public function getEmailAddresses(): iterable
    {
        return $this->emailAddresses;
    }

    /**
     * Set the value of emailAddresses
     *
     * @return  self
     */ 
    public function setEmailAddresses(iterable $emailAddresses): self
    {
        $this->emailAddresses = $emailAddresses;

        return $this;
    }

    /**
     * Get the value of homeAffairsVerified
     */ 
    public function getHomeAffairsVerified(): string
    {
        return $this->homeAffairsVerified;
    }

    /**
     * Set the value of homeAffairsVerified
     *
     * @return  self
     */ 
    public function setHomeAffairsVerified(string $homeAffairsVerified): self
    {
        $this->homeAffairsVerified = $homeAffairsVerified;

        return $this;
    }

    /**
     * Get the value of creditScore
     */ 
    public function getCreditScore(): float
    {
        return $this->creditScore;
    }

    /**
     * Set the value of creditScore
     *
     * @return  self
     */ 
    public function setCreditScore(float $creditScore): self
    {
        $this->creditScore = $creditScore;

        return $this;
    }

    /**
     * Get the value of shortTermInsurances
     */ 
    public function getShortTermInsurances(): iterable
    {
        return $this->shortTermInsurances;
    }

    /**
     * Set the value of shortTermInsurances
     *
     * @return  self
     */ 
    public function setShortTermInsurances(iterable $shortTermInsurances): self
    {
        $this->shortTermInsurances = $shortTermInsurances;

        return $this;
    }

    /**
     * Get the value of vehicleFinanceAccounts
     */ 
    public function getVehicleFinanceAccounts(): iterable
    {
        return $this->vehicleFinanceAccounts;
    }

    /**
     * Set the value of vehicleFinanceAccounts
     *
     * @return  self
     */ 
    public function setVehicleFinanceAccounts(iterable $vehicleFinanceAccounts): self
    {
        $this->vehicleFinanceAccounts = $vehicleFinanceAccounts;

        return $this;
    }

    /**
     * Get the value of dovResult
     */ 
    public function getDovResult(): DOVResult
    {
        return $this->dovResult;
    }

    /**
     * Set the value of dovResult
     *
     * @return  self
     */ 
    public function setDovResult(DOVResult $dovResult): self
    {
        $this->dovResult = $dovResult;

        return $this;
    }
}