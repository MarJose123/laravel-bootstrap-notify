<?php

namespace Marjose\notify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marjose\notify\notify
 */
class notifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'notify';
    }
}