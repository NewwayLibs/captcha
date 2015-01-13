<?php namespace Mews\Captcha;

use Illuminate\Validation\Validator;

class CaptchaValidator extends Validator
{
    public function validateCaptcha($attribute, $value, $parameters)
    {
        $formId = !empty($parameters) ? array_shift($parameters) : null;

        return \Captcha::check($value, $formId);
    }
}
