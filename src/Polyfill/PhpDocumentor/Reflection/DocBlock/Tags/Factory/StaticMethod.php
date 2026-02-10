<?php

declare(strict_types=1);

namespace phpDocumentor\Reflection\DocBlock\Tags\Factory;

/**
 * Compatibility polyfill for reflection-docblock 5.6.6 where this interface is missing.
 */
if (!interface_exists('phpDocumentor\\Reflection\\DocBlock\\Tags\\Factory\\StaticMethod', false)) {
    interface StaticMethod
    {
    }
}
