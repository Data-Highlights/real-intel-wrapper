<?php

namespace Wrapper\Core;

use DateTime;
use Exception;
use Wrapper\CallType;
use Wrapper\Objects\Address;
use Wrapper\Objects\Contact;
use Wrapper\Objects\Consumer;
use Wrapper\Objects\DocumentSummary;
use Wrapper\Objects\DOVResult;
use Wrapper\Objects\Employer;
use Wrapper\Objects\Location;
use Wrapper\Objects\EmailAddress;
use Wrapper\Objects\SelfieSummary;
use Wrapper\Objects\TelephoneNumber;
use Wrapper\Objects\ShortTermInsurance;
use Wrapper\Objects\VehicleFinanceAccount;
use Wrapper\Objects\VerificationResult;

class Individual
{
    public static function doConsumerTraceLite(array $config, string $idNo, string $lastName, string $ref = ""): Consumer
    {
        $comm = new Communicator($config);
        $params = [
            "IDNo"      => $idNo,
            "LastName"  => $lastName,
            "Ref"       => $ref
        ];
        $response = $comm->call(CallType::INDIVIDUAL_CONSUMER_TRACE_LITE, $params);

        if ($response['TransactionSuccessful']) {
            $object = new Consumer();
            $object->setIdNumber($response['IDNumber']);
            $object->setPassportNumber($response['PassportNumber']);
            $object->setInitials($response['Initials']);
            $object->setFirstName($response['FirstName']);
            $object->setSecondName($response['SecondName']);
            $object->setThirdName($response['ThirdName']);
            $object->setLastName($response['LastName']);
            $object->setGender($response['Gender']);
            $object->setBirthDate(new DateTime($response['BirthDate']));
            $object->setTitleDesc($response['TitleDesc']);
            $object->setMaritalStatus($response['MaritalStatus']);
            $object->setPrivacyStatus($response['PrivacyStatus']);
            $object->setResidentialAddress($response['ResidentialAddress']);
            $object->setPostalAddress($response['PostalAddress']);
            $object->setHomeTelephone($response['HomeTelephone']);
            $object->setWorkTelephone($response['WorkTelephone']);
            $object->setCellNo($response['CellNo']);
            $object->setEmailAddress($response['EmailAddress']);
            $object->setEmployer($response['Employer']);
            $object->setYourReference($response['YourReference']);
            $object->setTransactionId($response['TransactionID']);

            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $object;
        } else throw new Exception($response['Message']);
    }

