<?php

namespace App\Exceptions;

use Exception;

class UserLoginException extends Exception
{
    public function __construct(string $message = "User login failed" ,int $code = 500, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
