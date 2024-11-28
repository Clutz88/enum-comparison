<?php

use Clutz88\EnumComparison\Tests\Stubs\AlternativeEnum;
use Clutz88\EnumComparison\Tests\Stubs\BasicEnum;
use Clutz88\EnumComparison\Tests\Stubs\IntEnum;
use Clutz88\EnumComparison\Tests\Stubs\StringEnum;

it('returns true for is if is exact match')
    ->expect(fn ($test) => StringEnum::test->is($test))
    ->toBeTrue()
    ->with([
        'same enum' => [StringEnum::test],
    ]);

it('return false for is if is exact not match')
    ->expect(fn ($test) => StringEnum::test->is($test))
    ->toBeFalse()
    ->with([
        'wrong case' => [StringEnum::testing],
        'string not enum' => ['test'],
        'wrong enum' => [IntEnum::test],
        'not backed enum' => [BasicEnum::test],
    ]);

it('returns false for is not if is exact match')
    ->expect(fn ($test) => StringEnum::test->isNot($test))
    ->toBeFalse()
    ->with([
        'same enum' => [StringEnum::test],
    ]);

it('return true for is not if is exact not match')
    ->expect(fn ($test) => StringEnum::test->isNot($test))
    ->toBeTrue()
    ->with([
        'wrong case' => [StringEnum::testing],
        'string not enum' => ['test'],
        'wrong enum' => [IntEnum::test],
        'not backed enum' => [BasicEnum::test],
    ]);

it('returns true for equals if value matches')
    ->expect(fn ($test) => StringEnum::test->equals($test))
    ->toBeTrue()
    ->with([
        'same enum' => [StringEnum::test],
        'correct value' => ['test'],
        'different enum with same value' => [AlternativeEnum::test],
    ]);

it('returns false for equals if value does not match')
    ->expect(fn ($test) => StringEnum::test->equals($test))
    ->toBeFalse()
    ->with([
        'same enum' => [StringEnum::testing],
        'incorrect value' => ['testing'],
        'different enum with incorrect value' => [AlternativeEnum::testing],
    ]);

it('returns true for not equals if value does not match')
    ->expect(fn ($test) => StringEnum::test->notEquals($test))
    ->toBeTrue()
    ->with([
        'same enum' => [StringEnum::testing],
        'incorrect value' => ['testing'],
        'different enum with incorrect value' => [AlternativeEnum::testing],
    ]);
