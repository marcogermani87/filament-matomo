<?php

namespace MarcoGermani87\FilamentMatomo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcoGermani87\FilamentMatomo\FilamentMatomo
 */
class FilamentMatomo extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MarcoGermani87\FilamentMatomo\FilamentMatomo::class;
    }
}
