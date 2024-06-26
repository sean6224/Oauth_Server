<?php
declare(strict_types=1);
namespace App\Domain\Shared\Exception;

use Exception;

class NotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
