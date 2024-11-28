<?php

namespace Clutz88\EnumComparison\Tests\Stubs;

use Clutz88\EnumComparison\HasComparisons;

enum IntEnum: int
{
    use HasComparisons;

    case test = 1;
    case testing = 2;
}
