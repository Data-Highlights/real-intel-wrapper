<?php

namespace Wrapper\Objects;

class DOVResult
{
    private string $deceasedStatus;
    private string $consumerIdPhotoMatch;
    private string $livenessDetectionResult;
    private string $consumerIdPhoto;
    private string $consumerCapturedPhoto;
    private Location $locationCaptured;

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
     * Get the value of consumerIdPhotoMatch
     */ 
    public function getConsumerIdPhotoMatch(): string
    {
        return $this->consumerIdPhotoMatch;
    }

    /**
     * Set the value of consumerIdPhotoMatch
     *
     * @return  self
     */ 
    public function setConsumerIdPhotoMatch(string $consumerIdPhotoMatch): self
    {
        $this->consumerIdPhotoMatch = $consumerIdPhotoMatch;

        return $this;
    }

    /**
     * Get the value of livenessDetectionResult
     */ 
    public function getLivenessDetectionResult(): string
    {
        return $this->livenessDetectionResult;
    }

    /**
     * Set the value of livenessDetectionResult
     *
     * @return  self
     */ 
    public function setLivenessDetectionResult(string $livenessDetectionResult): self
    {
        $this->livenessDetectionResult = $livenessDetectionResult;

        return $this;
    }

    /**
     * Get the value of consumerIdPhoto
     */ 
    public function getConsumerIdPhoto(): string
    {
        return $this->consumerIdPhoto;
    }

    /**
     * Set the value of consumerIdPhoto
     *
     * @return  self
     */ 
    public function setConsumerIdPhoto(string $consumerIdPhoto): self
    {
        $this->consumerIdPhoto = $consumerIdPhoto;

        return $this;
    }

    /**
     * Get the value of consumerCapturedPhoto
     */ 
    public function getConsumerCapturedPhoto(): string
    {
        return $this->consumerCapturedPhoto;
    }

    /**
     * Set the value of consumerCapturedPhoto
     *
     * @return  self
     */ 
    public function setConsumerCapturedPhoto(string $consumerCapturedPhoto): self
    {
        $this->consumerCapturedPhoto = $consumerCapturedPhoto;

        return $this;
    }

    /**
     * Get the value of locationCaptured
     */ 
    public function getLocationCaptured(): Location
    {
        return $this->locationCaptured;
    }

    /**
     * Set the value of locationCaptured
     *
     * @return  self
     */ 
    public function setLocationCaptured(Location $locationCaptured): self
    {
        $this->locationCaptured = $locationCaptured;

        return $this;
    }
}