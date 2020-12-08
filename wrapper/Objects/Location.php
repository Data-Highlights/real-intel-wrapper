<?php

namespace Wrapper\Objects;

class Location
{
    private string $streetNumber;
    private string $route;
    private string $locality;
    private string $country;
    private string $postalCode;
    private float $latitude;
    private float $longitude;

    /**
     * Get the value of streetNumber
     */ 
    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }

    /**
     * Set the value of streetNumber
     *
     * @return  self
     */ 
    public function setStreetNumber(string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    /**
     * Get the value of route
     */ 
    public function getRoute(): string
    {
        return $this->route;
    }

    /**
     * Set the value of route
     *
     * @return  self
     */ 
    public function setRoute(string $route): self
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get the value of locality
     */ 
    public function getLocality(): string
    {
        return $this->locality;
    }

    /**
     * Set the value of locality
     *
     * @return  self
     */ 
    public function setLocality(string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry(string $country): self
    {
        $this->country = $country;

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
     * Get the value of latitude
     */ 
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Set the value of latitude
     *
     * @return  self
     */ 
    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get the value of longitude
     */ 
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Set the value of longitude
     *
     * @return  self
     */ 
    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}