    public static function doConsumerTrace(array $config, string $idNo, string $lastName, string $ref = ""): Consumer
    {
        $comm = new Communicator($config);
        $params = [
            "IDNo"      => $idNo,
            "LastName"  => $lastName,
            "Ref"       => $ref
        ];
        $response = $comm->call(CallType::INDIVIDUAL_CONSUMER_TRACE, $params);

        if ($response['TransactionSuccessful']) {
            $object = new Consumer();
            $object->setIdNumber($response['IDNumber']);
            $object->setPassportNumber($response['PassportNumber']);
            $object->setInitials($response['Initials']);
            $object->setFirstName($response['FirstName']);
            $object->setSecondName($response['SecondName']);
            $object->setThirdName($response['ThirdName']);
            $object->setLastName($response['LastName']);
            $object->setGender($response['Gender']);
            $object->setTitleDesc($response['TitleDesc']);
            $object->setMaritalStatus($response['MaritalStatus']);
            $object->setPrivacyStatus($response['PrivacyStatus']);
            $object->setYourReference($response['YourReference']);
            $object->setTransactionId($response['TransactionID']);
            $object->setDeceasedStatus($response['Deceased']);
            
            $addresses = [];
            foreach ($response['Addresses'] as $address) {
                $adrsObj = new Address();
                $adrsObj->setAddressLine1($address['AdrsLine1']);
                $adrsObj->setAddressLine2($address['AdrsLine2']);
                $adrsObj->setAddressLine3($address['AdrsLine3']);
                $adrsObj->setAddressLine4($address['AdrsLine4']);
                $adrsObj->setPostalCode($address['PostalCode']);
                $adrsObj->setAddressType($address['AdrsType']);
                $adrsObj->setLastUpdated(new DateTime($address['LastUpdated']));
                $adrsObj->setCreatedDate(new DateTime($address['CreatedDate']));
                $addresses[] = $adrsObj;
            }
            $object->setAddresses($addresses);

            $numbers = [];
            foreach ($response['TelephoneNumbers'] as $number) {
                $numberObj = new TelephoneNumber();
                $numberObj->setNumber($number['Telephone']);
                $numberObj->setType($number['TelephoneType']);
                $numberObj->setLastUpdated(new DateTime($number['LastUpdated']));
                $numberObj->setCreatedDate(new DateTime($number['CreatedDate']));
                $numbers[] = $numberObj;
            }
            $object->setTelephoneNumbers($numbers);

            $employers = [];
            foreach ($response['Employers'] as $employer) {
                $empObj = new Employer();
                $empObj->setBranchCode($employer['BranchCode']);
                $empObj->setEmployerName($employer['EmpName']);
                $empObj->setOccupation($employer['Occupation']);
                $empObj->setLastUpdated(new DateTime($employer['LastUpdated']));
                $empObj->setCreatedDate(new DateTime($employer['CreatedDate']));
                $employers[] = $empObj;
            }
            $object->setEmployers($employers);

            $emails = [];
            foreach ($response['EmailAddresses'] as $email) {
                $emailObj = new EmailAddress();
                $emailObj->setEmailAddress($email['EmailAddress']);
                $emailObj->setLastUpdated(new DateTime($email['LastUpdated']));
                $emails[] = $emailObj;
            }
            $object->setEmailAddresses($emails);

            $object->setContactsLinkedToCell([]);

            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $object;
        } else throw new Exception($response['Message']);
    }

