<?php

namespace Marjose\notify;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marjose\notify\notify
 */
class notifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-bootstrap-notify';
    }
}
