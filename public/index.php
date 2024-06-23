<?php
use App\Infrastructure\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return static function (array $context) {
    return new Kernel((string) $context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
