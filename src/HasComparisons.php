<?php

namespace Clutz88\EnumComparison;

use BackedEnum;

trait HasComparisons
{
    public function is(mixed $value): bool
    {
        return $value instanceof self && $value === $this;
    }

    public function isNot(mixed $value): bool
    {
        return ! $this->is(...func_get_args());
    }

    public function equals(int|string|BackedEnum $value): bool
    {
        return $this->value === ($value instanceof BackedEnum ? $value->value : $value);
    }

    public function notEquals($value): bool
    {
        return ! $this->equals(...func_get_args());
    }
}
