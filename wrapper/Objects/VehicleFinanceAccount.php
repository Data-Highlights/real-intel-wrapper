<?php

namespace Wrapper\Objects;

class VehicleFinanceAccount
{
    private string $providerName;
    private \DateTime $dateStarted;
    private \DateTime $lastPaymentDate;
    private string $status;
    private float $monthlyInstalment;
    private float $openingBalance;
    private float $currentBalance;
    private float $arrears;

    /**
     * Get the value of providerName
     */ 
    public function getProviderName(): string
    {
        return $this->providerName;
    }

    /**
     * Set the value of providerName
     *
     * @return  self
     */ 
    public function setProviderName(string $providerName): self
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Get the value of dateStarted
     */ 
    public function getDateStarted(): \DateTime
    {
        return $this->dateStarted;
    }

    /**
     * Set the value of dateStarted
     *
     * @return  self
     */ 
    public function setDateStarted(\DateTime $dateStarted): self
    {
        $this->dateStarted = $dateStarted;

        return $this;
    }

    /**
     * Get the value of lastPaymentDate
     */ 
    public function getLastPaymentDate(): \DateTime
    {
        return $this->lastPaymentDate;
    }

    /**
     * Set the value of lastPaymentDate
     *
     * @return  self
     */ 
    public function setLastPaymentDate(\DateTime $lastPaymentDate): self
    {
        $this->lastPaymentDate = $lastPaymentDate;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of monthlyInstallment
     */ 
    public function getMonthlyInstalment(): float
    {
        return $this->monthlyInstalment;
    }

    /**
     * Set the value of monthlyInstallment
     *
     * @return  self
     */ 
    public function setMonthlyInstalment(float $monthlyInstalment): self
    {
        $this->monthlyInstalment = $monthlyInstalment;

        return $this;
    }

    /**
     * Get the value of arrears
     */ 
    public function getArrears(): float
    {
        return $this->arrears;
    }

    /**
     * Set the value of arrears
     *
     * @return  self
     */ 
    public function setArrears(float $arrears): self
    {
        $this->arrears = $arrears;

        return $this;
    }

    /**
     * Get the value of openingBalance
     */ 
    public function getOpeningBalance(): float
    {
        return $this->openingBalance;
    }

    /**
     * Set the value of openingBalance
     *
     * @return  self
     */ 
    public function setOpeningBalance(float $openingBalance): self
    {
        $this->openingBalance = $openingBalance;

        return $this;
    }

    /**
     * Get the value of currentBalance
     */ 
    public function getCurrentBalance(): float
    {
        return $this->currentBalance;
    }

    /**
     * Set the value of currentBalance
     *
     * @return  self
     */ 
    public function setCurrentBalance(float $currentBalance): self
    {
        $this->currentBalance = $currentBalance;

        return $this;
    }
}