<?php

namespace Wrapper\Objects;

class SelfieSummary
{
    private string $result;
    private string $resultReason;
    private float $confidence;

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
    public function getResultReason(): string
    {
        return $this->resultReason;
    }

    /**
     * Set the value of resultReason
     *
     * @return  self
     */ 
    public function setResultReason(string $resultReason): self
    {
        $this->resultReason = $resultReason;

        return $this;
    }

    /**
     * Get the value of confidence
     */ 
    public function getConfidence(): float
    {
        return $this->confidence;
    }

    /**
     * Set the value of confidence
     *
     * @return  self
     */ 
    public function setConfidence(float $confidence): self
    {
        $this->confidence = $confidence;

        return $this;
    }
}