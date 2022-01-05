<?php

namespace TwilioVoicePhp;

class Env
{
    /**
     * Load the environment variables
     * @param string
     * @return bool
     */
    public static function loadEnvs($envPath): bool
    {

        
        if (!file_exists($envPath . '/.env')) {
            return false;
        }

        $lines = file($envPath . '/.env');
        foreach ($lines as $line) {
            putenv(trim($line));
        }

        return true;
        
    }
}
