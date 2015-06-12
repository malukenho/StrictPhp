<?php

namespace StrictPhp\TypeChecker\TypeChecker;

use StrictPhp\TypeChecker\TypeCheckerInterface;

final class ArrayTypeChecker implements TypeCheckerInterface
{
    private static $failingCallback;

    /**
     * {@inheritDoc}
     */
    public function canApplyToType($type)
    {
        return strtolower($type) === 'array';
    }

    /**
     * {@inheritDoc}
     */
    public function validate($value)
    {
        return is_int($value);
    }

    /**
     * {@inheritDoc}
     */
    public function simulateFailure($value)
    {
        $callback = self::$failingCallback ?: self::$failingCallback = function (array $value) {
            return $value;
        };

        $callback($value);
    }
}