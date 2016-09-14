# php-stripe-i18n
A PHP package to localize messages of Stripe_CardError.  

# Installation

Execute composer command.

    composer require sukohi/php-stripe-i18n:2.*

# Usage
[Array]

    $stripe_i18n = new \Sukohi\StripeI18n\StripeI18n();
    $errors = $stripe_i18n->getErrors('en');
    print_r($errors);

[String]

    echo $stripe_i18n->getError('incorrect_number', 'en');
    
    // Or
    
    $default = 'xxx';
    echo $stripe_i18n->getError('incorrect_number', 'en', $default);
        
# Contribution

If you can translate the messages to other languages, please add a file in the following location.

    ./src/locales/**.php

And I'm glad if you would create a pull request.  
Thank you in advance!

# License

This package is licensed under the MIT License.  
Copyright 2016 Sukohi Kuhoh