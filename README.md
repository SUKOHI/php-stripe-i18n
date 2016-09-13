# php-stripe-i18n
A PHP package to localize messages of Stripe_CardError.  

*  This package is inspired by [StripeI18n](https://github.com/ekosz/stripe-i18n) (for Ruby). Thank you, ekosz!

# Installation

Execute composer command.

    composer require sukohi/php-stripe-i18n:1.*

# Usage
[Array]

    $stripe_i18n = new \Sukohi\StripeI18n\StripeI18n();
    $errors = $stripe_i18n->getErrors('en');
    print_r($errors);

[String]

    echo $stripe_i18n->getError('processing_error', 'en');
    
    // Or
    
    $default = 'xxx';
    echo $stripe_i18n->getError('processing_error', 'en', $default);
        
# Contribution

If you can translate the messages to other languages, please add a file in the following location.

    ./src/locales/**.php

And I'm glad if you would create a pull request.  
Thank you in advance!

# License

This package is licensed under the MIT License.  
Copyright 2016 Sukohi Kuhoh