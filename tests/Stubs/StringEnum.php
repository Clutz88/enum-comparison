<?php

namespace Clutz88\EnumComparison\Tests\Stubs;

use Clutz88\EnumComparison\HasComparisons;

enum StringEnum: string
{
    use HasComparisons;

    case test = 'test';
    case testing = 'testing';
}
