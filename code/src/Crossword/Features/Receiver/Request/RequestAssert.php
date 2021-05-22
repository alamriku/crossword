<?php

declare(strict_types=1);

namespace App\Crossword\Features\Receiver\Request;

use Symfony\Component\HttpFoundation\Request;
use Webmozart\Assert\Assert;

final class RequestAssert extends Assert
{
    /**
     * @throws RequestException
     */
    public static function missingRequest(?Request $request): void
    {
        if (null === $request) {
            throw RequestException::missingRequest();
        }
    }
}