    public static function doConsumerTracePro(array $config, string $idNo, string $lastName, string $ref = ""): Consumer
    {
        $comm = new Communicator($config);
        $params = [
            "IDNo"      => $idNo,
            "LastName"  => $lastName,
            "Ref"       => $ref
        ];
        $response = $comm->call(CallType::INDIVIDUAL_CONSUMER_TRACE_PRO, $params);

        if ($response['TransactionSuccessful']) {
            $object = new Consumer();
            $object->setIdNumber($response['IDNumber']);
            $object->setPassportNumber($response['PassportNumber']);
            $object->setInitials($response['Initials']);
            $object->setFirstName($response['FirstName']);
            $object->setSecondName($response['SecondName']);
            $object->setThirdName($response['ThirdName']);
            $object->setLastName($response['LastName']);
            $object->setGender($response['Gender']);
            $object->setTitleDesc($response['TitleDesc']);
            $object->setMaritalStatus($response['MaritalStatus']);
            $object->setPrivacyStatus($response['PrivacyStatus']);
            $object->setYourReference($response['YourReference']);
            $object->setTransactionId($response['TransactionID']);
            $object->setDeceasedStatus($response['Deceased']);
            $object->setHomeAffairsVerified($response['HomeAffairsVerified']);
            $object->setCreditScore((float) $response['CreditScore']);
            
            $addresses = [];
            foreach ($response['PostalAddresses'] as $address) {
                $adrsObj = new Address();
                $adrsObj->setAddressLine1($address['AdrsLine1']);
                $adrsObj->setAddressLine2($address['AdrsLine2']);
                $adrsObj->setAddressLine3($address['AdrsLine3']);
                $adrsObj->setAddressLine4($address['AdrsLine4']);
                $adrsObj->setPostalCode($address['PostalCode']);
                $adrsObj->setAddressType($address['AdrsType']);
                $adrsObj->setLastUpdated(new DateTime($address['LastUpdated']));
                $adrsObj->setCreatedDate(new DateTime($address['CreatedDate']));
                $addresses[] = $adrsObj;
            }

            foreach ($response['ResidentialAddresses'] as $address) {
                $adrsObj = new Address();
                $adrsObj->setAddressLine1($address['AdrsLine1']);
                $adrsObj->setAddressLine2($address['AdrsLine2']);
                $adrsObj->setAddressLine3($address['AdrsLine3']);
                $adrsObj->setAddressLine4($address['AdrsLine4']);
                $adrsObj->setPostalCode($address['PostalCode']);
                $adrsObj->setAddressType($address['AdrsType']);
                $adrsObj->setLastUpdated(new DateTime($address['LastUpdated']));
                $adrsObj->setCreatedDate(new DateTime($address['CreatedDate']));
                $addresses[] = $adrsObj;
            }
            $object->setAddresses($addresses);

            $numbers = [];
            foreach ($response['HomeTelephoneNumbers'] as $number) {
                $numberObj = new TelephoneNumber();
                $numberObj->setNumber($number['Telephone']);
                $numberObj->setType($number['TelephoneType']);
                $numberObj->setLastUpdated(new DateTime($number['LastUpdated']));
                $numberObj->setCreatedDate(new DateTime($number['CreatedDate']));
                $numbers[] = $numberObj;
            }

            foreach ($response['WorkTelephoneNumbers'] as $number) {
                $numberObj = new TelephoneNumber();
                $numberObj->setNumber($number['Telephone']);
                $numberObj->setType($number['TelephoneType']);
                $numberObj->setLastUpdated(new DateTime($number['LastUpdated']));
                $numberObj->setCreatedDate(new DateTime($number['CreatedDate']));
                $numbers[] = $numberObj;
            }

            foreach ($response['CellNumbers'] as $number) {
                $numberObj = new TelephoneNumber();
                $numberObj->setNumber($number['Telephone']);
                $numberObj->setType($number['TelephoneType']);
                $numberObj->setLastUpdated(new DateTime($number['LastUpdated']));
                $numberObj->setCreatedDate(new DateTime($number['CreatedDate']));
                $numbers[] = $numberObj;
            }
            $object->setTelephoneNumbers($numbers);

            $employers = [];
            foreach ($response['Employers'] as $employer) {
                $empObj = new Employer();
                $empObj->setBranchCode($employer['BranchCode']);
                $empObj->setEmployerName($employer['EmpName']);
                $empObj->setOccupation($employer['Occupation']);
                $empObj->setLastUpdated(new DateTime($employer['LastUpdated']));
                $empObj->setCreatedDate(new DateTime($employer['CreatedDate']));
                $employers[] = $empObj;
            }
            $object->setEmployers($employers);

            $emails = [];
            foreach ($response['EmailAddresses'] as $email) {
                $emailObj = new EmailAddress();
                $emailObj->setEmailAddress($email['EmailAddress']);
                $emailObj->setLastUpdated(new DateTime($email['LastUpdated']));
                $emails[] = $emailObj;
            }
            $object->setEmailAddresses($emails);

            $object->setContactsLinkedToCell([]);

            $insurances = [];
            foreach ($response['ShortTermInsurances'] as $insurance) {
                $insObj = new ShortTermInsurance();
                $insObj->setProviderName($insurance['ProviderName']);
                $insObj->setDateStarted(new DateTime($insurance['DateStarted']));
                $insObj->setLastPaymentDate(new DateTime($insurance['LastPaymentDate']));
                $insObj->setStatus($insurance['Status']);
                $insObj->setMonthlyInstalment((float) $insurance['MonthlyInstalment']);
                $insObj->setArrears((float) $insurance['Arrears']);
                $insurances[] = $insObj;
            }
            $object->setShortTermInsurances($insurances);

            $financeAccounts = [];
            foreach ($response['VehicleFinanceAccounts'] as $account) {
                $accObj = new VehicleFinanceAccount();
                $accObj->setProviderName($account['ProviderName']);
                $accObj->setDateStarted(new DateTime($account['DateStarted']));
                $accObj->setLastPaymentDate(new DateTime($account['LastPaymentDate']));
                $accObj->setStatus($account['Status']);
                $accObj->setMonthlyInstalment((float) $account['MonthlyInstalment']);
                $accObj->setOpeningBalance((float) $account['OpeningBalance']);
                $accObj->setCurrentBalance((float) $account['CurrentBalance']);
                $accObj->setArrears((float)$account['Arrears']);
                $financeAccounts[] = $accObj;
            }
            $object->setVehicleFinanceAccounts($financeAccounts);

            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $object;
        } else throw new Exception($response['Message']);
    }

