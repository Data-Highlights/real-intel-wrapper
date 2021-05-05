<?php

namespace Wrapper\Objects;

class VerificationResult
{
    private string $verificationResult;
    private string $reference;
    private int $transactionId;
    private DocumentSummary $documentSummary;
    private SelfieSummary $selfieSummary;

    /**
     * Get the value of verificationResult
     */ 
    public function getVerificationResult(): string
    {
        return $this->verificationResult;
    }

    /**
     * Set the value of verificationResult
     *
     * @return  self
     */ 
    public function setVerificationResult(string $verificationResult): self
    {
        $this->verificationResult = $verificationResult;

        return $this;
    }

    /**
     * Get the value of reference
     */ 
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference(string $reference): self
    {
        $this->reference = $reference;

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
     * Get the value of documentSummary
     */ 
    public function getDocumentSummary(): DocumentSummary
    {
        return $this->documentSummary;
    }

    /**
     * Set the value of documentSummary
     *
     * @return  self
     */ 
    public function setDocumentSummary(DocumentSummary $documentSummary): self
    {
        $this->documentSummary = $documentSummary;

        return $this;
    }

    /**
     * Get the value of selfieSummary
     */ 
    public function getSelfieSummary(): SelfieSummary
    {
        return $this->selfieSummary;
    }

    /**
     * Set the value of selfieSummary
     *
     * @return  self
     */ 
    public function setSelfieSummary(SelfieSummary $selfieSummary): self
    {
        $this->selfieSummary = $selfieSummary;

        return $this;
    }
}