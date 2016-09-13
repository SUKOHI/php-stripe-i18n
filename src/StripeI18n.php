<?php

namespace Sukohi\StripeI18n;

class StripeI18n {

    private $errors = [];

    public function getError($code, $locale, $default = '') {

        $errors = $this->getErrors($locale);

        if(isset($errors[$code])) {

            return $errors[$code];

        }

        return $default;

    }

    public function getErrors($locale) {

        if(!isset($errors[$locale])) {

            $this->errors[$locale] = require __DIR__ . '/locales/' . $locale .'.php';

        }

        return $this->errors[$locale];

    }

}