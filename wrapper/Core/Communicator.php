<?php

namespace Wrapper\Core;

use Exception;

class Communicator
{
    /**
     * The authorisation key to be used with the calls
     * @var string
     */
    private string $authKey;

    /**
     * Whether or not the wrapper is set to sandbox
     * @var boolean
     */
    private bool $sandbox;

    /**
     * If enabled, the wrapper will echo notes from calls
     * @var boolean
     */
    public bool $showNotes;

    /**
     * The constructor for the delegation class.
     *
     * @param array $config The configuration parameters required for making calls.
     * @throws Exception
     */
    public function __construct(array $config = [])
    {
        if (isset($config['api_key']) && isset($config['customer_id'])) {
            $this->authKey      = base64_encode(sprintf("%s:%s", $config['api_key'], $config['customer_id']));

            $this->sandbox      = isset($config['sandbox']) ? $config['sandbox'] : false;
            $this->showNotes    = isset($config['show_notes']) ? $config['show_notes'] : false;
        } else throw new Exception("Credentials not provided!");
    }

    /**
     * Convert the string with hyphens to StudlyCaps,
     * e.g. post-authors => PostAuthors
     *
     * @param string $string The string to convert
     *
     * @return string
     */
    private function convertToStudlyCaps($string)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    }

    /**
     * Convert the string with hyphens to camelCase,
     * e.g. add-new => addNew
     *
     * @param string $string The string to convert
     *
     * @return string
     */
    private function convertToCamelCase($string)
    {
        return $this->convertToStudlyCaps($string);
    }

    /**
     * Initiates a call to an API.
     *
     * @param string $endpoint The API endpoint to call
     * @param array $params The parameters for the call
     * @return string
     */
    public function call(string $endpoint, array $params): array 
    {
        $url = "https://api.realintel.co.za/json/" . ($this->sandbox ? "sandbox/" : "") . "individual/" . $endpoint;

        $url .= !empty($params) ? "?" : "";

        foreach ($params as $key => $value) {
            $url .= $this->convertToCamelCase($key) . "=" . $this->convertToCamelCase($value) . "&";
        }
        $url = rtrim($url, "&");

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
        $headers[] = "Authorization: Basic " . $this->authKey;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }

        curl_close ($ch);

        return json_decode($result, true);
    }

    /**
     * Posts a json body to the API
     *
     * @param string $endpoint The API endpoint to call
     * @param array $params The parameters that will be converted to json
     * @return array
     */
    public function post(string $endpoint, array $params): array 
    {
        $url = "https://api.realintel.co.za/json/" . ($this->sandbox ? "sandbox/" : "") . "individual/" . $endpoint;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        $headers = array();
        $headers[] = "Authorization: Basic " . $this->authKey;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch));
        }

        curl_close ($ch);

        return json_decode($result, true);
    }
}