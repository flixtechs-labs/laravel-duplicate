<?php

namespace Flixtechs\Duplicate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flixtechs\Duplicate\Duplicate
 */
class Duplicate extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Flixtechs\Duplicate\Duplicate::class;
    }
}
