<?php

namespace Wrapper;

use Exception;
use PHPUnit\TextUI\XmlConfiguration\IniSetting;
use Wrapper\Core\Individual;
use Wrapper\Objects\Consumer;
use Wrapper\Objects\VerificationResult;

/**
 * This is the main delegation class which communicates with the individual wrapper classes.
 * 
 * @author Christopher Smit <chris@realintel.co.za>
 * @package Real Intel Wrapper
 * @version 1.0.0
 * @copyright 2020 Data Highlights (Pty) Ltd
 */
class RealIntelDelegate
{
    /**
     * The configuration parameters required for making calls.
     * @var array
     */
    private array $config;

    /**
     * The constructor for the delegation class.
     *
     * @param array $config The configuration parameters required for making calls.
     * @throws Exception
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Returns a Consumer Trace Lite object for the provided ID number
     *
     * @param string $idNo The id number to lookup
     * @param string $lastName The last name of this individual which will be matched with the id number
     * @param string $ref A unique reference to be passed back to you
     * @return Consumer
     */
    public function doConsumerTraceLite(string $idNo, string $lastName, string $ref = ""): Consumer
    {
        return Individual::doConsumerTraceLite($this->config, $idNo, $lastName, $ref);
    }

    /**
     * Returns a Consumer Trace object for the provided ID number
     *
     * @param string $idNo The id number to lookup
     * @param string $lastName The last name of this individual which will be matched with the id number
     * @param string $ref A unique reference to be passed back to you
     * @return Consumer
     */
    public function doConsumerTrace(string $idNo, string $lastName, string $ref = ""): Consumer
    {
        return Individual::doConsumerTrace($this->config, $idNo, $lastName, $ref);
    }

    /**
     * Returns a Consumer Trace Pro object for the provided ID number
     *
     * @param string $idNo The id number to lookup
     * @param string $lastName The last name of this individual which will be matched with the id number
     * @param string $ref A unique reference to be passed back to you
     * @return Consumer
     */
    public function doConsumerTracePro(string $idNo, string $lastName, string $ref = ""): Consumer
    {
        return Individual::doConsumerTracePro($this->config, $idNo, $lastName, $ref);
    }

    /**
     * Returns an array of contacts linked to a telephone number
     *
     * @param string $telephone The telephone number to check
     * @param string $lastName The last name of the individual believed to own this number
     * @param string $ref A unique reference to be passed back to you
     * @return iterable
     */
    public function doTelephoneTrace(string $telephone, string $lastName, string $ref = ""): iterable
    {
        return Individual::doTelephoneTrace($this->config, $telephone, $lastName, $ref);
    }

    /**
     * Initiates a request for an individual to take a selfie for the Consumer Trace DOV test
     *
     * @param string $idNo The id number of the individual
     * @param string $cellno The cell number to send the request to
     * @param string $ref A unique reference to be passed back to you
     * @return integer
     */
    public function doConsumerTraceDOV(string $idNo, string $cellNo, string $ref = ""): int
    {
        return Individual::doConsumerTraceDOV($this->config, $idNo, $cellNo, $ref);
    }

    /**
     * Retrieves the result of a DOV check based on ID
     *
     * @param integer $dovResultId The id for the DOV check
     * @return Consumer|null
     */
    public function getConsumerTraceDOVResult(int $dovResultId): ?Consumer
    {
        return Individual::getConsumerTraceDOVResult($this->config, $dovResultId);
    }

    /**
     * Initiates a request to validate an id document and selfie
     *
     * @param array $payload The required payload to do a verification as per the documentation at https://api.realintel.co.za/docs/realintel
     * @return integer
     */
    public function doIDDocumentVerification(array $payload): int
    {
        return Individual::doIDDocumentVerification($this->config, $payload);
    }

    /**
     * Retrieves the result of a ID document verification
     *
     * @param integer $resultId The id from the IDDocumentVerification call
     * @return Consumer|null
     */
    public function getIDDocumentVerificationResult(int $resultId): ?VerificationResult
    {
        return Individual::getIDDocumentVerificationResult($this->config, $resultId);
    }
}