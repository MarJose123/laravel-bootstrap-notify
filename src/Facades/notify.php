<?php

namespace Marjose\notify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marjose\notify\notify
 */
class notify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'notify';
    }
}
