# TwilioVoice-PHP

This is an example implementation of Twilio's phone call API.

You can clone this code to your project:

```git
	git clone https://github.com/Philipelima/TwilioVoice-PHP.git
``` 

## Requirements

1. PHP 7.4 <
2. Twilio/sdk ^5.0 


### Installing Twilio

You will need to install the Twilio SDK. Run this command on your terminal to install:

```
	composer require twilio/sdk 
```


### Setting the environment variables

Add an **.env** file to your project root, it must contain the variables: 

```bash
TWILIO_ACCOUNT_SID= #Your Twilio Account Id.
TWILIO_AUTH_TOKEN=  #Your Twilio Authetication Token.
TWILIO_NUMBER= #The number provided by twilio.
```

## Using the code

In your code file, add the command to load the namespaces:

```php
	use TwilioVoicePhp\Env;
	use TwilioVoicePhp\TwilioVoicePHP;
```

To load the environment variables use:

```php
	$envPath = __DIR__; //the .env file path
	Env::load($envPath);
```

Making a phone call via Twilio Service:

```php
	$userNumber = "#############";
	(new TwilioVoicePHP)->makeCall($userNumber);
```

### For more information about Twilio:

Twilio Doc's: https://www.twilio.com/docs/libraries/php

Twilio Github: https://github.com/twilio/twilio-php
