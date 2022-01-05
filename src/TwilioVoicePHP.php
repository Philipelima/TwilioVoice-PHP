<?php

namespace TwilioVoicePhp;

use Twilio\Rest\Client;

class TwilioVoicePHP
{

    /**
    * service access credentials
    * @var string
    */
    private static $accountSid;
    private static $authToken;

    
    /**
    * phone numbers needed to make the call
    * @var string
    */
    private $twilioNumber;
    private $userNumber;


    public function __construct()
    {
        $this->setAccountId();
        $this->setTwilioAuthToken();
        $this->setTwilioNumber();
    }


    /**
     * make the call to the informed number
     * @param string
     */
    public function makeCall($userNumber): void
    {
        $twilioNumber    = $this->getTwilioNumber();
        
        $accountSid      = $this->getAccountId();
        $twilioAuthToken = $this->getTwilioAuthToken();

        $twilioClient = new Client($accountSid, $twilioAuthToken);
        
        $twilioClient->account->calls->create(
            $userNumber,
            $twilioNumber,
            array(
                "url" => "http://demo.twilio.com/docs/voice.xml"
            )
        );

    }


    /**
     * Sets the phone number used by the service to make the call
     */
    private function setTwilioNumber(): void
    {
        $this->twilioNumber = getenv('TWILIO_NUMBER');
    }


    /**
     * Return the Service phone number
     * @return string
     */
    private function getTwilioNumber(): string
    {
        return $this->twilioNumber;
    }


    /**
     * Sets the AccountId
     */
    private function setAccountId(): void
    {
        self::$accountSid = getenv('TWILIO_ACCOUNT_SID');
    }


    /**
     * Return the AccountId
     * @return string
     */
    private function getAccountId(): string
    {
        return self::$accountSid;
    }


    /**
     * Sets the AuthToken
     */
    private function setTwilioAuthToken(): void
    {
        self::$authToken = getenv('TWILIO_AUTH_TOKEN');
    }
    

    /**
     * Return the AuthToken
     * @return string
     */
    private function getTwilioAuthToken(): string
    {
        return self::$authToken;
    }
}
