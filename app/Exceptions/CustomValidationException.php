<?php

namespace App\Exceptions;

use Exception;
use Throwable;

class CustomValidationException extends Exception
{
    private $details;
    public function __construct($message = "", array $details, int $code)
    {
        parent::__construct($message, $code);

        $this->details = $details;
    }

    public function getDetails()
    {
        return $this->details;
    }
}