    public static function doTelephoneTrace(array $config, string $telephone, string $lastName, string $ref = ""): iterable
    {
        $comm = new Communicator($config);
        $params = [
            "Telephone" => $telephone,
            "LastName"  => $lastName,
            "Ref"       => $ref
        ];
        $response = $comm->call(CallType::INDIVIDUAL_TELEPHONE_TRACE, $params);

        if ($response['TransactionSuccessful']) {
            $contacts = [];
            foreach ($response['Results'] as $result) {
                $contact = new Contact();
                $contact->setIdNumber($result['IDNumber']);
                $contact->setPassportNumber($result['PassportNumber']);
                $contact->setFirstName($result['FirstName']);
                $contact->setLastName($result['LastName']);
                $contact->setBirthDate(new DateTime($result['BirthDate']));
                $contact->setGender($result['Gender']);
                $contact->setYourReference($response['YourReference']);
                $contact->setTransactionId($response['TransactionID']);
                $contacts[] = $contact;
            }

            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $contacts;
        } else throw new Exception($response['Message']);
    } 

    public static function doConsumerTraceDOV(array $config, string $idNo, string $cellNo, string $ref = ""): int
    {
        $comm = new Communicator($config);
        $params = [
            "IDNo"      => $idNo,
            "CellNo"    => $cellNo,
            "Ref"       => $ref
        ];
        $response = $comm->call(CallType::INDIVIDUAL_CONSUMER_TRACE_DOV, $params);

        if ($response['TransactionSuccessful']) {
            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $response['DOVResultID'];
        } else throw new Exception($response['Message']);
    }

    public static function getConsumerTraceDOVResult(array $config, int $resultId): ?Consumer
    {
        $comm = new Communicator($config);
        $params = [
            "DOVResultID"      => $resultId
        ];
        $response = $comm->call(CallType::INDIVIDUAL_CONSUMER_TRACE_DOV_RESULT, $params);

        if ($response['TransactionSuccessful'] && $response['DOVStatus'] == "D") {
            $object = new Consumer();
            $object->setIdNumber($response['IDNumber']);
            $object->setPassportNumber($response['PassportNumber']);
            $object->setInitials($response['Initials']);
            $object->setFirstName($response['FirstName']);
            $object->setSecondName($response['SecondName']);
            $object->setThirdName($response['ThirdName']);
            $object->setLastName($response['LastName']);
            $object->setGender($response['Gender']);
            $object->setBirthDate(new DateTime($response['BirthDate']));
            $object->setTitleDesc($response['TitleDesc']);
            $object->setMaritalStatus($response['MaritalStatus']);
            $object->setPrivacyStatus($response['PrivacyStatus']);
            $object->setResidentialAddress($response['ResidentialAddress']);
            $object->setPostalAddress($response['PostalAddress']);
            $object->setHomeTelephone($response['HomeTelephone']);
            $object->setWorkTelephone($response['WorkTelephone']);
            $object->setCellNo($response['CellNo']);
            $object->setEmailAddress($response['EmailAddress']);
            $object->setEmployer($response['Employer']);
            $object->setYourReference($response['YourReference']);
            $object->setTransactionId($response['TransactionID']);

            $locObj = new Location();
            $locObj->setStreetNumber($response['DOVResult']['LocationCaptured']['StreetNumber']);
            $locObj->setRoute($response['DOVResult']['LocationCaptured']['Route']);
            $locObj->setLocality($response['DOVResult']['LocationCaptured']['Locality']);
            $locObj->setCountry($response['DOVResult']['LocationCaptured']['Country']);
            $locObj->setPostalCode($response['DOVResult']['LocationCaptured']['PostalCode']);
            $locObj->setLatitude((float) $response['DOVResult']['LocationCaptured']['Latitude']);
            $locObj->setLongitude((float) $response['DOVResult']['LocationCaptured']['Longitude']);

            $dov = new DOVResult();
            $dov->setDeceasedStatus($response['DOVResult']['DeceasedStatus']);
            $dov->setConsumerIdPhotoMatch($response['DOVResult']['ConsumerIDPhotoMatch']);
            $dov->setLivenessDetectionResult($response['DOVResult']['LivenessDetectionResult']);
            $dov->setConsumerIdPhoto($response['DOVResult']['ConsumerIDPhoto']);
            $dov->setConsumerCapturedPhoto($response['DOVResult']['ConsumerCapturedPhoto']);
            $dov->setLocationCaptured($locObj);

            $object->setDovResult($dov);

            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $object;
        } else {
            if ($response['DOVStatus'] == "P") {
                echo "Awaiting selfie to be taken by individual.";
                return null;
            } else throw new Exception($response['Message']);
        }
    }

