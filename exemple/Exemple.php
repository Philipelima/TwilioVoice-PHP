<?php

require "./../vendor/autoload.php";

use TwilioVoicePhp\Env;
use TwilioVoicePhp\TwilioVoicePHP;

/**
 * Load the environment variables with the Env class
 */
Env::loadEnvs(__DIR__.'/../');

/**
 * Making a call via twilio service. 
 */
$userNumber = "#############";
(new TwilioVoicePHP)->makeCall($userNumber);
