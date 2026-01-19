<?php

namespace App\Exceptions;

use Exception;

class UserRegisterException extends Exception
{
    public function __construct(string $message = "User registration failed" ,int $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