    public static function doIDDocumentVerification(array $config, array $payload): int
    {
        $comm = new Communicator($config);

        $response = $comm->post(CallType::VERIFICATION_ID_DOCUMENT, $payload);

        if ($response['TransactionSuccessful']) {
            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $response['ResultID'];
        } else throw new Exception($response['Message']);
    }

    public static function getIDDocumentVerificationResult(array $config, int $resultId): VerificationResult
    {
        $comm = new Communicator($config);
        $params = [
            "ResultID"      => $resultId
        ];
        $response = $comm->call(CallType::VERIFICATION_ID_DOCUMENT_RESULT, $params);

        if ($response['TransactionSuccessful']) {
            $documentSum = new DocumentSummary();
            $documentSum->setResult($response['Result']['DocumentSummary']['Result']);
            $documentSum->setResultReason($response['Result']['DocumentSummary']['ResultReason']);
            $documentSum->setDocumentType($response['Result']['DocumentSummary']['DocumentType']);
            $documentSum->setIdentityNumber($response['Result']['DocumentSummary']['IdentityNumber']);
            $documentSum->setFirstName($response['Result']['DocumentSummary']['FirstName']);
            $documentSum->setLastName($response['Result']['DocumentSummary']['LastName']);
            $documentSum->setEnglishFirstName($response['Result']['DocumentSummary']['EnglishFirstName']);
            $documentSum->setEnglishLastName($response['Result']['DocumentSummary']['EnglishLastName']);
            $documentSum->setGender($response['Result']['DocumentSummary']['Gender']);
            $documentSum->setAge($response['Result']['DocumentSummary']['Age']);
            $documentSum->setDateOfBirth($response['Result']['DocumentSummary']['DateOfBirth']);
            $documentSum->setDateOfExpiry($response['Result']['DocumentSummary']['DateOfExpiry']);
            $documentSum->setDateOfIssue($response['Result']['DocumentSummary']['DateOfIssue']);
            $documentSum->setIssuingState($response['Result']['DocumentSummary']['IssuingState']);
            $documentSum->setIssuingStateCode($response['Result']['DocumentSummary']['IssuingStateCode']);
            $documentSum->setDocumentNumber($response['Result']['DocumentSummary']['DocumentNumber']);
            $documentSum->setAuthority($response['Result']['DocumentSummary']['Authority']);
            $documentSum->setTermRemaining($response['Result']['DocumentSummary']['TermRemaining']);

            $selfieSum = new SelfieSummary();
            $selfieSum->setResult($response['Result']['SelfieSummary']['Result']);
            $selfieSum->setResultReason($response['Result']['SelfieSummary']['ResultReason']);
            $selfieSum->setConfidence((float) $response['Result']['SelfieSummary']['Confidence']);

            $result = new VerificationResult();
            $result->setVerificationResult($response['Result']['VerificationResult']);
            $result->setReference($response['YourReference']);
            $result->setTransactionId($response['TransactionID']);
            $result->setDocumentSummary($documentSum);
            $result->setSelfieSummary($selfieSum);

            if ($comm->showNotes && isset($response['NOTE'])) {
                echo $response['NOTE'];
            }

            return $result;
        } else throw new Exception($response['Message']);
    }
}