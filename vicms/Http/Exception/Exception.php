<?php

namespace Vicms\Http\Exception;

use Vicms\Controller\BaseController;

class Exception
{
    public function __construct($errorCode = 0, $message = '')
    {
        http_response_code($errorCode);
        (new BaseController)->renderError($errorCode, $message);
        die;
    }
}